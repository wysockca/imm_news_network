<?php
session_start();

$id = $_GET['id'];

$dsn = "mysql:host=localhost;dbname=wysockca_imm_news_network;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT * FROM `article` WHERE `id` = '$id'");

$stmt->execute();

$row = $stmt->fetch();

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

		<link rel="icon" type="../image/png" href="images/favicon-32x32.png" sizes="32x32">
		<link rel="stylesheet" href="../css/main.css">
		<link rel="stylesheet" media="screen and (max-width: 480px)" href="../css/small.css" />
	</head>
	<body>
		<header>
			<a href="../front.php"><img src="../images/logo_white.png" width="20%" /></a>
			<nav class="desktop">
				<ul>
					<li><a href="../front.php">Home</a></li>
					<li><a href="../about.php">About</a></li>
					<li><a href="../contact.php">Contact</a></li>
					<?php if($_SESSION['logged-in'] == false){ ?>
					<li><a href="../login.php">Login</a></li>
					<li><a href="../signup.php">Sign Up</a></li>
					<?php } ?>
					<?php if($_SESSION['logged-in'] == true && $_SESSION['role'] == 'admin' || $_SESSION['role'] == 'author'){ ?>
					<li><a href="../dashboard.php">Dashboard</a></li>
					<?php } ?>
					<?php if($_SESSION['logged-in'] == true){ ?>
					<li><a href="../logout.php">Log out</a></li>
					<?php } ?>
				</ul>
			</nav>
			<nav class="mobile">
				<a href="#"><img src="../images/menu.png" /></a>
			</nav>
		</header>
		<div class="container">
			<main>
				<article>
					<a href=""><img src="../images/like_icon.png" width="25px"/></a>
					<h1><?php echo($row["headline"]); ?></h1>
					<p>
						<span class="author">By <?php echo($row["author"]); ?></span>
					</p>
					<img src="../images/<?php echo($row["image"]); ?>" width="50%" />
					<p><?php echo($row["content"]); ?></p>
					<p><a href="<?php echo($row["link"]); ?>">View article source</a></p>
					<p><a href="../front.php">Go back</a></p>
				</article>
			</main>
			<aside>
				<h3>Accessibility</h3>
					<div id="hContrastOn">
						<a href="#" id="onBtn">Turn on high contrast mode</a>
					</div>

					<h3>Featured Video</h3>
					<iframe width="100%" src="https://www.youtube.com/embed/rSFNpJJeo4c" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

					<h3>Visitors</h3>
					<table id="visitors" border="1">
						<tr>
							<td><strong>Month</strong></td>
							<td><strong>Visitors</strong></td>
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
		<script src="../js/script.js"></script>
	</body>
</html>