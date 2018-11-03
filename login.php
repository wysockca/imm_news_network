<?php

$dsn = "mysql:host=localhost;dbname=wysockca_imm_news_network;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

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
	</head>
	<body>
		<header>
			<a href="front.php"><img src="images/immnn-logo.png" width="20%" /></a>
			<nav>
				<ul>
					<li><a href="login.php">Login</a></li>
					<li><a href="signup.php">Sign Up</a></li>
					<li><a href="dashboard.php">Dashboard</a></li>
				</ul>
			</nav>
		</header>

		<nav>
			<ul>
				<li><a href="front.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>

		<main>
			<h1>Login</h1>
			<form action="process-login.php" method="POST">     
				 Username:<input type="text" name="username" />
				 Password:<input type="password" name="password" />
				<input type="submit" />
			</form>

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
	</body>
</html>