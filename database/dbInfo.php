<?php

$servername  = "localhost";
$username = "root";
$password = "";


//create conx
$conn = mysqli_connect("localhost","root","","dbchess");

//check conx 
if (!$conn){
	die ("conx failed: " . mysqli_connect_error());
}
	





?>