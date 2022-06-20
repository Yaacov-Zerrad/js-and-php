<?php session_start();
 include_once('includes/variables.php');
 include_once('includes/functions.php');
 include_once('includes/mySQLConnect.php');
 include_once('includes/user.php');   

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
								<ul>
                        			<li><a href="user_recettes.php" >vos recettes</a></li>
                       				<li><a href="user_prepare.php" >en preparation</a></li>
								    <li><a href="user_comments.php" >vos commentaires</a></li>
                       				<li><a href="destroy.php" >deconnection</a></li>
								    <li><a href="recette_creat.php" >cree une recette</a></li>
                       				<li><a href="user_recettes.php" >modifier ou effacer une recette</a></li>
								</ul>
                					




























								
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