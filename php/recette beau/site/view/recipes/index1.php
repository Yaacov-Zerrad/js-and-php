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
					<?php include('includes/header.php'); ?>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#">Partage de recettes!</a></h2>
										<p>Voila quelque mots a propos du site</p>
									</div>
								</header>
								<p>
                					Nous voila! apres beaucoup de temps de devlopement et de preparation voici un site qui vous apportera des recettes cacher bonne pour tout les periodes comme repas dessert ou simplment e quoi grignoter on a l habitude de ce perdre en cherchant des recettes que l on voit autour etant gener d appeler une copin pour avoir un gateaux gouter chez elle. n en parlon pas des delicieux gateaux que l'on fais et qu'apres on a toute la terre a nous appeler pour nous demander la recettes c'est pour former aussi un peut de ahdoute que je prend le temps de cree ce site histoire de partager chaqu'une ses chere recettes gratuitemen et de trouver un endroit ou nous pourront preparer des delices pour  les Hagime ou Chabbats <br>
                                    alors a toute bonne chances et bonnes appetit!!!!
								</p>	
								<footer>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>
								</footer>
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