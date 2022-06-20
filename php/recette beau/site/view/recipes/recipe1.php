<?php session_start(); 
 include_once('includes/variables.php');
 include_once('includes/mySQLConnect.php');

 $getData = $_GET;

 if (!isset($getData['id']) && is_numeric($getData['id']))
 {
     echo('Il faut un identifiant de recette pour le modifier.');
     return;
 }	
 
 $retrieveRecipeStatement = $mysqlClient->prepare('SELECT * FROM recipes, users WHERE recipe_id = :id');
 $retrieveRecipeStatement->execute([
     'id' => $getData['id'],
 ]);
 
 $recipe = $retrieveRecipeStatement->fetch(PDO::FETCH_ASSOC);
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
										<h2><a href="recette.php"><?php echo($recipe['title']); ?></a></h2>
										<p>
											<ul>
												<li>categorie: <?php echo($recipe['category']); ?></li>
												<li>temps de preparation: <?php echo($recipe['preparation_time']); ?></li>
											</ul> 
										</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01"><?php echo($recipe['created_at']); ?></time>
										<a href="#" class="author"><span class="name"><?php display_author($recipe['author'], $users); echo($recipe['full_name']) ?></span><img src="images/avatar.jpg" alt="" /></a>
									</div>
								</header>
									<a href="recette.php" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
									<p>
										<ul>
											<li>niveau:   <?php echo($recipe['difficulty']);?></li>
											<li>temps de preparation:  <?php  echo($recipe['preparation_time']); ?>
										</ul>
									</p>
									<p><?php echo($recipe['ingredients']);  echo($recipe['recipe']); ?></p>
								<footer>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>
								</footer>
								<footer>
									<ul class="stats">
									<?php echo($recipe['comment']); ?>
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>
								</footer>
							</article>

					</div>

				<!-- Footer -->
					<section id="footer">
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
							<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>
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