<?php

$author = $_POST['author'];
$headline = $_POST['headline'];
$content = $_POST['content'];
$preview = $_POST['preview'];
$link = $_POST['link'];
$category = $_POST['category'];
$feature = $_POST['feature'];


$uploaddir = '../images/';
$uploadfile = $uploaddir . basename($_FILES['image']['name']);

$filename = $_FILES['image']['name'];

if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
	//echo "File is valid, and was successfully uploaded.";
} else{
	echo "Possible file upload attack!";
}

$dsn = "mysql:host=localhost;dbname=wysockca_imm_news_network;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("INSERT INTO `article` (`id`, `author`, `headline`, `image`, `content`, `preview`, `link`, `category`, `feature`) VALUES (NULL, '$author', '$headline', '$filename', '$content', '$preview', '$link', '$category', '$feature'); ");
$stmt->execute();

header("Location: ../dashboard.php");

?>