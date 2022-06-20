<?php session_start();

include_once('includes/variables.php');
 include_once('includes/user.php');   
 include_once('includes/mySQLConnect.php');

$getData = $_GET;

if (!isset($getData['id']) && is_numeric($getData['id']))
{
    echo('Il faut un identifiant de recette pour le modifier.');
    return;
}	

$retrieveRecipeStatement = $mysqlClient->prepare('SELECT * FROM recipes WHERE recipe_id = :id');
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
										<h2><a href="#">Supprimer la recette</a></h2>
										<p>etes vous sur? ect.........</p>
									</div>
								</header>
						<p>	



        <form action="recette_deletePost.php" method="POST">
            <div>
                <label for="id" ><h4>Vous vous appretez a suprrimer:   <?php echo ($recipe['title']) ; ?></h4></label><!-- id de recette a supprimer-->
                <input type="hidden"  id="id" name="id" value="<?php echo($getData['id']); ?>">
            </div>
            
            <button type="submit" >La suppression est définitive</button>
        </form>
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