<!DOCTYPE html>



<html>
<head>
<?php include_once "../views/btInfo.php"; ?>


<style> 
.dropdown {text-align:center;}
.dropdown-menu {width:200px; left:50%; margin-left:-100px;}
ul.dropdown-menu>li {
    text-align: center;
 
    font-size:30px;
}
.btn  {
	font-size:30px;
}
</style>

</head>

<body> 
<?php include_once "../views/header_profile.php";
	session_start();
if ($_SESSION['online'] == false) {
	header('Location: ../index.php');

}

 ?>

<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">What do you want to edit?
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="../edit/name.php">Name</a></li>
    <li><a href="../edit/username.php">Username</a></li>
    <li><a href="../edit/email.php">Email</a></li>
    <li><a href="../edit/password.php">Password</a></li>
  </ul>
</div>




<?php include_once "../views/footer.php" ?>
</body>
</html>




