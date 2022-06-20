<?php session_start();
 include_once('includes/variables.php');
 include_once('includes/functions.php');
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
						<?php foreach(get_recipes($recipesAll, $limit) as $recipe) : ?>
					    <?php if(isset($loggedUser) && $recipe['author'] === $loggedUser['email']): ?>


					<article class="post">
							
							<header>
								<div class="title">
								<h2><a href="user_recette.php"><?php echo($recipe['title']); ?></a></h2>

								<p>
									<ul>
										<li>categorie: <?php echo($recipe['category']); ?></li>
										<li>temps de preparation: <?php echo($recipe['preparation_time']); ?></li>
									</ul> 
								</p>
									<ul>
										<li ><a class="link-warning" href="recette_update.php?id=<?php echo($recipe['recipe_id']); ?>">Editer l'article</a></li>
                        				<li ><a class="link-danger" href="recette_delete.php?id=<?php echo($recipe['recipe_id']); ?>">Supprimer l'article</a></li>
        				            </ul>
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
								<footer>
									<ul class="actions">
										<li><a href="user_recette.php?id=<?php echo($recipe['recipe_id']); ?>" class="button large">Continuez la lecture</a></li>
									</ul>
									<ul class="stats">
										<li><a href="#">Avis</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>
								</footer>
								<?php endif; ?>
							</article><?php endforeach; ?>

						<!-- Pagination -->
							<ul class="actions pagination">
								<li><a href="" class="disabled button large previous">Previous Page</a></li>
								<li><a href="#" class="button large next">Next Page</a></li>
							</ul>

					</div>

				<!-- Sidebar -->
					<section id="sidebar">
				<?php include_once ('includes/category_index.php'); ?>
						<!-- Posts List -->
							<section>
								<ul class="posts">
									<li>
										<article>
											<header>
												<h3><a href="single.html">Lorem ipsum fermentum ut nisl vitae</a></h3>
												<time class="published" datetime="2015-10-20">October 20, 2015</time>
											</header>
											<a href="single.html" class="image"><img src="images/pic08.jpg" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="single.html">Convallis maximus nisl mattis nunc id lorem</a></h3>
												<time class="published" datetime="2015-10-15">October 15, 2015</time>
											</header>
											<a href="single.html" class="image"><img src="images/pic09.jpg" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="single.html">Euismod amet placerat vivamus porttitor</a></h3>
												<time class="published" datetime="2015-10-10">October 10, 2015</time>
											</header>
											<a href="single.html" class="image"><img src="images/pic10.jpg" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="single.html">Magna enim accumsan tortor cursus ultricies</a></h3>
												<time class="published" datetime="2015-10-08">October 8, 2015</time>
											</header>
											<a href="single.html" class="image"><img src="images/pic11.jpg" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="single.html">Congue ullam corper lorem ipsum dolor</a></h3>
												<time class="published" datetime="2015-10-06">October 7, 2015</time>
											</header>
											<a href="single.html" class="image"><img src="images/pic12.jpg" alt="" /></a>
										</article>
									</li>
								</ul>
							</section>

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