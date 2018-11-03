<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

if($_SESSION['role'] == author){
	echo("You are not allowed to view this page");
	?><p>You are not permitted to access this page. Please return to the <a href="dashboard.php">dashboard</a>.</p><?php
} else{

//perform database insert using form values;
$dsn = "mysql:host=localhost;dbname=wysockca_imm_news_network;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("SELECT * FROM `contact`");

$stmt->execute();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Messages</title>
		<meta charset="utf-8" />

		<meta name="description" content="News and helpful articles for those in, or have an interest in, the web design and development industry.">

		<meta name="keywords" content="web, web design, web development, ux, ui, ux design, ui design, tech, internet, mobile, apps, applications">

		<link rel="author" content="Carly Wysocki" href="http://carlywysocki.com/" />
		<link rel="canonical" href="http://wysockca.dev.fast.sheridanc.on.ca/IMM-web-dev/imm_news_network/front.php" />

		<link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32">
	</head>
	<body>
		<a href="dashboard.php">Back to Dashboard</a>
		<h1>Messages</h1>

		<?php
			//show records (process results)
			while($row = $stmt->fetch()) {     
				//echo($row["email"]); //or $row[0];
				?><div>

				<p><strong>Subject: <?php echo($row["subject"]);?></strong>
				<p>Name: <?php echo($row["firstName"] . " " . $row["lastName"]);?></p>
				<p>Email: <?php echo($row["email"]);?></p>
				<p>Message: <?php echo($row["message"]);?></p>
				<p>Interests: <?php echo($row["interest"]);?></p>
				<p>Role: <?php echo($row["role"]);?></p>
				<br>
				<br>
			</div>
			<?php }
			?>
	</body>
</html>

<?php } ?>