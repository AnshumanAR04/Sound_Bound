	<!DOCTYPE HTML>
	<html>
		<head>
			<title>Sound Bound</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
			<link rel="stylesheet" href="assets/css/main.css" />
			<link rel="shortcut icon" href="images/logo.png" />
			<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	        rel="stylesheet">
			<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		


		</head>
		<body>
			<script>
				function showUser() {
								var str=document.getElementById('fsong').value;

				    if (str == "") {
				        document.getElementById("txtHint").innerHTML = "";
				        return;
				    } else { 
				        if (window.XMLHttpRequest) {
				            xmlhttp = new XMLHttpRequest();
				        } else {
				            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				        }
				        xmlhttp.onreadystatechange = function() {
				            if (this.readyState == 4 && this.status == 200) {
				                document.getElementById("txtHint").innerHTML = this.responseText;
				            }
				        };
				        xmlhttp.open("GET","ajax.php?q="+str,true);
				        xmlhttp.send();
				    }
				}
			</script>

				

				<div id="wrapper">

						<header id="header">
							<div class="logo">
								<img src="images/logo.png"  class="logo">
							</div>
											

							<div class="content">
								<div class="inner">
									<h1>Sound Bound</h1>
									<?php 

										if(isset($_GET['value'])) {
										require('connection.php');

										$id = $_GET['value'];

										$sql = "SELECT * FROM list WHERE id='$id'";
										$result = $conn->query($sql);

										if($result->num_rows > 0) {
											$value = $result->fetch_assoc();

									?>
									<h4><?php echo $value['title'] ?></h4>
									<audio controls >
	  								<source src="<?php echo $value['path'] ?>" type="audio/mpeg">
									</audio>


									<?php } }?>
								<div class="table-wrapper">
											<table class="alt">
												<thead>
													<tr>
														<th><h4><a href="title.php">Title</a></h4></th>
														<th><h4><a href="genre.php">Genre</a></h4></th>
														<th><h4><a href="artist.php">Artist</a></h4></th>
													</tr>
												</thead>
												<tbody>
													
													<?php
													require('connection.php');

													$sql1 = "SELECT * FROM list ";
													$result1 = $conn->query($sql1);

													for($i = 1 ; $i <= $result1->num_rows; $i++) {
														$value1 = $result1->fetch_assoc();

													?>
													<tr >
														<td><a   href="index.php?value=<?php echo $i ?>"><?php echo $value1['title']; ?></td>
														<td><a   href="index.php?value=<?php echo $i ?>"><?php echo $value1['genre']; ?></td>
														<td><a   href="index.php?value=<?php echo $i ?>"><?php echo $value1['Artist']; ?></td>
														<?php } ?>
														
													</tr>
												</tbody>
												
											</table>
										</div>
									 
								</div>
							</div>
										
							<a href="#elements" ><button class="special" > Search</button></a>

							<a href="addsong.php" target="_blank"><button  > Add Songs</button></a>

						</header>

						<div id="main">
								<article id="elements">
									<h3 class="major">Looking for your kind of music?</h3>
									<section>
										<h4 class="major">Search</h4>
										
										<form >
											<div class="field half first">
												<input type="text" name="title" id="fsong" placeholder="Your Song Title Goes Here" required/><br>
												<ul class="actions">
												<li><input type="button" value="Search" class="special" onclick="showUser()" /></li>
												<div id="txtHint" style="padding-top: 20px;width: 400px;font-size: 14px;"></div>
												
											</ul>
											</div>
												<?php
													if(isset($_GET['value']))
													
														
													{$sett=$_GET['value'];
														if($sett==100){	
													require('connection.php');

													$sql1 = "SELECT * FROM list WHERE title='$title'";
													$result1 = $conn->query($sql1);
													if($result1->num_rows>=1)

													for($i = 1 ; $i <= $result1->num_rows; $i++) {
														$value1 = $result1->fetch_assoc();


													?>
													<tr >
														
														<td><a   href="index.php?value=<?php echo $value1['id'] ?>"><?php echo $value1['title']; ?></td>
														<td><a   href="index.php?value=<?php echo $value1['id'] ?>"><?php echo $value1['genre']; ?></td>
														<td><a   href="index.php?value=<?php echo $value1['id'] ?>"><?php echo $value1['Artist']; ?></td>
														<?php } }}?>
														
													</tr>
												</tbody>
												
											</table>
										</div>
										</form>
									</section>
								</article>
						</div>
						<footer id="footer">
							<p class="copyright"> </a>.</p>
						</footer>
				</div>
				<div id="bg"></div>
				<script src="assets/js/jquery.min.js"></script>
				<script src="assets/js/skel.min.js"></script>
				<script src="assets/js/util.js"></script>
				<script src="assets/js/main.js"></script>

		</body>
	</html>
