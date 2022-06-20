<?php 

//$title = htmlspecialchars($recipe['title']);

 ob_start();
 
//$getData = $_GET;

if (!isset($_GET['id']) && is_numeric($_GET['id']))
{
    echo('Il faut un identifiant de recette pour le modifier.');
    return;
}	

$retrieveRecipeStatement = $mysqlClient->prepare('SELECT * FROM recipes, users WHERE recipe_id = :id');
$retrieveRecipeStatement->execute([
    'id' => $_GET['id'],
]);

$recipe = $retrieveRecipeStatement->fetch(PDO::FETCH_ASSOC);


							


?>
						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="recette.php"><?php echo($_GET['id']); echo($recipe['title']); ?></a></h2>
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
									<h4>commentaire</h4>
									<ul class="stats">
									<?php echo($recipe['comment']); ?>
										<li><form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
										    <div>
										        <label for="author">Auteur</label><br />
										        <input type="text" id="author" name="author" />
										        <label for="comment">Commentaire</label><br />
										        <textarea id="comment" name="comment"></textarea>
										        <input type="submit" />
										    </div>
										</form></li>
										<?php
											while ($comment = $comments->fetch()){?>
										<li><?php $comment['author']?> </li>
										<li><? $comment['comment'] ?></a></li>
										<?php } ?>
									</ul>
								</footer>
							</article>

		
						<?php	$article = ob_get_clean(); 
						
 
						require('view/template.php'); ?>
					   