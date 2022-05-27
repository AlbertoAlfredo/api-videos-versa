<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<?php
// header('Content-Type: application/json; charset=utf-8');
include "conexao.php";

function getVideos(){
    $sql = "SELECT id, nome, url FROM videos";
    $con = conexao();
    $result = mysqli_query($con, $sql);
    $data = $result->fetch_all(MYSQLI_ASSOC);

    print json_encode($data, JSON_UNESCAPED_UNICODE);
};

function getVideo($id){
    $sql = "SELECT id, nome, url FROM videos WHERE id = $id"; 
    $con = conexao();
    $result = mysqli_query($con, $sql);

    $data = $result->fetch_all(MYSQLI_ASSOC);
    
    print json_encode($data, JSON_UNESCAPED_UNICODE);
}

function addVideos($nome, $url){
    $sql = "INSERT INTO videos (nome, url) VALUES ($nome, $url)";
    $con = conexao();
    mysqli_query($con, $sql);

    //Mostrando o último registro do banco de dados e assim mostrando o vídeo que você adicionou
    
    $sql = "SELECT * FROM videos ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($con, $sql);
    $data = $result->fetch_all(MYSQLI_ASSOC);

    print json_encode($data, JSON_UNESCAPED_UNICODE);

};

function editVideo($id, $nome, $url){
    $sql = "UPDATE videos SET nome = $nome, url = $url WHERE id = $id";
    $con = conexao();
    mysqli_query($con, $sql);
    $sql = "SELECT id, nome, url FROM videos WHERE id = $id"; 
    $result = mysqli_query($con, $sql);
    $data = $result->fetch_all(MYSQLI_ASSOC);
    
    print json_encode($data, JSON_UNESCAPED_UNICODE);

};

function deleteVideo($id){
    $sql = "DELETE FROM Videos WHERE id = $id";
    $con = conexao();
    $result = mysqli_query($con, $sql);

    print "Video Apagado $result";
};

?>