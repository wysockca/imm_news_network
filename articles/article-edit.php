<?php

$id = $_GET['id'];

$dsn = "mysql:host=localhost;dbname=wysockca_imm_news_network;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT * FROM `article` WHERE id = $id");

$stmt->execute();

$row = $stmt->fetch();

?>

<!DOCTYPE html>
<html>
	<head>
		<title>IMM News Network - Edit Article</title>
		<meta charset="utf-8" />

		<meta name="description" content="News and helpful articles for those in, or have an interest in, the web design and development industry.">

		<meta name="keywords" content="web, web design, web development, ux, ui, ux design, ui design, tech, internet, mobile, apps, applications">

		<link rel="author" content="Carly Wysocki" href="http://carlywysocki.com/" />
		<link rel="canonical" href="http://wysockca.dev.fast.sheridanc.on.ca/IMM-web-dev/imm_news_network/front.php" />

		<link rel="icon" type="image/png" href="../images/favicon-32x32.png" sizes="32x32">
	</head>
	<body>
		<h1>Update Article</h1>

		<form action="confirm-article-update.php" enctype="multipart/form-data" method="POST">  
			<input type="hidden" value="<?php echo($row["id"]); ?>" name="id"/>
			<p>Headline:<input type="text" name="headline" value="<?php echo($row["headline"]); ?>"/></p>
			<p>Author:<input type="text" name="author" value="<?php echo($row["author"]); ?>"/></p>
			<p>Image: <input type="file" name="image" value="<?php echo($row["image"]); ?>"/></p>
			<p>Content:<textarea name="content"><?php echo($row["content"]); ?></textarea></p>
			<p>Article preview:<textarea name="preview"><?php echo($row["preview"]); ?></textarea></p>
			<p>Source link:<input type="text" name="link" value="<?php echo($row["link"]); ?>"/></p>
			<p>Category:</p>
				<input type="radio" name="category" value="tech">Tech
				<input type="radio" name="category" value="industry">Industry
				<input type="radio" name="category" value="design">Design
			<p><input type="checkbox" name="feature" value="yes" />Set to featured article</p>
			<input type="submit" />
		</form>
		<a href="../dashboard.php">Cancel</a>
	</body>
</html>