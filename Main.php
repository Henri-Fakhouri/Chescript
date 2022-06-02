<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Chescript</title>	
		<?php 
		include_once "views/btInfo.php"; 
		include_once "database/dbInfo.php"; 
		?>
		

		<link href="styles.css" rel="stylesheet" type="text/css">	
		<script type="text/javascript"> if (!window.console) console = {log: function() {}}; </script>


			<style> body {background: url(../img/intro-bg.jpg) no-repeat center center scroll; }


				</style>
















	</head>
	<body>
		<header> 
			<h1></h1>	
		</header>	



























		<div id="Board">
		</div>

		
		<div id="EngineOutput" > <label >Difficulty:</label> 
			<br/>
			<select id="ThinkTimeChoice" class="form-control" >
			<option value="1">Easy</option>
			  <!-- <option value="2">2s</option> -->
			  <option value="4">Medium</option>
			  <!-- <option value="6">6s</option>
			  <option value="8">8s</option> -->
			  <option value="10">Hard</option>
			  



			</select> 




				<br>

<!-- 
					<?php


						// 	session_start();
						// if ($_SESSION['online'] == false) {
						// header('Location: actual/login.php');
						// } else 		{ 

						// 	$user = $_SESSION['information'][1];

							

						// 		//getUsername
						

						// $sql = "SELECT username FROM users WHERE username ='$user' or email ='$user'";
						// $result = mysqli_query($conn, $sql);
						
						// 	if (mysqli_num_rows($result) > 0) 

						// {
					 //    	$row = mysqli_fetch_assoc($result);
					 //    	$trueUser = $row["username"];
					 //    	echo "User:".$trueUser."  ";
					 //    } 



						// 		$sqlWin = "SELECT win FROM users WHERE username ='$trueUser'";
						// $resultWin = mysqli_query($conn, $sqlWin);
						
						// $sqlLose = "SELECT loss FROM users WHERE username ='$trueUser'";
						// $resultLose = mysqli_query($conn, $sqlLose);



						// if (mysqli_num_rows($resultWin) > 0) 

						// {
					 //    	$rowWin = mysqli_fetch_assoc($resultWin);
					 //    	$win = $rowWin['win'];
					 //    } 

					    

						// if (mysqli_num_rows($resultLose) > 0) 

						// {
					 //    	$rowLose = mysqli_fetch_assoc($resultLose);
					 //    	$loss = $rowLose['loss'];
					 //    } 
					 //    	echo "win:" . $win; 
					 //    	echo "   "." Loss:" . $loss;





			
	




					?> -->



			<br/><br/>


					
<div id="output" > </div>

<!-- 
			<span id="BestOut">BestMove:</span><br/>
			<span id="DepthOut">Depth:</span><br/>
			<span id="ScoreOut">Score:</span><br/>
			<span id="NodesOut">Nodes:</span><br/>
			<span id="OrderingOut">Ordering:</span><br/>
			<span id="TimeOut">Time:</span><br/><br/> -->


				


				<button type="button" id="NewGameButton" class="btn btn-primary btn-lg">New Game</button><br/>


					<br>

				<button type="button" id="TakeButton" class="btn btn-primary">Take Back</button><br/>

			<!-- 
			<button type="button" id="SearchButton">Move Now</button><br/>
			
			<button type="button" id="FlipButton">Flip Board</button><br/><br/>
			<br/><br/> -->



			
			

					
				<span id="GameStatus" name="data"></span>

<br>

<button class="btn btn-primary btn-sm>" onclick=window.location.href="actual/logout.php">Logout </button>
			
		



		</div>
		






		<script src="js/jquery-1.10.1.min.js"></script>		
		<script src="js/defs.js"></script>	
		<script src="js/io.js"></script>	
		<script src="js/board.js"></script>	
		<script src="js/movegen.js"></script>	
		<script src="js/makemove.js"></script>		
		<script src="js/evaluate.js"></script>	
		<script src="js/pvtable.js"></script>
		<script src="js/search.js"></script>
		<script src="js/perft.js"></script>
		<script src="js/gui.js"></script>
		<script src="js/main.js"></script>


<!-- <script type="text/javascript">
	
			

				// function blabla(){
				// var span_Text = document.getElementById("GameStatus").innerText;
				
				
				// if (span_Text == "GAME OVER {black mates}") {
				// 		 document.getElementById("helaho").innerHTML="Claim Win";
				// } else {

				// 			location.reload();

				// 	}
				// }
									
									
				
				 
				
		

</script>
 -->



	</body>
</html>





































