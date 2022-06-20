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
		<title>creation recette</title>
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
										<h2><a href="#">cree votre recettes!</a></h2>
										<p>si vous avez envie ect.............</p>
									</div>
								</header>
								<p>
								
    <?php if(!isset($loggedUser)):  //si pas encor connecter alor envoie au formulaire ?>
		<h2>connectez vous pour partager:</h2>
                    <ul>
                        <li><a href="connexion.php" >connexion</a></li>
                        <li><a href="inscription.php" >inscription</a></li>
					</ul>



<!--Si utilisateur bien connectée on affiche un message de succès-->
<?php else: ?>
    
	<form method="POST" action="recette_creatPost.php">

			        <label for="title">Titre:<br></label>
                    <input   type="text"  name="title"  id="title"   placeholder="chausson au pommes" autofocus required><br>

		       		<h4>categorie (cochez plusieurs si il le faut) :</h4>
	    		    	<input type="checkbox" name="category[]" value="entree" id="entree" /> <label for="entree">entree</label> <!--checked=cocher par defaut-->
    			    	<input type="checkbox" name="category[]" value="fish" id="fish" /> <label for="fish">poisson</label><br />
    				    <input type="checkbox" name="category[]" value="meat" id="meat" /> <label for="viande">gateaux</label>
					    <input type="checkbox" name="category[]" value="dessert" id="dessert"  /> <label for="dessert">dessert</label><br /> <!--checked=cocher par defaut-->
    				    <input type="checkbox" name="category[]" value="biscuit" id="biscuit" /> <label for="biscuit">biscuit</label>
    			    	<input type="checkbox" name="category[]" value="vienoiserie" id="vienoiserie" /> <label for="vienoiserie">vienoiserie</label><br />

					<h4>difficultee :</h4>
    				    <input type="radio" name="difficulty" value="facile" id="facile" /> <label for="facile">facile</label>
    				    <input type="radio" name="difficulty" value="moyen" id="moyen" /> <label for="moyen">moyen</label>
    				    <input type="radio" name="difficulty" value="difficile" id="difficile" /> <label for="difficile">difficile</label><br />

				    <h4>temps de preparation(avec cuisson) :</h4>
    				    <input type="radio" name="prepare" value="rapide" id="moins15" /> <label for="moins15">rapide</label>
    				    <input type="radio" name="prepare" value="moyen" id="medium15-25" /> <label for="medium15-25">moyen</label>
    				    <input type="radio" name="prepare" value="long" id="long" /> <label for="long">long</label><br />

				    <label for="ingredients">ingredients:<br></label>
                    <textarea  name="ingredients" id="ingredients" rows="8" cols="40" placeholder="farine 200g, beurre 20g ect... " required></textarea><br>
	                
					<label for="textrecipe">Preparation:<br></label>
                    <textarea  name="textrecipe" id="textrecipe" rows="10" cols="50" placeholder="etape 1 ect..." required></textarea><br>

    			   <input type="radio" name="is_enabled" value="1" id="true" /> <label for="true">publiez</label><br />
    			   <input type="radio" name="is_enabled" value="0" id="false" /> <label for="false">sauvegarder(en brouillon dans ........)</label><br />


					<button type="submit">Envoyer</button>
                </form>
<?php endif; 


?>

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