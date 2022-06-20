<?php 


$title = 'liste-recettes'; 
						

ob_start();


?>

						<!-- Post -->
						<?php while ($recipe = $recipes->fetch()) {  //(get_recipes($recipesAll, $limit) as ) : ?>
						<?php	$id = $recipe['recipe']; ?>
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
										<time class="published" datetime="01-11-2015"><?php echo ($recipe['created_at']); ?></time>
										<a href="#" class="author"><span class="name"><?php /*display_author($recipe['author']/*, $users); echo($recipe['full_name']) */?></span><img src="images/avatar.jpg" alt="" /></a>
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
										<li><a href="recipeView.php?action=recipe&amp;id=<?php echo($recipe['recipe_id']); ?>" class="button large">Continuez la lecture</a></li>
									</ul>
									<ul class="stats">
										<li><a href="#">Avis</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>
								</footer>
								
							</article><?php }
							
							$recipes->closeCursor(); ?>

							<?php	$article = ob_get_clean(); 
						
 
						require('view/template.php'); ?>
					   