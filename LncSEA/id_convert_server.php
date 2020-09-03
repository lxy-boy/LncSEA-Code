<?php
include 'public/conn.php';
$params = empty($_REQUEST['params']) ? null : trim($_REQUEST['params']);
$params_arr = [];
$rs = mysql_query("select symbol,group_concat(gene_id) as gene_id,group_concat(alias_symbol) as alias_symbol,group_concat(ensembl_id) as ensembl_id,group_concat(accession) as accession
                                   FROM idConvert
                                   where alias_symbol in ('" . join("','", preg_split("/[\s,;]+/", $params)) . "')
                                   or symbol in ('" . join("','", preg_split("/[\s,;]+/", $params)) . "')
                                   or ensembl_id in ('" . join("','", preg_split("/[\s,;]+/", $params)) . "')
                                   or gene_id in ('" . join("','", preg_split("/[\s,;]+/", $params)) . "')
                                   or accession in ('" . join("','", preg_split("/[\s,;]+/", $params)) . "') group by symbol", $conn);
$uni = function ($arr){
    return join(",",array_unique(preg_split("/[,]/",$arr)));
};
while ($row = mysql_fetch_assoc($rs)) {
    $params_arr[] = array_map($uni, array_values($row));
}
echo json_encode(Array("data"=>$params_arr));