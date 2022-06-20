
<!DOCTYPE html>
<html>
<body>


<!--URL-->



 <!-- données à faire passer à l'aide d'inputs -->
 <form action="submit_contact.php" method="GET">
    <div>
        <label for="email">Email</label>
        <input type="email" name="email">
    </div>
    <div>
        <label for="message">Votre message</label>
        <textarea placeholder="Exprimez vous" name="message"></textarea>
    </div>
    <button type="submit">Envoyer</button>
</form>










<?php foreach(get_recipes($comments, $limit) as $comment) : ?>
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="single.html"><?php echo($comment['title']); ?></a></h2>
										<p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">November 1, 2015</time>
										<a href="#" class="author"><span class="name"><?php display_author($comment['author'], $users); ?></span><img src="images/avatar.jpg" alt="" /></a>
									</div>
								</header>
								<a href="single.html" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
								<p><?php echo($comment['recipe']); ?></p>
								<footer>
									<ul class="actions">
										<li><a href="single.html" class="button large">Continue Reading</a></li>
									</ul>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>
								</footer>
								<?php endforeach; ?></div>
							</article>
					
