<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

if($_SESSION['role'] == author){
	echo("You are not permitted to access this page.");
	?><p>Please return to the <a href="dashboard.php">dashboard</a>.</p><?php
} else{

$id = $_GET['id'];

$dsn = "mysql:host=localhost;dbname=wysockca_imm_news_network;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT * FROM `website` WHERE id = 'about'");

$stmt->execute();

$row = $stmt->fetch();

?>

<!DOCTYPE html>
<html>
	<head>
		<title>IMM News Network - Edit Welcome</title>
		<meta charset="utf-8" />

		<meta name="description" content="News and helpful articles for those in, or have an interest in, the web design and development industry.">

		<meta name="keywords" content="web, web design, web development, ux, ui, ux design, ui design, tech, internet, mobile, apps, applications">

		<link rel="author" content="Carly Wysocki" href="http://carlywysocki.com/" />
		<link rel="canonical" href="http://wysockca.dev.fast.sheridanc.on.ca/IMM-web-dev/imm_news_network/front.php" />

		<link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32">
		<link rel="stylesheet" href="css/dashboard.css">
	</head>
	<body>
		<nav id="top-nav">
			<a href="front.php">Back to IMM News Network</a>
			<a href="logout.php">Logout</a>
		</nav>
		<h1>Edit Welcome Message</h1>
		<form action="confirm-about-update.php" method="POST">
			<input type="hidden" value="<?php echo($row["id"]); ?>" name="id" />
			<p>Header:<input type="text" name="header" value="<?php echo($row["header"]); ?>" /></p>
			<p>Content:<textarea name="content"><?php echo($row["content"]); ?></textarea></p>
			<input type="submit" />
		</form>
		<a href="dashboard.php">Cancel</a>
	</body>
</html>

<? } ?>