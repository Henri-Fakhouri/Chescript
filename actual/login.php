<!DOCTYPE html>

<html>

<head> <title>Home</title>
<?php include_once "../views/header_first.php"; 
 include_once "../views/btInfo.php"; 
include_once "../database/dbinfo.php";
 ?>



<style> body {background: url(../img/intro-bg.jpg) no-repeat center center scroll; }


				.jumbotron {background-color: rgba(0,0,0,.0001)};</style>

</head>

<body>

<?php
		session_start();
		$usernameErr = $passwordErr  = "";

		if (isset($_SESSION['online']) && $_SESSION['online'] == true) {
		echo ("Already logged in. Redirecting...");
		header( "refresh:2;url=../Main.php" );
		} else {

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	$input = array($_POST["username"], $_POST["password"]);
	

	$username = $input[0];
	$password = $input[1];

			$_SESSION['information'][1] = $username;

	for ($x = 0 ; $x < 2 ; $x++)
	{
		$input["$x"] = trim($input["$x"]);
		$input["$x"] = stripslashes($input["$x"]);
		$input["$x"] = htmlspecialchars($input["$x"]);
	}
	
	    if (empty($input[0]) || !preg_match("/[A-Za-z0-9]+/",$input[0])){		
			$usernameErr = "Username/Email Can't be blank or have special characters";
		}		elseif (empty($input[1])){			
			$passwordErr = "Password Can't be blank";			
		} else {

			




					$sqlusr = "SELECT * FROM users WHERE username = '$username' OR email = '$username';";
					$resultusr = mysqli_query($conn, $sqlusr);
			

	

	if (mysqli_num_rows($resultusr) > 0) {
		$sql = "SELECT * FROM users 
		WHERE (username = '$username' OR email = '$username') AND password = '$password';";
			
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) {
					//session_start();
					$_SESSION['online'] = true;
					
					header('Location: ../Main.php');	
				} else $passwordErr = "Incorrect Password";
			} else $usernameErr = "No Account Found";

			
		}

} 

} 



		$err = array($usernameErr , $passwordErr);


?>
		<div class = "container">
			<div class = "jumbotron">
				<h1 style = "text-align:center;"> Log in </h1>

 	
<form name = "myform" method = "POST"  >


<label for="username">Username (or email address):</label> 
<input type="text" id = "username" class="form-control" name="username" 
placeholder = "username / email"
value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>" >
<label style = "color:red;"> <?php echo $err[0]; ?> </label> <br> <br>



<label for="password">Password:</label> 
<input type="password" id = "password" class="form-control" name="password"> 
<label style = "color:red;"> <?php echo $err[1]; ?> </label> <br> <br>


 <button type="submit" name = "button" class="btn btn-primary btn-block" value = "submit" > 
 	<h4> Submit </h4> </button>
    
</form>
	</div>
		</div>

<?php  include_once "../views/footer.php" ?>
</body>
</html>