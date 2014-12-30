<?php
include_once 'db-config.php';

$result = $conn->query("SELECT * FROM biomed.exame");

$outp = "[";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "[") {$outp .= ",";}
    $outp .= '{"id":"'  	. $rs["id"] . '",';
    $outp .= '"nome":"'   	. $rs["nome"]        . '",';
    $outp .= '"url":"'   	. $rs["url"]        . '",';
    $outp .= '"descricao":"'. $rs["descricao"]     . '"}'; 
}
$outp .="]";

$conn->close();

echo($outp);