<?php 

$id = $_POST['id'];
$header = $_POST['header'];
$content = $_POST['content'];


$dsn = "mysql:host=localhost;dbname=wysockca_imm_news_network;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("UPDATE `website` SET `header` = '$header', `content` = '$content' WHERE `website`.`id` = 'home';");

$stmt->execute();

header("Location: dashboard.php");
?>