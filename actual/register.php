<!DOCTYPE html>

<html>

<head> <title>Home</title>
<?php include_once "../views/header_first.php"; 
 include_once "../views/btInfo.php"; 
include_once "../database/dbInfo.php"
 ?>





<style> body {background: url(../img/intro-bg.jpg) no-repeat center center scroll; }


				.jumbotron {background-color: rgba(0,0,0,.0001)};</style>



<script type = "text/javascript"> 








function submit_form() {
	 var fn = document.getElementById("fullname");
	 var len = fn.value.length;
	
	 var usr = document.getElementById("username");
	 var em = document.getElementById("email");

   		 if(fn.value == "") {
    		 alert ("Name cannot be empty");
    		 usr.style.background = "white";
			 em.style.background  = "white";
    		 fn.style.background  = "yellow";
    	     fn.scrollIntoView();
      		 fn.focus();
      		 returnToPreviousPage();
    } else if (len < 4 ) {
    	     alert ("Name cannot be less than 4 characters");	
    	     usr.style.background = "white";
			 em.style.background  = "white";
    		 fn.style.background  = "yellow";
    	     fn.scrollIntoView();
      		 fn.focus();
      		 returnToPreviousPage();

    } else if (usr.value == "") {
    	    alert ("Username cannot be empty"); 
    	     em.style.background  = "white";
    		 fn.style.background  = "white";
    		 usr.style.background  = "yellow";
    	     usr.scrollIntoView();
      		 usr.focus();
      		 returnToPreviousPage();
    } else if (em.value == "") {
    	     alert ("Email cannot be empty");
    	     fn.style.background = "white";
			 usr.style.background = "white";
			 em.style.background  = "yellow";
    	     em.scrollIntoView();
      		 em.focus();
      		 returnToPreviousPage();
    }
   
    else {
         document.forms['myform'].submit();
        
    }
}

</script>
 
</head>

<body>




<?php
session_start();
		

	

$fullnameErr = $usernameErr = $emailErr = 
					$passwordErr = $confirmPasswordErr = "";


	 	if (isset($_SESSION['online']) && $_SESSION['online'] == true) {
							header('Location: session.php');	
					} else {
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {









					$duplicateCheckUser = $_POST['username'];
						$sql = "SELECT `username` FROM `users` 
                             WHERE username='$duplicateCheckUser'";

 						 $usernamecheck= mysqli_query($conn, $sql);




 						 	$duplicateCheckEmail = $_POST['email'];
						$sql = "SELECT `email` FROM `users` 
                             WHERE email='$duplicateCheckEmail'";

 						 $emailcheck= mysqli_query($conn, $sql);





	
	$input = array($_POST["fullname"], $_POST["username"], $_POST["email"],
	$_POST["password"], $_POST["confirmPassword"]);


	for ($x = 0 ; $x < 5 ; $x++)
	{
		$input["$x"] = trim($input["$x"]);
		$input["$x"] = stripslashes($input["$x"]);
		$input["$x"] = htmlspecialchars($input["$x"]);
	}
	

	if (empty($input[0]) || !preg_match('/^([^[:punct:]\d]+)$/', $input[0]))  {		
		$fullnameErr = "invalid Fullname"; 
		}	elseif (strlen($input[0]) < 4) {
			$fullnameErr = "Name must be more than 4 characters";
		} elseif (empty($input[1]) || !preg_match("/[A-Za-z0-9]+/",$input[1])){	
			$usernameErr = "invalid Username";
		}	elseif (empty($input[2]) || !filter_var($input[2], FILTER_VALIDATE_EMAIL)){
			$emailErr = "invalid Email";
		} elseif (empty($input[3])){			
			$passwordErr = "invalid Password";			
		} elseif (empty ($input[4]) || strcmp($input[3],$input[4]) ) {		
			$confirmPasswordErr = "Password doesn't match";
		} elseif (mysqli_num_rows($usernamecheck)>=1){	


						$usernameErr = "Username Already Taken";
		} elseif(mysqli_num_rows($emailcheck)>=1) {
				$emailErr = "Email Already Taken";
		}
	else {
		
		$_SESSION['online'] = true;
		$_SESSION['information'] = $input;
		header('Location: session.php');
	}
							

					} 

$err = array($fullnameErr, $usernameErr, $emailErr, $passwordErr, $confirmPasswordErr);
	}

?>
		<div class = "container">
			<div class = "jumbotron">
				<h1 style = "text-align:center;"> Sign Up </h1>

 	
<form name = "myform" method = "POST"  >

 <label for="fullname">Full Name: </label> 
<input type="text" id = "fullname" class="form-control" name="fullname" placeholder = "ex: John Doe" value="<?php echo isset($_POST['fullname']) ? $_POST['fullname'] : '' ?>" >

<label style = "color:red;"> <?php echo $err[0] ; ?> </label> <br> <br>

<label for="username">Username:</label> 
<input type="text" id = "username" class="form-control" name="username" 
placeholder = "ex: john.doe123"
value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>" >
<label style = "color:red;"> <?php echo $err[1]; ?> </label> <br> <br>

<label for="email">Email:</label> 
<input type="email" id = "email" class="form-control" name="email" 
placeholder = "ex: johndoe@hotmail.com"
value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" >
<label style = "color:red;"> <?php echo $err[2]; ?> </label> <br> <br>

<label for="password">Password:</label> 
<input type="password" id = "password" class="form-control" name="password"> 
<label style = "color:red;"> <?php echo $err[3]; ?> </label> <br> <br>

<label for="confirmPassword">Confirm Password:</label> 
<input type="password" id = "confirmPassword" class="form-control" name="confirmPassword"> 
<label style = "color:red;"> <?php echo $err[4]; ?> </label> <br> <br>

<div style = "padding-bottom: 20px;"> </div>


 <button type="button" name = "button" class="btn btn-primary btn-block" value = "submit"
 	onclick="submit_form();" > 
 	<h4> Submit </h4> </button>
    
</form>
	</div>
		</div>

<?php  include_once "../views/footer.php" ?>
</body>

</html>