<?php
session_start();

require('config.php');
require('lib.php');

$message = check_login();

$id = $conn->real_escape_string($_GET['id']);

?>
<html>
<head>
    <title>Results</title>
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
	<?php echo get_results($id);?>
</div>
</body>
</html>