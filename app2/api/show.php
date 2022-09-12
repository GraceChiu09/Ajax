<?php
//處理查詢資料的請求
// 建立資料庫的連線
// PDO Json
//處理查詢資料的請求
$id=$_GET['id'];
$sql="select * from students where id='$id'";
$dsn="mysql:host=localhost;charset=utf8;dbname=students";
$pdo=new PDO($dsn,'root','');

$student=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

echo json_encode($student);


?>