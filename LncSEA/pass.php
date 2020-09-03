<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">

	
</head>	



<?php 




$inp=empty($_POST['input'])?null:trim($_POST['input']);



$fp = fopen('input.txt','w');  
//给文件写入内容

fwrite($fp,$inp);
//关闭文件
fclose($fp);


$array =$_POST['mychk']; 

$str = implode("\n", $array);
file_put_contents("database.txt", $str);




$min=empty($_POST['min'])?null:trim($_POST['min']);
$max=empty($_POST['max'])?null:trim($_POST['max']);
$pvalue=empty($_POST['pvalue'])?null:trim($_POST['pvalue']);
$FDR=empty($_POST['FDR'])?null:trim($_POST['FDR']);
$Bonferroni=empty($_POST['Bonferroni'])?null:trim($_POST['Bonferroni']);
//echo $pvalue;
if($min==null)
{
	$min="null";
}
if($max==null)
{
$max="null";	
}
if($pvalue==null)
{
$pvalue=0.05;	
}
if($FDR==null)
{
$FDR=0.05;	
}
if($Bonferroni==null)
{
$Bonferroni=0.05;	
}
exec("Rscript Ana_enrichiments.R $pvalue $FDR $Bonferroni $min $max",$rows,$i);
if($i){
   // echo $i;
}

//print_r($array);
?>






<div align="center">
</div>

<br>





<script type="text/javascript">
/*setTimeout('window.location.href="post.php"',1000);*/



</script>












</html>
