<?php include "api.php"; ?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<?php

$video = filter_input(INPUT_GET, 'video');
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$nome = filter_input(INPUT_GET, 'nome');
$url = filter_input(INPUT_GET, 'url');
$parametros = "video: $video, id: $id, nome:  $nome, url: $url";

if($video == "post") {
    addVideos($nome, $url);
    print $parametros;
}
elseif($video == "put") {
    editVideo($id, $nome, $url);
    print $parametros;
}
elseif($video == "delete") {
    deleteVideo($id);
    print $parametros;
}
else {
    getVideos();
    print $parametros;
}


?>