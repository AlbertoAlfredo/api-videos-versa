Teste

<?php
// include "conexao.php";

echo "teste";

$sql = "'SELECT * FROM videos'";

$result = $conn->query($sql);

echo $result;

$data = $result;
header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);
?>