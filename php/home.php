<?php
session_start();

require('config.php');
require('lib.php');

$message = check_login();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<header>
	<h1>COMP233 Multiple Choice Tests</h1>
</header>
<nav>
	<ul>
		<li><a href="home.php">Home</a></li>
        <br>
        <?php echo get_tests(); ?>
	</ul>
</nav>
<div class="content">
	<?php if(empty($_SESSION["user_id"])) { ?>
		<p>You can view tests but not take them until you <a href="/assignment4/php/login.php">log in</a></p>
	<?php } else { ?>
		<p>You are logged in</p>
	<?php } ?>
</div>
</body>
</html>
