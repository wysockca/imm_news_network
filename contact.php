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
		<title>IMM News Network - Contact</title>
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
			<a href="front.php"><img id="logo" src="images/logo_white.png" /></a>
			<nav class="desktop">
				<ul>
					<li><a href="front.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="contact.php">Contact</a></li>
					<?php if($_SESSION['logged-in'] == false){ ?>
					<li><a href="login.php">Login</a></li>
					<li><a href="signup.php">Sign Up</a></li>
					<?php } ?>
					<?php if($_SESSION['logged-in'] == true && $_SESSION['role'] == 'admin' || $_SESSION['role'] == 'author'){ ?>
					<li><a href="dashboard.php">Dashboard</a></li>
					<?php } ?>
					<?php if($_SESSION['logged-in'] == true){ ?>
					<li><a href="logout.php">Log out</a></li>
					<?php } ?>
				</ul>
			</nav>
			<nav class="mobile">
				<a href="#"><img src="images/menu.png" /></a>
			</nav>
		</header>
		<div class="container">
			<main id="msgPg">
				<h1>Contact Us</h1>
				<form id="contactForm" method="POST">
					<fieldset>
						<label>First name:</label>
						<input type="text" name="firstName" id="fNameInput" value="s" required/>
						<label>Last name:</label>
						<input type="text" name="lastName" id="lNameInput" value="s" required/>
						<label>Email:</label>
						<input type="email" name="email" id="emailInput" value="s@sss.com"required/>
					</fieldset>
					<fieldset>
						<label>Subject:</label>
						<input type="text" name="subject" id="subjectInput" />
						<label>Message:</label>
						<textarea name="message" id="msgInput" ></textarea>
					</fieldset>
					<fieldset>
						<label>Interests:</label>
						<input type="checkbox" name="tech" value="1" id="techInput" />Tech
						<input type="checkbox" name="industry" value="1" id="indInput" />Industry
						<input type="checkbox" name="design" value="1" id="desInput" />Design
					</fieldset>
					<fieldset>
						<label>Your role:</label>
						<input type="radio" name="writerrole" value="writer" id="writerInput">Writer
						<input type="radio" name="contribrole" value="contributor" id="contribInput">Contributor
						<input type="radio" name="adminrole" value="administrator" id="adminInput">Administrator
					</fieldset>
					<input type="submit" value="Send" id="sendMsgBtn" />
				</form>
				<div id="msgSent" style="display:none">
					<h2>Thank You</h2>
					<p>Your message has been sent. We will get back to you shortly.</p>
				</div>
				<!-- <form action="process-contact.php" method="POST">
					<fieldset>
						First name:<input type="text" name="firstName" required/>
						Last name:<input type="text" name="lastName" required/>
						Email:<input type="email" name="email" required/>
					</fieldset>
					Subject:<input type="text" name="subject" />
					Message:<textarea name="message"></textarea>
					<fieldset>
						<legend>Interests:</legend>
						<input type="checkbox" name="tech" value="1" id="techInput" />Tech
						<input type="checkbox" name="industry" value="1" id="indInput" />Industry
						<input type="checkbox" name="design" value="1" id="desInput" />Design
					</fieldset>
					<fieldset>
						<legend>Your role:</legend>
						<input type="radio" name="role" value="writer">Writer
						<input type="radio" name="role" value="contributor">Contributor
						<input type="radio" name="role" value="administrator">Administrator
					</fieldset>
					<input type="submit" />
				</form> -->
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
		<script src="js/script.js"></script>
		<script src="js/contact.js"></script>
	</body>
</html>