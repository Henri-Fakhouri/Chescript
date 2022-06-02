<!DOCTYPE html>

<html>

<head> <title>Home</title>
<?php include_once "../views/header_last.php"; 
	include_once "../views/btInfo.php";
?>


</head>

<body>

<?php
session_start();
if ($_SESSION['online'] == false) {
	header('Location: login.php');
} else {
	$fullname = $_SESSION['information'][0];
	$username = $_SESSION['information'][1];
	$email = $_SESSION['information'][2];
	$password = $_SESSION['information'][3];

}



?>
	<div class = "jumbotron">
	<h1 style = "text-align:center;">Welcome <?php echo $fullname ?> </h1>
		<h2 style = "text-align:center;"> You are now Logged in.</h2>
	</div>
</body>

</html>