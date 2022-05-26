<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
echo "This is a warning error";
?>
<?php
include "conexao.php";

$sql = '"SELECT * FROM `videos`"';

$result = $con->query($sql);

$data = $result;
header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);
?>