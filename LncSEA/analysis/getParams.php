<?php
$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
$password = "";
for ($i = 0; $i < 12; $i++) {
// 这里提供两种字符获取方式 
// 第一种是使用 substr 截取$chars中的任意一位字符； 
// 第二种是取字符数组 $chars 的任意元素 
// $password .= substr($chars, mt_rand(0, strlen($chars) – 1), 1); 
    $password .= $chars[mt_rand(0, strlen($chars) - 1)];
}
$dkname = $password . "ake";
/*echo $dkname;*/

$dir = "/var/www/html/LncSEA/analysis/upfile";
$namearr = [];
$unique = [];
// 打开目录，然后读取其内容
$nar = 0;
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($filel = readdir($dh)) !== false) {

            if ($filel != ".." && $filel != ".") {

                $namearr[$nar] = $filel;
                $punique = substr($filel, 0, 12);
                $unique[$nar] = $punique;
                $nar = $nar + 1;
            }

        }
        closedir($dh);
    }
}

$nunique = array_unique($unique);
$unique_key = array_keys($nunique);
$unlik = $unique_key[0];
for ($nkey = 1; $nkey <= count($unique_key); $nkey++) {
    $timefile = "/var/www/html/LncSEA/analysis/upfile/" . $namearr[$unlik];
    $timefile2 = "/var/www/html/LncSEA/analysis/upfile/" . $namearr[$unique_key[$nkey]];
    if (filemtime($timefile) < filemtime($timefile2)) {
        $unlik = $unlik;
    } else {
        $unlik = $unique_key[$nkey];
    }

}


if (count($nunique) > 12) {

    $arr = array();
    foreach ($namearr as $key => $values) {
        if (strstr($values, $unique[$unlik]) !== false) {
            $unlinkname = '/var/www/html/LncSEA/analysis/upfile/' . $values;
            /*array_push($arr, $unlinkname);*/
            unlink($unlinkname);
        }
    }

}
/*mkdir("accum",0777); 
chmod("accum", 0777);*/


/*
$dir = "/var/www/html/LncSEA/analysis/upfile/";
$namearr=[];
// 打开目录，然后读取其内容
$nar=0;
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){

    	if($file!=".."&&$file!=".")
    	{
      	
      	$namearr[$nar]=$file;
      	$nar=$nar+1;
  		}

    }
    closedir($dh);
  }
}
 




for($sch=0;$sch<count($namearr);$sch++ )
{
unlink('/var/www/html/LncSEA/analysis/upfile/'.$namearr[$sch].'');
}*/
?>


<?php
//header("Location:post.php");


$lasp = empty($_POST['me']) ? null : trim($_POST['me']);

/*echo $lasp;*/
if ($lasp == "a1") {
    $inp = empty($_POST['input']) ? null : trim($_POST['input']);
    $inp = preg_replace('/[\s]+/', "\n", $inp);
    if ($inp == null) {
        $inp = "null";
    }
    $inpnames = "/var/www/html/LncSEA/analysis/accum/" . $dkname . "input.txt";

    $fp = fopen($inpnames, 'w');
//给文件写入内容

    fwrite($fp, $inp);
//关闭文件
    fclose($fp);

    $str = preg_replace('/[\s]+/', "\n", $_POST['mychk']);
    $dbnames = "/var/www/html/LncSEA/analysis/accum/" . $dkname . "database.txt";
    file_put_contents($dbnames, $str);
} else {
    $inp = empty($_POST['input']) ? null : trim($_POST['input']);
    $inp = preg_replace('/[\s]+/', "\n", $inp);
    if ($inp == null) {
        $inp = "null";
    }
    $inpnames = "/var/www/html/LncSEA/analysis/accum/" . $dkname . "input.txt";

    $fp = fopen($inpnames, 'w');
//给文件写入内容

    fwrite($fp, $inp);
//关闭文件
    fclose($fp);
    $str = preg_replace('/[\s]+/', "\n", $_POST['mychk']);
    $dbnames = "/var/www/html/LncSEA/analysis/accum/" . $dkname . "database.txt";
    file_put_contents($dbnames, $str);
    $filename = $_FILES['file']['name'];
    $type = $_FILES['file']['type'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $size = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];
    move_uploaded_file($tmp_name, "/var/www/html/LncSEA/analysis/upfile/" . $dkname . $filename);

}


$min = empty($_POST['min']) ? null : trim($_POST['min']);
$max = empty($_POST['max']) ? null : trim($_POST['max']);
$pvalue = empty($_POST['pvalue']) ? null : trim($_POST['pvalue']);
$FDR = empty($_POST['FDR']) ? null : trim($_POST['FDR']);
$Bonferroni = empty($_POST['Bonferroni']) ? null : trim($_POST['Bonferroni']);
//echo $pvalue;
if ($min == null) {
    $min = "null";
}
if ($max == null) {
    $max = "null";
}
if ($pvalue == null) {
    $pvalue = 0.05;
}
if ($FDR == null) {
    $FDR = 0.05;
}
if ($Bonferroni == null) {
    $Bonferroni = 0.05;
}

$userId = $_POST["userId"];

exec("/usr/lib64/R/bin/Rscript /var/www/html/LncSEA/analysis/Ana_enrichiments.R $pvalue $FDR $Bonferroni $min $max $dkname $userId", $rows, $i);
//if ($i) {
//    echo $i;
//}


/*exec("ls /var/www/html/LncSEA/analysis",$array);

print_r($array);*/
?>

<?php echo trim($dkname) ?>

