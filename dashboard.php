<?php 
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

if($_SESSION['logged-in'] == false || $_SESSION['role'] == NULL){
	echo("You are not allowed to view this page");
	?><p>If you are an author or admin, <a href="login.php">login</a> here. Otherwise, please return to the <a href="front.php">homepage</a>.</p><?php
} else{

//perform database insert using form values;
$dsn = "mysql:host=localhost;dbname=wysockca_imm_news_network;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("SELECT * FROM `article`");

$stmt->execute();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>IMM News Network - Dashboard</title>
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
		<main>
			<h1>Dashboard</h1>
				<nav id="main-nav">
				<a href="articles/article-submit.php">Create New Article</a>
				<a href="welcome-edit.php">Edit Welcome Message</a>
				<a href="about-edit.php">Edit About Page</a>
				<a href="messages.php">View Messages</a>
			</nav>

			<section id="article-list">
				<h2>Articles</h2>

				<?php
				//show records (process results)
				while($row = $stmt->fetch()) {     
					//echo($row["email"]); //or $row[0];
					?><div>
						<h3><?php echo($row["headline"]);?></h3>
						<p>By: <?php echo($row["author"]); ?></p>
						<span><a href="articles/article.php?id=<?php echo($row["id"]);?>">View</a></span>
						<span><a href="articles/article-edit.php?id=<?php echo($row["id"]);?>">Edit</a></span>
						<span><a href="articles/article-delete.php?id=<?php echo($row["id"]);?>">Delete</a></span>
						
						<br>
						<br>
					</div>
				<?php }
				?>
			</section>
		</main>
	</body>
</html>

<? } ?>