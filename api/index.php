<?php include "api.php"; ?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<?php

$video = filter_input(INPUT_GET, 'video');;
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$nome = filter_input(INPUT_GET, 'nome');
$url = filter_input(INPUT_GET, 'url', FILTER_VALIDATE_URL);
switch ($video) {
    case "post":
        addVideos($nome, $url);
        break;
    case "put":
        editVideo($id, $nome, $url);
        break;
    case "delete":
        deleteVideo($id);
        break;
    default:
        getVideos();
        break;
}

?>