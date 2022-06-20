<?php session_start();
 include_once('includes/variables.php');
 include_once('includes/functions.php');
 include_once('includes/mySQLConnect.php');
?>


<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Site de recettes</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
				
					<?php if(isset($_SESSION['LOGGED_USER'])){ 
					 include('includes/header.php'); 
					} else {
					 include('includes/header_user.php');
					 }?>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#">Contactez nous!</a></h2>
										<p>Pour toutes question ou information.</p>
									</div>
								</header>
								<p>
                					<form method="post" action="submit_contact.php">
	            	    				<label for="name">Votre nom:<br></label><input            type="text"  name="nom"    id="nom"  placeholder="Damien" autofocus required><br>
	        	        				<label for="email">Votre adresse email:<br></label><input type="email" name="email"  id="email" placeholder="Damien@gmail.com" required><br>
	    	            				<label for="message">Votre message:<br></label><textarea               name="message" id="message" rows="7" cols="35" placeholder="Salut Yaacov!..." required></textarea><br>
		            	    				<input type="submit" value="Envoyer" />
                					</form>
								</p>	
							</article>

					</div>

						<!-- Footer -->
						<section id="footer">
							<?php include_once("includes/footer.php"); ?>
						</section>
				</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>