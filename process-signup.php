<?php

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$dsn = "mysql:host=localhost;dbname=wysockca_imm_news_network;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES (NULL, '$username', '$email', '$password'); ");

$stmt->execute();

header("Location: success.html");

?>