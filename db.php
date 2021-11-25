<?php
function pdo($db){
    $dsn="mysql:host=localhost;charset=utf8;dbname=$db";
    return new PDO($dsn,'root','');
}
function findAll(){
    $pdo=pdo('db_story');
    $sql="SELECT * FROM `books`";
    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
?>