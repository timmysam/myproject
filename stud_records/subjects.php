<?php
	Require '../configs/config.php';
	
	 
	
		if($_POST["Submit"] == "Submit") 
			{ for($i=0; $i<sizeof($vehicle);$i++) {
			 $query="INSERT INTO events (status) 
			 VALUES ('".$vehicle[$i]."')"; mysqli_query($query) or die (mysqli_error()); } echo "updated"; } ?> <html> <body>  
		echo "Record is inserted";  
		}  
?>  

<html>
<head>	
	<title></title>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--<meta property="og:title" content="" />-->
    <!--<meta property="og:url" content="" />-->
    <!--<meta property="og:image" content="" />-->
    <!--<meta property="og:site_name" content="" />-->
    <!--<meta property="og:description" content="" />-->
    <title>Course Project</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
	<link rel="stylesheet" href="../css/sub_option.css">
</head>
<body>


	<div class="wrapper">
		<div class = "login_box">
			<div class ="login_header">
				<h1> Welcome to SaMizpah</h1>
				Kindly Input Exams Scores!
			</div>
				<div id="first">
					<form action ="subjects.php" method="POST">
					<div class="option_sub" >
							
					Select Class:<select name="level" class="myLevel" >
							<option>select class</option>
							<option>JSS1</option>
							<option>JSS2</option>
							<option>JSS3</option>
							<option>SSS1 Science</option>
							<OPTION>SSS1 Commercial</OPTION>
							<option>SSS1 Art</option>
							<option>SSS2 Science</option>
							<OPTION>SSS2 Commercial</OPTION>
							<option>SSS2 Art</option>
							<option>SSS3 Science</option>
							<OPTION>SSS3 Commercial</OPTION>
							<option>SSS3 Art</option>
						</select><br>
						<table>	
						<tr><th>Subjects</th></tr>
						<tr><td><input type="checkbox" name="sub[ ]" value="Agricultural_science"></td><td>Agricultural_science</td></tr>
						<tr><td><input type="checkbox" name="sub[ ]" value="Biology"></td><td>Biology</td></tr>
						<tr><td><input type="checkbox" name="sub[ ]" value="Basic_Science"></td><td>Basic_Science</td></tr>
						<tr><td><input type="checkbox" name="sub[ ]" value="Basic_Technology"></td><td>Basic_Technology</td></tr>
						<tr><td><input type="checkbox" name="sub[ ]" value="Basic Technology"></td><td>Basic Technology</td></tr>
						<tr><td><input type="checkbox" name="sub[ ]" value="business Studies"></td><td>business Studies</td></tr>
						<tr><td><input type="checkbox" name="sub[ ]" value="Chemistry"></td><td>Chemistry</td></tr>
						<tr><td><input type="checkbox" name="sub[ ]" value="Christian_Religious_Studies"></td><td>Christian_Religious_Studies</td></tr>
						<tr><td><input type="checkbox" name="sub[ ]" value="Civic_Education"></td><td>CivicEducation</td></tr>
						<tr><td><tr><td><input type="checkbox" name="sub[ ]" value="Computer_Studies"></td><td>Computer_Studies</td></tr>
						<tr><td><input type="checkbox" name="sub[ ]" value="Cultutral & Creative Art"></td><td>Cultutral_&_Creative_Art</td></tr>
						<tr><td><input type="checkbox" name="sub[ ]" value="Economics"></td><td>Economics<br />
						<tr><td><input type="checkbox" name="sub[ ]" value="English_language"></td><td>English_language</td></tr>
						<tr><td><input type="checkbox" name="sub[ ]" value="French_language"></td><td>French_language<</td></tr>
						<tr><td><input type="checkbox" name="sub[ ]" value="Further_mathematics"></td><td>Further_mathematics<</td></tr>
						<tr><td><input type="checkbox" name="sub[ ]" value="Geography"></td><td>Geography</td></tr>
						<tr><td><input type="checkbox" name="sub[ ]" value="Government"></td><td>Government</td></tr>
						<tr><td><input type="checkbox" name="sub[ ]" value="Hausa_Language"></td><td>Hausa_Language</td></tr>
						<tr><td><input type="checkbox" name="sub[ ]" value="Home_Economics"></td><td>Home_Economics</td></tr>
						<tr><td><input type="checkbox" name="sub[ ]" value="Igbo_Language"></td><td>Igbo_Language</td></tr>
						<tr><td><input type="checkbox" name="sub[ ]" value="Literature_in_English"></td><td>Literature_in_English</td></tr>
						<tr><td><input type="checkbox" name="sub[ ]" value="Mathematics"></td><td>Mathematics</td></tr>
						<tr><td><input type="checkbox" name="sub[ ]" value="Music"></td><td>Music</td></tr>
					<tr><td><input type="checkbox" name="sub[ ]" value="Physical_&_Health_Education"></td><td>Physical_&_Health Education<br />
						<tr><td><input type="checkbox" name="sub[ ]" value="Social _Studies"></td><td>Social_Studies</td></tr>
						<tr><td><input type="checkbox" name="sub[ ]" value="Physics"></td><td>Physics</td></tr>
						<tr><td><input type="checkbox" name="sub[ ]" value="Yoruba_Language"></td><td>Yoruba_Language</td></tr>
						<tr><td><input type="submit" name="Submit" value="Submit"></td></tr>
					</table>
						<br>

					</form>
				</div>
			
			<a href="index.php">Back to Home</a>
		</div>
		
	</div>
</body>
</html>