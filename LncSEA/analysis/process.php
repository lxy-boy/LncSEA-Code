<?php
$userId = $_GET["userId"];
$process = $_GET["process"];
include '/var/www/html/LncSEA/public/conn.php';
$result = mysql_query("select * from Ana_enrichiments_process where userId='$userId'",$conn);
if(isset($process)){
    if(mysql_num_rows($result) > 0){
        mysql_query("update Ana_enrichiments_process set process='$process' where userId='$userId'",$conn);
    } else {
        mysql_query("insert into Ana_enrichiments_process (userId, process) values ('$userId', '$process')",$conn);
    }
    if($process>"99"){
        mysql_query("delete from Ana_enrichiments_process where userId='$userId'",$conn);
    }
} else {
    if(mysql_num_rows($result) > 0){
        $user_row = mysql_fetch_assoc($result);
        echo $user_row["process"];
    } else {
        echo "0";
    }
}
