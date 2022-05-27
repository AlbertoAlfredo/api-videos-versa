<?php include "api.php"; ?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<?php
$video = ( isset($_GET['video']) ) ? $_GET['video'] : null;
$id = ( isset($_GET['id']) ) ? $_GET['id'] : null;
$nome = ( isset($_GET['nome']) ) ? $_GET['nome'] : null;
$url = ( isset($_GET['url']) ) ? $_GET['url'] : null;
$parametros = "video: $video, id: $id, nome:  $nome, url: $url";

if("$video" == "post") {
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