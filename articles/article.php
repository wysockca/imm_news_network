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

		<link rel="icon" type="image/png" href="../images/favicon-32x32.png" sizes="32x32">
	</head>
	<body>
		<header>
			<a href="front.php"><img src="../images/immnn-logo.png" width="20%" /></a>
			<nav>
				<ul>
					<li><a href="../login.php">Login</a></li>
					<li><a href="../signup.php">Sign Up</a></li>
					<li><a href="../dashboard.php">Dashboard</a></li>
					<li><a href="../logout.php">Log out</a></li>
				</ul>
			</nav>
		</header>

		<nav>
			<ul>
				<li><a href="../front.php">Home</a></li>
				<li><a href="../about.php">About</a></li>
				<li><a href="../contact.php">Contact</a></li>
			</ul>
		</nav>

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
				<p><a href="front.php">Go back</a></p>
			</article>
			<aside>
				<h3>Social Media</h3>
				<ul>
					<li><a href="https://twitter.com/SheridanIMM">Twitter</a></li>
					<li><a href="https://www.facebook.com/sheridanIMM">Facebook</a></li>
				</ul>

				<h3>Visitors</h3>
				<table border="1">
					<tr>
						<td><strong>Month</strong></td>
						<td><strong>Visitors</strong></td>
					</tr>
					<tr>
						<td>May</td>
						<td>58</td>
					</tr>
					<tr>
						<td>June</td>
						<td>80</td>
					</tr>
					<tr>
						<td>July</td>
						<td>165</td>
					</tr>
					<tr>
						<td>August</td>
						<td>247</td>
					</tr>
					<tr>
						<td>September</td>
						<td>394</td>
					</tr>
					<tr>
						<td>October</td>
						<td>536</td>
					</tr>
				</table>
			</aside>
		</main>

		<footer>
			<div>
				<p>&copy;2018 IMM News Network</p>
			</div>
			<div>
				<p>IMM News Network uses cookies in order to give you the best user experience. By continuing to browse our website, we assume that you consent to our Cookie Policy.</p>
				<a href="#">Accept Cookies</a>
			</div>
		</footer>
	</body>
</html>