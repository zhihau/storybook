<?php
function pdo($db){
    $dsn="mysql:host=localhost;charset=utf8;dbname=s1100423";
    $pdo=new PDO($dsn,'s1100423','s1100423');
    // $dsn="mysql:host=localhost;charset=utf8;dbname=$db";
    // $pdo=new PDO($dsn,'root','')
    return $pdo;
}
function findAll(){
    $pdo=pdo('db_story');
    $sql="SELECT * FROM `books`";
    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
?>