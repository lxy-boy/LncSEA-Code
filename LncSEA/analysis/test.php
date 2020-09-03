<?php
exec("/usr/lib64/R/bin/Rscript test.R 5 8 8 7 5",$row,$i);
//exec("/usr/lib64/R/bin/Rscript --version",$row,$i);
if($i){
   echo $i;
}
print_r($row);
?>
