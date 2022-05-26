<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
echo "This is a warning error";
?>
<?php
// header('Content-Type: application/json; charset=utf-8');
include "conexao.php";

$sql = "SELECT nome FROM videos";

$result = mysqli_query($con, $sql);
$data = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($data);
?>