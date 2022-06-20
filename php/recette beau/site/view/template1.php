<!DOCTYPE HTML>
<html>
	<head>
		<title><?php $title ?>template</title>
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
					 include('header.php'); 
					} else {
					 include('header_user.php');
					 }?>
					 </header>

				<!-- Main -->
					<div id="main">
					 <?php if (isset($article)){$article;} ?>
					

						<!-- Pagination -->
						<ul class="actions pagination">
								<li><a href="" class="disabled button large previous">Previous Page</a></li>
								<li><a href="#" class="button large next">Next Page</a></li>
							</ul>

					</div>

				<!-- Sidebar -->
					<section id="sidebar">

					<?php include_once('category_index.php'); ?>


						<!-- About -->
							<section class="blurb">
								<h2>A propos</h2>
								<p>Faire de bonnes recettes facile avec ce qu'on a a la maison n'est pas choses facile. C'est pourquoi je vais essayee de vous partagee des recettes qui sont pour tous le monde.</p>
								<ul class="actions">
									<li><a href="index.php" class="button">En apprendre plus</a></li>
								</ul>
							</section>

						<!-- Footer -->
						<section id="footer">
							<?php include_once("footer.php"); ?>
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