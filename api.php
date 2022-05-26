Teste

<?php
// include "conexao.php";

echo "teste";

$sql = "'SELECT * FROM videos'";

$result = $conn->query($sql);

var_dump($result);

$data = $result;
header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);
?>