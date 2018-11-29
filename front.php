<?php
session_start();

$id = $_GET['id'];

$dsn = "mysql:host=localhost;dbname=wysockca_imm_news_network;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT * FROM `website` WHERE `id` = 'home'");
$stmt->execute();
$row = $stmt->fetch();

$stmt2 = $pdo->prepare("SELECT * FROM `article` WHERE `category` = 'tech'");
$stmt2->execute();

$stmt3 = $pdo->prepare("SELECT * FROM `article` WHERE `category` = 'industry'");
$stmt3->execute();

$stmt4 = $pdo->prepare("SELECT * FROM `article` WHERE `category` = 'design'");
$stmt4->execute();

$stmt5 = $pdo->prepare("SELECT * FROM `article` WHERE `feature` = 'yes'");
$stmt5->execute();

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>IMM News Network</title>
		<meta charset="UTF-8" />

		<meta name="description" content="News and helpful articles for those in, or have an interest in, the web design and development industry.">

		<meta name="keywords" content="web, web design, web development, ux, ui, ux design, ui design, tech, internet, mobile, apps, applications">

		<link rel="author" content="Carly Wysocki" href="http://carlywysocki.com/" />
		<link rel="canonical" href="http://wysockca.dev.fast.sheridanc.on.ca/IMM-web-dev/imm_news_network/front.php" />

		<link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" media="screen and (max-width: 480px)" href="css/small.css" />
	</head>
	<body>
		<header>
			<div id="logo-container">
				<a href="front.php"><img id="logo" src="images/logo_white.png" /></a>
			</div>
			<nav>
				<a href="front.php">Home</a>
				<a href="about.php">About</a>
				<a href="contact.php">Contact</a>
					<?php if($_SESSION['logged-in'] == false){ ?>
				<a href="login.php">Login</a>
				<a href="signup.php">Sign Up</a>
					<?php } ?>
					<?php if($_SESSION['logged-in'] == true && $_SESSION['role'] == 'admin' || $_SESSION['role'] == 'author'){ ?>
				<a href="dashboard.php">Dashboard</a>
					<?php } ?>
					<?php if($_SESSION['logged-in'] == true){ ?>
				<a href="logout.php">Log out</a>
					<?php } ?>
			</nav>
		</header>
		<div class="container">
			<div class="hero">
				<h1><?php echo($row["header"]); ?></h1>
				<p><?php echo($row["content"]); ?></p>
			</div>
			<main>
				<h1 id="front">Latest</h1>
				<article id="featured">
					<?php
					while($row = $stmt5->fetch()) {
					?>
					<h2><a href="articles/article.php?id=<?php echo($row["id"]);?>"><?php echo($row["headline"]);?></a></h2>
						<p><span class="author">By <?php echo($row["author"]); ?></span></p>
						<img src="images/<?php echo($row["image"]); ?>" />
						<p><?php echo($row["preview"]); ?></p>
						<a href="articles/article.php?id=<?php echo($row["id"]);?>">Read more...</a>
						<? } ?>
				</article>
				<section id="categories">
					<div class="column" id="tech">
						<?php
						while($row = $stmt2->fetch()) {
						?>
						<article>
							<h3><a href="articles/article.php?id=<?php echo($row["id"]);?>"><?php echo($row["headline"]);?></a></h3>
							<p><span class="author" id="tstyle">By <?php echo($row["author"]); ?></span></p>
							<img class="thumbnail" src="images/<?php echo($row["image"]); ?>" />
							<p><?php echo($row["preview"]); ?></p>
							<a href="articles/article.php?id=<?php echo($row["id"]);?>">Read more...</a>
						</article>
						<? } ?>
					</div>
					<div class="column" id="industry">
						<?php
						while($row = $stmt3->fetch()) {
						?>
						<article>
							<h3><a href="articles/article.php?id=<?php echo($row["id"]);?>"><?php echo($row["headline"]);?></a></h3>
							<p><span class="author" id="istyle">By <?php echo($row["author"]); ?></span></p>
							<img class="thumbnail" src="images/<?php echo($row["image"]); ?>" />
							<p><?php echo($row["preview"]); ?></p>
							<a href="articles/article.php?id=<?php echo($row["id"]);?>">Read more...</a>
						</article>
						<? } ?>
					</div>
					<div class="column" id="design">
						<?php
						while($row = $stmt4->fetch()) {
						?>
						<article>
							<h3><a href="articles/article.php?id=<?php echo($row["id"]);?>"><?php echo($row["headline"]);?></a></h3>
							<p><span class="author" id="dstyle">By <?php echo($row["author"]); ?></span></p>
							<img class="thumbnail" src="images/<?php echo($row["image"]); ?>" />
							<p><?php echo($row["preview"]); ?></p>
							<a href="articles/article.php?id=<?php echo($row["id"]);?>">Read more...</a>
						</article>
						<? } ?>
					</div>
				</section>
			</main>
			<aside>
				<h3>Accessibility</h3>
					<div id="hContrastOn">
						<a href="#" id="onBtn">Turn on high contrast mode</a>
					</div>

					<h3>Featured Video</h3>
					<iframe width="100%" src="https://www.youtube.com/embed/rSFNpJJeo4c" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

					<h3>Visitors</h3>
					<table id="visitors">
						<tr>
							<th>Month</th>
							<th>Visitors</th>
						</tr>
					</table>
			</aside>
		</div>
		<footer>
			<div id="copyright">
				<p>&copy;2018 IMM News Network</p>
			</div>
			<div id="cookies">
				<p id="msg">IMM News Network uses cookies in order to give you the best user experience. By continuing to browse our website, we assume that you consent to our Cookie Policy. <a id="btn" href="#">Accept Cookies</a></p>
			</div>
		</footer>
		<script src="js/script.js"></script>
	</body>
</html>

			
					

<!-- <section id="video">
	<h1>Featured Video</h1>
	<iframe width="560" height="315" src="https://www.youtube.com/embed/rSFNpJJeo4c" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</section> -->

			