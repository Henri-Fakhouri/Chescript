<!DOCTYPE html>

<html>

<head> <title>Home</title>
<?php include_once "../views/header_last.php"; 
	include_once "../views/btInfo.php";
	include_once "../database/dbInfo.php";
?>


</head>

<body>

<?php



session_start();






if ($_SESSION['online'] == false) {
	header('Location: login.php');
} else {
	$_SESSION['online'] = true;
	
		$user = $_SESSION["username"];
	
	$sql = "SELECT fullname, username, email , password FROM users WHERE username ='$user' or email = '$user'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    	$_SESSION['information'] [0] = $fullname = $row['fullname'];
    	$_SESSION['information'][1] = $username = $row['username'];
    	$_SESSION['information'][2] = $email = $row['email'];
    	$_SESSION['information'][3] = $password = $row['password'];
    } else echo ("0 results");
	
	mysqli_close($conn);
}



?>
	<div class = "jumbotron">
	<h1 style = "text-align:center;">Welcome <?php echo $fullname ?> </h1>
		<h2 style = "text-align:center;"> You are now Logged in.</h2>
	</div>
</body>

</html>