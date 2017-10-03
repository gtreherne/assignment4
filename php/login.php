<?php
session_start();
$conn = mysqli_connect();
	
$message="";
if(!empty($_POST["login"])) {
	$result = mysqli_query($conn,"SELECT * FROM users WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
	$row  = mysqli_fetch_array($result);
	if(is_array($row)) {
	$_SESSION["user_id"] = $row['user_id'];
	} else {
	$message = "Invalid Username or Password!";
	}
}
if(!empty($_POST["logout"])) {
	$_SESSION["user_id"] = "";
	session_destroy();
}
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
    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <br>
            <li><a href="test1.php">Test #1</a></li>
            <li><a href="test2.php">Test #2</a></li>
            <li><a href="test3.php">Test #3</a></li>
        </ul>
    </nav>
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
$result = mysqlI_query($conn,"SELECT * FROM users WHERE user_id='" . $_SESSION["user_id"] . "'");
$row  = mysqli_fetch_array($result);
?>
<form action="" method="post" id="logout">
<div class="member-dashboard">Welcome <?php echo ucwords($row['display_name']); ?>, You have successfully logged in!<br>
Click to <input type="submit" name="logout" value="Logout" class="logout-button">.</div>
</form>
</div>
</div>
<?php } ?>
</body>
</html>