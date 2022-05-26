<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
echo "This is a warning error";
?>
<?php
// header('Content-Type: application/json; charset=utf-8');
include "conexao.php";

$sql = "SELECT nome FROM videos";

$data = mysqli_query($con, $sql);

echo json_encode($data);
?>