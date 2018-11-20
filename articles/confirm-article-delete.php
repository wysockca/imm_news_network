<?php

$id = $_POST["id"];

//perform database delete using form values;
$dsn = "mysql:host=localhost;dbname=wysockca_imm_news_network;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("DELETE FROM `article` WHERE `id` = $id");

$stmt->execute();

header("Location: ../dashboard.php");

?>