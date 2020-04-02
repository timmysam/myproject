<?php
require '../configs/config.php';
if(isset($_SESSION['user_name'])){
	$username = $_SESSION['user_name'];

	if(isset($_POST['n_test'])){
		$_SESSION['user_name'] = $username;
		header("Location: ../events/test_scores.php");
	}
	if(isset($_POST['n_exam'])){
		$_SESSION['user_name'] = $username;
		header("Location: ../events/exams_scores.php");
		
	}


}
else{
		header("Location: ../index.php");
		$_SESSION['user_name'] ="../index.php";
	}




?>
<html>
<head>
	<title>Stud Scores</title>
	<link rel="stylesheet" type="text/css" href="../css/stud_scores.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="../scripts/register.js"></script> 
</head>
<body>
	<div class="wrapper">
	  <div class = "login_box">
	    <div class ="login_header">
	          <h1> SaMizpah's DBMS 4 Schools</h1>
	          <h4>Staff Task Bar!</h4>
	    </div>
	    <div id="first">
	
		<form action="stud_scores.php" method="POST">
			<div class="option">
				<a href="../stud_records/stud_registration.php" class="acc" style=" width: 20em;  height: 2em;">
					<input type="submit" name="n_test" class="acc" value ="Test_scores"
					style="position:relative; left: -21%;" >
					
				</a>
				<a href="test_scores.php">
					<input type="submit" name="n_exam" class="acc" value ="Exam_Scores"
					style="position:relative; left: 19.7%;" >

				</a>
				<div class="option">
				<a href="../events/profile.php" style="position:relative; top: 90px; left: -44%;">
					Back
				</a>
			</div>
			</div>

		</form>
	</dv>
      </div>
  </div>
</div >
</body>
</html>