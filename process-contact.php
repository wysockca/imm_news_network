<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$interest = $_POST['interest'];
$role = $_POST['role'];

$dsn = "mysql:host=localhost;dbname=wysockca_imm_news_network;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("INSERT INTO `contact` (`id`, `firstName`, `lastName`, `email`, `subject`, `message`, `interest`, `role`) VALUES (NULL, '$firstName', '$lastName', '$email', '$subject', $message', '$interest', '$role'); ");

$stmt->execute();

header("Location: contact-thank-you.php");

?>