<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

if($_SESSION['role'] == author){
	echo("You are not allowed to view this page");
	?><p>You are not permitted to access this page. Please return to the <a href="dashboard.php">dashboard</a>.</p><?php
} else{

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
		<title>IMM News Network - Delete Article</title>
		<meta charset="utf-8" />

		<meta name="description" content="News and helpful articles for those in, or have an interest in, the web design and development industry.">

		<meta name="keywords" content="web, web design, web development, ux, ui, ux design, ui design, tech, internet, mobile, apps, applications">

		<link rel="author" content="Carly Wysocki" href="http://carlywysocki.com/" />
		<link rel="canonical" href="http://wysockca.dev.fast.sheridanc.on.ca/IMM-web-dev/imm_news_network/front.php" />

		<link rel="icon" type="image/png" href="../images/favicon-32x32.png" sizes="32x32">
	</head>
	<body>

		<h1>Are you sure you want to delete this article?</h1>

		<p><?php echo($row["headline"]); ?> by <?php echo($row["author"]); ?></p>


		<?php //interface for confirm or cancel ?>
		<form action="confirm-article-delete.php" method="POST">
			<input type="hidden" value="<?php echo($row["id"]); ?>" name="id"/>
			<input type="submit" value="Confirm"/>
		</form>
		<a href="../dashboard.php">Cancel</a>
	</body>
</html>

<? } ?>