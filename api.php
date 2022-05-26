<?php
include "conexao.php";

$sql = "SELECT * FROM videos";

$result = $conn->query($sql);


$data = $result;
header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);