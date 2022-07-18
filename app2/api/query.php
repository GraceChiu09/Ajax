

<?php
//處理查詢資料的請求
// 建立資料庫的連線
// PDO Json
//處理查詢資料的請求
$classroom=$_GET['classroom'];
$dsn="mysql:host=localhost;charset=utf8;dbname=students";
$pdo=new PDO($dsn,'root','');

$sql="select * from students where classroom='{$classroom}'";
// $sql="insert into students (`classroom`, ``)";
$rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($rows);

?>