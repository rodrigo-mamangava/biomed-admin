<?php
include_once 'db-config.php';

$result = $conn->query("SELECT * FROM angular_test.produtos");

$outp = "[";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "[") {$outp .= ",";}
    $outp .= '{"nome":"'  . $rs["nome"] . '",';
    $outp .= '"tipo":"'   . $rs["tipo"]        . '",';
    $outp .= '"resumo":"'   . $rs["resumo"]        . '",';
    $outp .= '"foto":"'. $rs["foto"]     . '"}'; 
}
$outp .="]";

$conn->close();

echo($outp);
