<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
echo "This is a warning error";
?>
<?php
// header('Content-Type: application/json; charset=utf-8');
include "conexao.php";

$sql = '"SELECT * FROM `videos`"';

$data = $con->query($sql);

echo $data;
?>