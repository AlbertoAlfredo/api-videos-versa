# php 7.*
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
echo "This is a warning error";
?>
<?php
include "conexao.php";

echo "teste";

$sql = "'SELECT * FROM `videos`'";

$result = $conn->query($sql);

echo $result;

$data = $result;
header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);
?>