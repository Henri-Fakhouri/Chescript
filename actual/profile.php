<!DOCTYPE html>

<html>

<head> <title>Home</title>

<?php include_once "../views/btInfo.php"; 
include_once "../database/dbInfo.php";
?>


<style>
h3 {
font-family: "Comic Sans MS", cursive, sans-serif;
text-align:center;
}
</style>
</head>



<body>
<?php include_once "../views/header_profile.php"; 
	
	session_start();
	if ($_SESSION['online'] == false) {
	header('Location: login.php');
	} else 		{
	$fullname = $_SESSION['information'][0];
	$username = $_SESSION['information'][1];
	$email = $_SESSION['information'][2];
	$password = $_SESSION['information'][3];



		$sql = "SELECT win FROM users WHERE username ='$username'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) 

	{
    	$row = mysqli_fetch_assoc($result);
    	$win = $row['win'];
    } 

    $sql2 = "SELECT loss FROM users WHERE username ='$username'";
	$result = mysqli_query($conn, $sql2);

	if (mysqli_num_rows($result) > 0) 

	{
    	$row = mysqli_fetch_assoc($result);
    	$loss = $row['loss'];
    } 





				}
?>

	<div class="container">
	<div class = "jumbotron">
			<div class="page-header">
  				<h1 style = "text-align:center;">Profile:</h1>
			</div>
			

			<h3> Name: <?php echo $fullname ?> </h3>
			<br>

			<h3 style = "text-align:center;"> Username: <?php echo $username ?> </h3>
			<br>

			<h3 style = "text-align:center;"> Email: <?php echo $email ?> </h3>

			<br>

			<h3 style = "text-align:center;"> Win: <?php echo $win ?> </h3>

			<br>

			<h3 style = "text-align:center;"> Loss: <?php echo $loss ?> </h3>
			

			
	</div>
</div>
				
				




<?php include_once "../views/footer.php" ?>
</body>

</html>