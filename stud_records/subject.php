<?php
require '';

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
	<link rel="stylesheet" href="../css/pay_fess.css">
</head>
<body>


	<div class="wrapper">
		<div class = "login_box">
			<div class ="login_header">
				<h1> Welcome to SaMizpah</h1>
				Kindly Input Exams Scores!
			</div>
				<div id="first">
					<form action ="subject.php" method="POST">
	
						<select name ="subjects">
							<option>Select subject</option>
							<option>Agricultural science</option>
							<option>Biology</option>
							<option>Basic Science</option>
							<option>Basic Technology</option>
							<option>business Studies</option>
							<option>Chemistry</option>
							<option>Christian Religious Studies</option>
							<option>Civic Education</option>
							<option>Computer Studies</option>
							<option>Cultutral & Creative Art</option>
							<option>Economics</option>
							<option>English language</option>
							<option>French language</option>
							<option>Further mathematics</option>
							<option>Geography</option>
							<option>Government</option>
							<option>Hausa Language</option>
							<option>Home Economics</option>
							<option>Igbo Language</option>
							<option>Literature in English</option>
							<option>Mathematics</option>
							<option>Music</option>
							<option>Physical & Health Education</option>
							<option>Social Studies</option>
							<option>Physics</option>
							<option>Yoruba Language</option>
							<option>Islamic Religious Studies</option>
						</select> $nbsp;$nbsp;$nbsp;$nbsp;$nbsp;$nbsp;$nbsp;$nbsp;
						<select name="status">
							<option>select</option>
							<option>add</option>
							<option>remove</option>

						</select>

						<br>
						
						<input type="text" name="exam_scores" placeholder="Enter your exam scores" required="">
						<br>
						<input type ="submit" name="sub_button" value ="Submit"><br>

					</form>
				</div>
			
			<a href="index.php">Back to Home</a>
		</div>
		
	</div>
</body>
</html>