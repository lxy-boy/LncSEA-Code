<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lnc Data Browse</title>
	<link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="public/img/favicon.ico"/>
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="http://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	
			<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
		<script src='https://www.echartsjs.com/gallery/vendors/echarts/echarts.min.js'></script>
		<script src='https://www.echartsjs.com/gallery/vendors/echarts/extension/dataTool.js'></script>
	<link rel="stylesheet" href="public/css/header.css">
	<link rel="stylesheet" href="public/css/footer.css"/>
	<link rel="stylesheet" href="public/css/ico.css">
	 <script src="echarts.js"></script>
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
		<link rel="stylesheet" href="a.css">
	<script src="b.js"></script>

	<link href="/VARAdb/public/css/dataTables.bootstrap.min-1.10.13.css" rel="stylesheet">
	<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>
    <link href="css/style.css" rel="stylesheet">
	<style type="text/css">
		.bottom{margin-top:12px;}
		.dataTables_filter{margin-top:8px;}
		.dataTables_length{margin-top:8px;}
		#accordion .panel-heading{
		    padding: 0;
		    border: none;
		    border-radius: 0;
		    position: relative;
		}
		.panel-title{
			font-size: 20px;
		}
		#accordion .panel-title a{
		    display: block;
		    padding: 15px 20px;
		    margin: 0;
		    background: #fe7725;
		    font-size: 18px;
		    font-weight: 700;
		    letter-spacing: 1px;
		    color: #fff;
		    border-radius: 0;
		    position: relative;
		}
		#accordion .panel-title a.collapsed{ 
			background: #1c2336;}
		#accordion .panel-title a:before,
		#accordion .panel-title a.collapsed:before{
		    content: "\f068";
		    font-family: fontawesome;
		    width: 30px;
		    height: 30px;
		    line-height: 25px;
		    border-radius: 50%;
		    background: #fe7725;
		    font-size: 14px;
		    font-weight: normal;
		    color: white;
		    text-align: center;
		    border: 3px solid #fff;
		    position: absolute;
		    top: 10px;
		    right: 14px;
		}
		#accordion .panel-title a.collapsed:before{
		    content: "\f067";
		    background: white;
		    border: 4px solid white;
		}
		#accordion .panel-title a:after,
		#accordion .panel-title a.collapsed:after{
		    content: "";
		    width: 17px;
		    height: 7px;
		    background: white;
		    position: absolute;
		    top: 22px;
		    right: 0;
		}

		#accordion .panel-body{
		    border-left: 3px solid white;
		    border-top: none;
		    background: white;
		    font-size: 15px;
		    color: #1c2336;
		    line-height: 27px;
		    position: relative;
		}
		#accordion .panel-body:before{
		    content: "";
		    height: 3px;
		    width: 100%;
		    background: white;
		    position: absolute;
		    bottom: 0;
		    left: 0;
		}

		.nav li .active
		{
		color: #60BDA0;
		}


		.navbot {
    height:5px;
    width:100%;
    background: -webkit-linear-gradient(#D3D3D3, #fff); /* Safari 5.1 - 6.0 */
    background: -o-linear-gradient(#D3D3D3, #fff); /* Opera 11.1 - 12.0 */
    background: -moz-linear-gradient(#D3D3D3, #fff); /* Firefox 3.6 - 15 */
    background: linear-gradient(#D3D3D3, #fff); /* 标准的语法,必须放最后 */
		}

        .odd a {
            color: #0c2e8a;
        }
        .even a {
            color: #0c2e8a;
        }
        .odd a:hover{
            color: #50d8af;
        }
        .even a:hover{
            color: #50d8af;
        }
        .panel-default > .panel-heading {
            background-color:#50d8af;
        }
	</style>
</head>

<body id="body">
<br>
<br>


<!--==========================
  Header
============================-->
<header id="header"  style="position: fixed;z-index: 1;top:0;display: block;width:  100%;">
    <div class="container">

        <div id="logo" class="pull-left">
            <h1><a href="#body" class="scrollto">Lnc<span>SEA</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="Analysis.php">Analysis</a></li>
                <li><a href="Search.php">Search</a></li>
                <li class="menu-active"><a href="data-browse.php">Browse</a></li>
                <li><a href="/LncSEA/id_conversion.php">ID conversion</a></li>
                <li><a href="download.php">Download</a></li>
                <li><a href="help.php">Help</a></li>
                <li class="menu-has-children"><a href="http://www.licpathway.net/">Contact</a></li>

            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

			
<?php 


					
					include 'public/conn.php';
					$classI=empty($_GET['classI'])?null:trim($_GET['classI']);

					//$classI=$_GET["classI"];
					if ($classI!=null) {
					$c=preg_replace('/[\s　]/', '_', $classI);
					$dbclassI='dbr_'.$c;
					}else
					{
					$dbclassI='dbr_total';	
					}
				$classII=empty($_GET['classII'])?null:trim($_GET['classII']);

					//$classII=$_GET["classII"];	



				




					if(empty($classII))
					{
					$dbclassII=null;		
					}else
					{
					$dbclassII='where classII="'.$classII.'"';	
					}	




					if (empty($classI))
						{
						$tem1='GROUP BY classI';
						$tem3=null;									 
						}
					else
						{
						$tem1='where classI="'.$classI.'"';
						$tem3="active";
						}


					if (empty($classII))
						{
						$tem2=null;
						$tem4=null;
					}
					else
					{
						$tem2='where classII="'.$classII.'"';
						$tem4="active";
					}									 
					

					if(($tem1!=null)&&($tem2==null))
					{	  
					$tem2='where classI="'.$classI.'"';
					}
					
					if(($tem3==null)&&($tem2!=null))
					{	  
					$tem1='where classII="'.$classII.'"';
					}

				// 拼凑sql语句，得到用户感兴趣的结果，只可意会，无法言传
				?>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-5 col-md-offset-6">
		
		</div>
	</div>	



<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->			
<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->

<!------------------------------------------------------------------------------------------------------->
<?php 

if ($classI!=null || $classII!=null)	
{
$sub_class=$classII;
if($classI!=null && $classII!=null)
{
$tem2='where classI="'.$classI.'" and classII="'.$classII.'"';
}	

//echo $dbclassI;
//echo $classII;
//echo "<br>";	
//echo $dbclassII;

?>

	<div class="row">
<div class="row">


</div>
<div class="row">
	<div class="col-md-offset-1">
	<div style="margin-left:20px;">
	<h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Data Browse</h2>
	</div>
		</div>
	<div class="col-lg-3 col-md-offset-1">

		<div class="panel-group" role="tablist">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title"><b>Class</b></h4>
				</div>
				<div class="list-group" id="left2_classI_1">
				<?php  
					$left1='SELECT classI,count(classI) AS count,sum(paixun) AS zongpaixu
										from databrowse_left
										'.$tem1.'
										
										GROUP BY classI
										ORDER BY zongpaixu asc
										limit 5;'			

										; 
										   
					$left_result1=mysql_query($left1,$conn);	
					while($row = mysql_fetch_assoc($left_result1))
				{
						$classI=$row["classI"];
						$count=$row["count"];				 
				
					if (empty($tem3))
					{
						echo '<a class="list-group-item '.$tem3.'"  href="data-browse.php?&classI='.$classI.'&classII='.$classII.'"><span class="badge">'.$count.'</span>'.$classI.'</a>';
						$classI=null;
					}
					else
					{
					   echo '<a class="list-group-item '.$tem3.'" href="data-browse.php?&classI=&classII='.$classII.'"><span class="badge">'.$count.'</span>'.$classI.'</a>';
					}		

				}
				?>	

				<div class="collapse" id="left2_classI_1_collapse">
				<?php 
					$left12='SELECT classI,count(classI) AS count,sum(paixun) AS zongpaixu
										from databrowse_left
										'.$tem1.'
										GROUP BY classI
										ORDER BY zongpaixu asc
										limit 5,500;'
										;		 
					$left_result12=mysql_query($left12,$conn);	

					while($row = mysql_fetch_assoc($left_result12))
				{
						$classI=$row["classI"];
						$count=$row["count"];				 
					
				if (empty($tem3))
					{
						echo '<a class="list-group-item '.$tem3.'"  href="data-browse.php?&classI='.$classI.'&classII='.$classII.'"><span class="badge">'.$count.'</span>'.$classI.'</a>';
						$classI=null;
					}
					else
					{
					   echo '<a class="list-group-item '.$tem3.'" href="data-browse.php?&classI=&classII='.$classII.'"><span class="badge">'.$count.'</span>'.$classI.'</a>';
					}		
				}
				?>
				</div>
						<a id="left2_classI_1_collapse_btn" class="text-center list-group-item" role="button" data-toggle="collapse" href="#left2_classI_1_collapse" aria-expanded="false">
							<span class="glyphicon glyphicon-chevron-down"></span>
						</a>	
				</div>
			</div>
		</div>
	





		<div class="panel-group" role="tablist" style="overflow-y:auto;height: 520px;">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title"><b>Sub class</b></h4>
				</div>
				<div class="list-group" id="left_classII_1">
				<?php  
					$left2='SELECT classII,count(classII) AS count
										from dbr_total
										'.$tem2.'
										GROUP BY classII
										ORDER BY count desc
										limit 5;'			

										; 
										   
					$left_result21=mysql_query($left2,$conn);	
					while($row = mysql_fetch_assoc($left_result21))
				{
						$classII=$row["classII"];
						$count=	$row["count"];	 
					
				if (empty($tem4))
					{
						echo '<a class="list-group-item '.$tem4.'"  href="data-browse.php?&classI='.$classI.'&classII='.$classII.'"><span class="badge">'.$count.'</span>'.$classII.'</a>';
						$classII=null;
					}
					else
					{
					   echo '<a class="list-group-item '.$tem4.'" href="data-browse.php?&classI='.$classI.'&classII="><span class="badge">'.$count.'</span>'.$classII.'</a>';
					}		

				}
				?>	

				<div class="collapse" id="left_classII_1_collapse">
				<?php 
					$left22='          
										SELECT classII,count(classII) AS count
										from dbr_total
										'.$tem2.'
										GROUP BY classII
										ORDER BY count desc
										limit 5,500;'
										;		 
					$left_result22=mysql_query($left22,$conn);	

					while($row = mysql_fetch_assoc($left_result22))
				{
						$classII=$row["classII"];
						$count=	$row["count"];			 
					
				echo '<a class="list-group-item" href="data-browse.php?&classII='.$classII.'"><span class="badge">'.$count.'</span>'.$classII.'</a>';
				}
				?>
				</div>
						<a id="left_classII_1_collapse_btn" class="text-center list-group-item" role="button" data-toggle="collapse" href="#left_classII_1_collapse" aria-expanded="false">
							<span class="glyphicon glyphicon-chevron-down"></span>
						</a>	
				</div>
			</div>
		</div>



		
	</div>

	<div class="col-lg-7" style="width:60%">
	<table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
               <thead>
               <tr>
                   <th>Set<a style="" href="help.php?" class="glyphicon glyphicon-info-sign"></a></th>
                   <th>Class<a style="" href="help.php?" class="glyphicon glyphicon-info-sign"></a></th>
                   <th >Sub Class<a style="" href="help.php?" class="glyphicon glyphicon-info-sign"></a></th>
                   <th>Count<i class="glyphicon glyphicon-question-sign" title="Number of lncRNAs of this set"></i></th>
               </tr>
              </thead>
            </table>

             <script>
            $(function(){
                // oTable 全局变量
                oTable = initTable();

              });//jquery end
            function initTable () {
              var table = $("#example").DataTable({
				"dom": '<"top row"<"col-lg-2 col-md-2 pull-left"i><"col-lg-5 col-md-5 pull-right"f>>rt<"bottom row"<"col-lg-2 col-lg-2 pull-left"l><"col-lg-9 col-lg-9 pull-right"p>><"clear">',
                "paging":true,
                "pagingType":"full_numbers",
                "lengthMenu":[15,25,50,75],
                "processing": true,
                "searching": true, //是否开启搜索
                "serverSide": true,//开启服务器获取数据
                "order":[0,'asc'],//默认排序
                "ajax":{ // 获取数据
                "url":"data-browse_server.php",
                "dataType":"json", //返回来的数据形式
                "data":{"classI":"<?php echo $dbclassI?>","classII":"<?php echo $sub_class?>"}

                },
                "bPaginage":true,
                    "columns":[ //定义列数据来源
                      {'data':"Set"},
                      {'data':"classI"},
                      {'data':"classII"},
                      {'data':"length"},
                    ],

              "columnDefs": [ //自定义列

                          /*{
                            "targets":[1],
                            "orderable":false  //禁止排序
                          },*/
                          {
                            "targets":[2],
                            "searchable":false //禁止搜索
                          },
                          {
                           "targets": 0, //改写哪一列
                           "data": "classII",
                           "render": function(data, type, row) {
							if(row.classI=="EQTL" || row.classI=="Drug")
                           	{
                           	var hreclass=row.classII.split("_")[0];
                           	return "<a href='databrowse/set_"+row.classI+"_"+hreclass+".php?classI="+row.classI+"&set="+row.Set+"&classII="+row.classII+"&length="+row.length+"' target='_blank'>"+row.Set+"</a>";
                           	}
							else
							{
							return "<a href='databrowse/set_"+row.classI+".php?classI="+row.classI+"&set="+row.Set+"&classII="+row.classII+"&length="+row.length+"' target='_blank'>"+row.Set+"</a>";
							}
							}
                          },
                          /*{
                            "targets": 9, //改写哪一列<i class="fa fa-plus-circle" style="font-size:15px;"></i>
                            "render": function(data, type, row) {
                              return "<div><span class='badge active'>"+row.Promoter_TF_all+"</span><div class='pull-right'>"+row.promoter_TF_name+"<i id='"+row.gene_name+"|Promoter_TF_all|"+row.tf_name+"' onclick='all_sel(this)' class='fa fa-plus-circle' aria-hidden='true'></i></div></div>";
                            }
                          },*/
                        ],
                  "language":{ // 定义语言
                      "sProcessing":"Loading...",
                      "sLengthMenu":"Show_MENU_ entries",
                      "sZeroRecords":"No matching results",
                      "sInfo": "From _START_ to _END_ results，Total _TOTAL_ items",
                          "sInfoEmpty": "Showing results 0 to 0，Total_ 0 _items",
                          "sInfoFiltered": "",
                          "sInfoPostFix": "",
                          //"sSearch": "Table Search:",
                          "sUrl": "",
                          "sEmptyTable": "The data in the table is empty",
                          "sLoadingRecords": "Loading...",
                          "sInfoThousands": ",",
                          "oPaginate": {
                              "sFirst": "First",
                              "sPrevious": "Previous",
                              "sNext": "Next",
                              "sLast": "Last"
                          },
                          "oAria": {
                              "sSortAscending": ": Ascending this column in ascending order",
                              "sSortDescending": ": Sort this column in descending order"
                          }
                    },
                    "createdRow":function(row,data,index){ //行回调函数
                      if(data.teacher_id % 2 == 0){
                        $('td',row).eq(0).css({"color":"#00A8FF","font-weight":"bold"});
                      }
                    }
              });//table end

              return table;
            } //inintTable END

          </script>

	</div>
</div>
<?php
}?>



<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->

<!------------------------------------------------------------------------------------------------------->

<!------------------------------------------------------------------------------------------------------->

<!------------------------------------------------------------------------------------------------------->

<!------------------------------------------------------------------------------------------------------->

<?php
if ( empty($classI) && empty($classII))
{

?>





<div class="row">


</div>
<div class="row">
	<div class=" col-md-offset-1">
		<div style="margin-left:20px;">
	<h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Data Browse</h2>
	</div>

		</div>
	<div class="col-lg-3 col-md-offset-1">

		<div class="panel-group" role="tablist">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title"><b>Class</b></h4>
				</div>
				<div class="list-group" id="left_classI_1">
				<?php
					$left='SELECT classI,count(classI) AS count,sum(paixun) AS zongpaixu
										from databrowse_left
										GROUP BY classI
										ORDER BY zongpaixu asc
										limit 5;'

										;

					$left_result1=mysql_query($left,$conn);


					while($row =mysql_fetch_assoc($left_result1))
				{
						$classI=$row["classI"];
						$count=$row["count"];

				echo '<a class="list-group-item" href="data-browse.php?&classI='.$classI.'"><span class="badge">'.$count.'</span>'.$classI.'</a>';
				}
				?>

				<div class="collapse" id="left_classI_1_collapse">
				<?php
					$left12='SELECT classI,count(classI) AS count,sum(paixun) AS zongpaixu
										from databrowse_left
										GROUP BY classI
										ORDER BY zongpaixu asc
										limit 5,500;'
										;
										
					$left_result12=mysql_query($left12,$conn);

					while($row = mysql_fetch_assoc($left_result12))
				{
						$classI=$row["classI"];
						$count=$row["count"];

				echo '<a class="list-group-item" href="data-browse.php?&classI='.$classI.'"><span class="badge">'.$count.'</span>'.$classI.'</a>';
				}
				?>
				</div>
						<a id="left_classI_1_collapse_btn" class="text-center list-group-item" role="button" data-toggle="collapse" href="#left_classI_1_collapse" aria-expanded="false">
							<span class="glyphicon glyphicon-chevron-down"></span>
						</a>
				</div>
			</div>
		</div>






		<div class="panel-group" role="tablist" style="overflow-y:auto;height: 350px;">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title"><b>Sub class</b></h4>
				</div>
				<div class="list-group" id="left_classII_1">
				<?php
					$left2='SELECT classII,count(classII) AS count
										from dbr_total
										GROUP BY classII
										ORDER BY count desc
										limit 5;'

										;

					$left_result21=mysql_query($left2,$conn);
					while($row = mysql_fetch_assoc($left_result21))
				{
						$classII=$row["classII"];
						$count=	$row["count"];

				echo '<a class="list-group-item" href="data-browse.php?&classII='.$classII.'"><span class="badge">'.$count.'</span>'.$classII.'</a>';
				}
				?>

				<div class="collapse" id="left_classII_1_collapse">
				<?php
					$left22='          
										SELECT classII,count(classII) AS count
										from dbr_total
										GROUP BY classII
										ORDER BY count desc
										limit 5,500;'
										;
					$left_result22=mysql_query($left22,$conn);

					while($row = mysql_fetch_assoc($left_result22))
				{
						$classII=$row["classII"];
						$count=	$row["count"];

				echo '<a class="list-group-item" href="data-browse.php?&classII='.$classII.'"><span class="badge">'.$count.'</span>'.$classII.'</a>';
				}
				?>
				</div>
						<a id="left_classII_1_collapse_btn" class="text-center list-group-item" role="button" data-toggle="collapse" href="#left_classII_1_collapse" aria-expanded="false">
							<span class="glyphicon glyphicon-chevron-down"></span>
						</a>
				</div>
			</div>
		</div>




	</div>

	<div class="col-lg-7" style="width:60%">
<table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
               <thead>
                  <tr>
                      <th>Set<a style="" href="help.php?" class="glyphicon glyphicon-info-sign"></a></th>
                      <th>Class<a style="" href="help.php?" class="glyphicon glyphicon-info-sign"></a></th>
                      <th >Sub Class<a style="" href="help.php?" class="glyphicon glyphicon-info-sign"></a></th>
                      <th>Count<i class="glyphicon glyphicon-question-sign" title="Number of lncRNAs of this set"></i></th>
                  </tr>
              </thead>
            </table>

             <script>
            $(function(){
                // oTable 全局变量
                oTable = initTable();

              });//jquery end
            function initTable () {
              var table = $("#example").DataTable({
				"dom": '<"top row"<"col-lg-2 col-md-2 pull-left"i><"col-lg-5 col-md-5 pull-right"f>>rt<"bottom row"<"col-lg-2 col-lg-2 pull-left"l><"col-lg-9 col-lg-9 pull-right"p>><"clear">',
                "paging":true,
                "pagingType":"full_numbers",
                "lengthMenu":[15,25,50,75],
                "processing": true,
                "searching": true, //是否开启搜索
                "serverSide": true,//开启服务器获取数据
                "order": [[ 1, "asc" ]], //默认排序
                "ajax":{ // 获取数据
                "url":"data-browse_server.php",
                "dataType":"json", //返回来的数据形式
                "data":{"classI":"p","classII":"p"}
                },
                "bPaginage":true,
                    "columns":[ //定义列数据来源
                      {'data':"Set"},
                      {'data':"classI"},
                      {'data':"classII"},
                      {'data':"length"},
                    ],

              "columnDefs": [ //自定义列
                          /*
                          {
                            "targets":[1],
                            "orderable":false  //禁止排序
                          },*/
                          {
                            "targets":[2],
                            "searchable":false //禁止搜索
                          },
                          {
                           "targets": 0, //改写哪一列
                           "data": "classII",
                           "render": function(data, type, row) {
							if(row.classI=="EQTL" || row.classI=="Drug")
                           	{
                           	var hreclass=row.classII.split("_")[0];
                           	return "<a href='databrowse/set_"+row.classI+"_"+hreclass+".php?classI="+row.classI+"&set="+row.Set+"&classII="+row.classII+"&length="+row.length+"' target='_blank'>"+row.Set+"</a>";
                           	}
							else
							{
							return "<a href='databrowse/set_"+row.classI+".php?classI="+row.classI+"&set="+row.Set+"&classII="+row.classII+"&length="+row.length+"' target='_blank'>"+row.Set+"</a>";
							}

						   }
                          },
                          /*{
                            "targets": 9, //改写哪一列<i class="fa fa-plus-circle" style="font-size:15px;"></i>
                            "render": function(data, type, row) {
                              return "<div><span class='badge active'>"+row.Promoter_TF_all+"</span><div class='pull-right'>"+row.promoter_TF_name+"<i id='"+row.gene_name+"|Promoter_TF_all|"+row.tf_name+"' onclick='all_sel(this)' class='fa fa-plus-circle' aria-hidden='true'></i></div></div>";
                            }
                          },*/
                        ],
                  "language":{ // 定义语言
                      "sProcessing":"Loading...",
                      "sLengthMenu":"Show_MENU_ entries",
                      "sZeroRecords":"No matching results",
                      "sInfo": "From _START_ to _END_ results，Total _TOTAL_ items",
                          "sInfoEmpty": "Showing results 0 to 0，Total_ 0 _items",
                          "sInfoFiltered": "",
                          "sInfoPostFix": "",
                          //"sSearch": "Table Search:",
                          "sUrl": "",
                          "sEmptyTable": "The data in the table is empty",
                          "sLoadingRecords": "Loading...",
                          "sInfoThousands": ",",
                          "oPaginate": {
                              "sFirst": "First",
                              "sPrevious": "Previous",
                              "sNext": "Next",
                              "sLast": "Last"
                          },
                          "oAria": {
                              "sSortAscending": ": Ascending this column in ascending order",
                              "sSortDescending": ": Sort this column in descending order"
                          }
                    },
                    "createdRow":function(row,data,index){ //行回调函数
                      if(data.teacher_id % 2 == 0){
                        $('td',row).eq(0).css({"color":"#00A8FF","font-weight":"bold"});
                      }
                    }
              });//table end

              return table;
            } //inintTable END

          </script>
	</div>
</div>
<?php

}?>


	<script type="text/javascript">

	function shuohide(op)
	{
	//var a=$(op).children("span").;
	if(op.className=='glyphicon glyphicon-plus-sign')
	{
		op.className='glyphicon glyphicon-minus-sign';
	}else
	{
		op.className='glyphicon glyphicon-plus-sign';
	}
	//op.className=op.className=='icon ion-plus-circled'?'icon ion-minus-circled':'icon ion-plus-circled';
	}

$(function () {
	$("[data-toggle='popover']").popover();
});
	</script>
        <script>
            $(function () { $("[class=\"glyphicon glyphicon-info-sign\"]").tooltip(); });
        </script>
<hr/>

        <footer id="footer">
            <div class="container">
                <div class="copyright">
                    <p style="color: white;">Copyright © 2019 School of Medical Informatics,Daqing Campus</p>
                    <p style="color: white;margin-top: -30px"><img src="/LncSEA/public/img/beian.png" style="width: 18px;margin-bottom: 2px;"> <a href="http://www.beian.miit.gov.cn" style="color:#09c5ff">黑ICP备16009434号-1</a>  Harbin Medical University Chunquan Li Lab</p>
                </div>
            </div>
        </footer><!-- #footer -->
</body>
</html>
<script src="js/public.js"></script>