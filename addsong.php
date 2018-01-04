<!DOCTYPE html>
<html>
<head>
	<title>Add Songs</title>
	<link rel="stylesheet" href="assets/css/main1.css" />
	<link rel="shortcut icon" href="images/logo.png" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body>
<div id="wrapper">
	<header id="header">
	<div class="content">
		<div class="inner">
			<h2>Add song details</h2>
	<?php

		if($_SERVER["REQUEST_METHOD"] == "POST") {
			require('connection.php');

			$title = $_POST['title'];
			$path = $_POST['path'];
			$genre = $_POST['genre'];
			$artist = $_POST['artist'];


			$sql = "INSERT into list VALUES ('', '$title', '$path','$genre','$artist')";

			if($conn->query($sql) == TRUE) {
				echo "Uploaded Successfully";
			} else {
				echo "Error in Uploading File.";
			}
		}

	?>


	<form method="POST" action="addsong.php">
		Title: <input type="text" name="title"  required>
		<br>
		Path: <input type="text" name="path"  required>
		<br>
		Genre: <input type="text" name="genre"  required>
		<br>
		Artist: <input type="text" name="artist"  required>
		<br>
		<input type="Submit"> 
	</form>
<a href="index.php" ><button  > Go to Player</button></a>

</header>
</div></div>
</div>
<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
</body>
</html>