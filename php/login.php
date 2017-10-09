<?php
session_start();

require('config.php');
require('lib.php');
$message = check_login();

?>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <header>
        <h1>COMP233 Multiple Choice Tests</h1>
    </header>
<?php if(empty($_SESSION["user_id"])) { ?>
<form action="" method="post" id="login">
	<div class="error-message"><?php if(isset($message)) { echo $message; } ?></div>
		<label for="login">Username</label>
		<input name="username" type="text"><br>
		<label for="password">Password</label>
		<input name="password" type="password"><br>
		<input type="submit" name="login" value="Login" class="form-submit-button">
	</div>       
</form>
<?php 
} else { 
$result = mysqli_query($conn,"SELECT * FROM users WHERE id='" . $_SESSION["user_id"] . "'");
$row  = mysqli_fetch_array($result);
?>
<form action="" method="post" id="logout">
	<div class="member-dashboard">Welcome <?php echo ucwords($row['given_name']); ?>, You have successfully logged in!<br>
Click to <input type="submit" name="logout" value="Logout" class="logout-button"></div>
</form>
<nav>
    <ul>
        <li><a href="home.php">Home</a></li>
        <br>
        <?php echo get_tests(); ?>
    </ul>
</nav>
<?php } ?>
</body>
</html>