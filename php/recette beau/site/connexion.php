<?php session_start();
include_once('model/variables.php');
include_once('model/functions.php');
include_once('model/mySQLConnect.php');


$title = 'connexion'; 
							
ob_start(); ?>
		<!-- Post -->
			<article class="post">
				<header>
					<div class="title">
						<h2><a href="#">Connectez vous!</a></h2>
						<p>Avec plein d'avantage et c'est gratuit.</p>
					</div>
				</header>
				<p>		
					<?php include_once("includes/login.php") ?>

					
				</p>	
			</article>

			

<?php $article = ob_get_clean(); 
						
 
require('view/template.php'); ?>