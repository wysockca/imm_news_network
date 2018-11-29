<?php

session_start();

$dsn = "mysql:host=localhost;dbname=wysockca_imm_news_network;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>IMM News Network Dashboard - New Article</title>
		<meta charset="utf-8" />

		<meta name="description" content="News and helpful articles for those in, or have an interest in, the web design and development industry.">

		<meta name="keywords" content="web, web design, web development, ux, ui, ux design, ui design, tech, internet, mobile, apps, applications">

		<link rel="author" content="Carly Wysocki" href="http://carlywysocki.com/" />
		<link rel="canonical" href="http://wysockca.dev.fast.sheridanc.on.ca/IMM-web-dev/imm_news_network/front.php" />

		<link rel="icon" type="image/png" href="../images/favicon-32x32.png" sizes="32x32">
		<link rel="stylesheet" href="../css/dashboard.css">
	</head>
	<body>
		<nav id="top-nav">
			<a href="../front.php">Back to IMM News Network</a>
			<a href="../logout.php">Logout</a>
		</nav>
		<h1>Create New Article</h1>
		<form action="process-article-submit.php" enctype="multipart/form-data" method="POST">    
			 <p>Author:<input type="text" name="author" /></p>
			 <p>Headline:<input type="text" name="headline" /></p>
			 <p>Image: <input type="file" name="image" /></p>
			 <p>Content:<textarea name="content"></textarea></p>
			 <p>Article preview:<textarea name="preview"></textarea></p>
			 <p>Source link:<input type="text" name="link" /></p>
			 <p>Category:</p>
				<input type="radio" name="category" value="tech">Tech
				<input type="radio" name="category" value="industry">Industry
				<input type="radio" name="category" value="design">Design
			<p><input type="checkbox" name="feature" value="yes" />Set to featured article</p>
			<input type="submit" />
		</form>
	</body>
</html>