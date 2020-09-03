<?php 

//$tim_sql=$_COOKIE["tim_sql"];
$classI=empty($_GET['classI'])?null:trim($_GET['classI']);
$classII=empty($_GET['classII'])?null:trim($_GET['classII']);

if( ($classI=="p") && ($classII=="p") )
{
$wher='SELECT count(*) as sum from dbr_total where classI="Super_Enhancer" ';
$zss='SELECT * from dbr_total where classI="Super_Enhancer"'; 
$ss='SELECT * from dbr_total where classI="Super_Enhancer"'; 
$wss='SELECT `Set` from dbr_total where where classI="Super_Enhancer"';
}
else
{

                    if(empty($classII))
                    {
                    $dbclassII=null; 
                    $wss=' SELECT `Set` from '.$classI.' where ';       
                    }else
                    {
                    $dbclassII='where classII="'.$classII.'"'; 
                    $wss=' SELECT `Set` from '.$classI.' '.$dbclassII.' and ';
                    }   

$wher='SELECT count(*) as sum from '.$classI.' '.$dbclassII.' ';
$zss='SELECT * from '.$classI.' '.$dbclassII.' ';  
$ss='SELECT * from '.$classI.'';

}  




header("Content-type: text/html;charset=utf-8");//防止乱码
//1、获取链接
$conn=@mysql_connect("39.98.139.1","root","hmudq?lcq#_>123987Zz");
if(!$conn){
    //mysql_error()是返回mysql的上一次操作
    die("连接失败".mysql_error());
}else{
        //echo '连接成功！<br/>';
}
//2、选择对应的数据库
@mysql_select_db("cjx");
//3、设置操作编码（可有可无，建议有）
mysql_query("set names utf8");//保证是按照utf8码操作的【utf8无-的，有-的是网页版的！！！！！！！】

$draw = $_GET['draw']; //第几次请求
//排序
$order_column = $_GET['order']['0']['column']; // 哪一列排序
$order_dir= $_GET['order']['0']['dir']; // ase desc 升序或者降序
//拼接排序sql
$orderSql = "";
if(isset($order_column)){
    $i = intval($order_column);
    switch($i){
        case 0:$orderSql = " order by `Set` ".$order_dir;break;
        case 1:$orderSql = " order by classI ".$order_dir;break;
        case 2:$orderSql = " order by classII ".$order_dir;break;
        case 3:$orderSql = " order by cast(length as UNSIGNED INTEGER) ".$order_dir;break;
        default:$orderSql = " ";
    }
}

//分页
$start = $_GET['start'];//从多少开始
$length = $_GET['length'];//数据长度
$limitSql = '';
$limitFlag = isset($_GET['start']) && $length != -1 ;
if ($limitFlag ) {
    $limitSql = " LIMIT ".intval($start).", ".intval($length);
}

//定义查询数据总记录数sql
$sumSql = $wher;
//条件过滤后记录数 必要
$recordsFiltered = 0;
//表的总记录数 必要
$recordsTotal = 0;
$recordsTotalResult = mysql_query($sumSql,$conn);
while($row=mysql_fetch_assoc($recordsTotalResult)){
    $recordsTotal = $row['sum'];
}
//搜索//定义过滤条件查询过滤后的记录数sql
$search = $_GET['search']['value'];//获取前台传过来的过滤条件
// 每列搜索
// $j = 1;
// $search_arr =array();
// $colSearchSql='';
// for($j=0;$j<6;$j++){
//     $colSearchable = $_GET['columns'][$j]['searchable'];
//     $colSearchVal = $_GET['columns'][$j]['search']['value'];
//     if(strlen($colSearchVal)>0 && $colSearchable == 'true' ){
//         switch ($j) {
//             case 0: $colSearchVal = "gene_name LIKE '%".$colSearchVal."%'";
//                     array_push($search_arr,$colSearchVal);
//                     break;
//             case 1: $colSearchVal = "fc LIKE '%".$colSearchVal."%'";
//                     array_push($search_arr,$colSearchVal);
//                     break;
//             case 2: $colSearchVal = "log2fc LIKE '%".$colSearchVal."%'";
//                     array_push($search_arr,$colSearchVal);
//                     break;
//             default:
//                 # code...
//                 break;
//         }
//     }
// }
$zSearchSql = "";
$totalResultSql = $zss;
$sql='';
if(!empty($_GET["search"]["value"])){
    // $colSearchSql = " WHERE ".implode(" AND ",$search_arr);
    $search = $_GET["search"]["value"];
    $zSearchSql = "WHERE `Set` LIKE '%".$search."%' 
    "
   ;
    $sql=' '.$ss.' where  `Set` IN  ( '.$wss.'  `Set` LIKE "%'.$search.'%" ) '.$limitSql.' ';

    $recordsFilteredResult = mysql_query("SELECT count(*) as sum FROM (".$totalResultSql.") AS TEM ".$zSearchSql);
    while ($row = mysql_fetch_assoc($recordsFilteredResult)) {
        $recordsFiltered =  $row['sum'];
    }
}
else{
    $sql=$totalResultSql.$zSearchSql.$orderSql.$limitSql;

    $recordsFiltered = $recordsTotal;
}

// $sumSearchSql = '';
// if(strlen($colSearchSql)>0 && strlen($search)>0){
//     $sumSearchSql = $colSearchSql." AND (".$zSearchSql.")";
// }else if(strlen($colSearchSql)>0 && strlen($search)==0){
//     $sumSearchSql = $colSearchSql;
// }else if(strlen($colSearchSql)==0 && strlen($search)>0){
//     $sumSearchSql = " WHERE ".$zSearchSql;
// }else{
//     $sumSearchSql = '';
// }
// if(strlen($sumSearchSql)>0){
//     $recordsFilteredResult = mysql_query($sumSql.$sumSearchSql);
//     while ($row = mysql_fetch_assoc($recordsFilteredResult)) {
//         $recordsFiltered =  $row['sum'];
//     }
// }else{
//     $recordsFiltered = $recordsTotal;
// }
// query data


$infos = array();
// 拼接最终SQL
// echo $totalResultSql;
// echo $zSearchSql;
// echo $orderSql;
// echo $limitSql;
$dataResult = mysql_query($sql,$conn);
while ($row = mysql_fetch_assoc($dataResult)) {
    array_push($infos,$row);
}

// return data
echo json_encode(array(
    "draw" => $draw,
    "recordsTotal" =>$recordsTotal,  // necessary
    "recordsFiltered" =>$recordsFiltered, // necessary
    "data" =>$infos // necessary
    ),JSON_UNESCAPED_UNICODE);
//print_r ($infos);
?>