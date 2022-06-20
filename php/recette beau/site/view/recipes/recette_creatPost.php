<?php session_start();
setcookie('NAME_USER');

include_once('includes/mySQLConnect.php');
include_once('includes/variables.php');   
include_once('includes/functions.php');



$postData = $_POST;

if (
    !isset($postData['title']) 
    || !isset($postData['textrecipe'])
    )
{
    echo ('Il faut remplire les champs!');
    return;
}

//variable recu de recette_creat.php
$title = $_POST['title'];
$difficulty = $_POST['difficulty'];
$preparation_time = $_POST['prepare'];
$ingredients = $_POST['ingredients'];
$recipe = $_POST['textrecipe'];
$is_enabled = $_POST['is_enabled'];
//recuperation de category
if(isset($_POST['category'])){
foreach($_POST['category'] as $category){}

}




//faire l insertion dans la base
$insertRecipe = $mysqlClient->prepare('INSERT INTO recipes (title, category, created_at, difficulty, preparation_time, ingredients, recipe, author,is_enabled, user_id ) 
													VALUES (:title, :category, :created_at, :difficulty, :preparation_time, :ingredients, :recipe, :author, :is_enabled, :user_id)');
$insertRecipe ->execute([
    'title' => $title,
	'category' => $category,
	'created_at' => date('Y-m-d'),
	'difficulty' =>$difficulty,
	'preparation_time' => $preparation_time,
	'ingredients' => $ingredients,
    'recipe' => $recipe,
    'author' => $loggedUser['email'],
	'is_enabled' => $is_enabled,
	'user_id' => 1,
]);
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
										<h2><a href="#"></a>Recette ajoutee avec succes!</h2>
										<p>vous pouvez la modifier dans votre compte</p>
									</div>
								</header>
								<p>
        
        <div class="card">
            
            <div class="card-body">
                <h4 class="card-title">voici les details de votre recette</h4>
                <p class="card-text"><b>Titre</b> : <?php echo  strip_tags($title);//pour mettre les balise user mais aui srve a rien ?></p> 
                <p class="card-text"><b>difficultee</b> : <?php echo strip_tags($difficulty); //pour enlever les balise user?></p>
                <p class="card-text"><b>temps de preparation</b> : <?php echo  strip_tags($preparation_time);//pour mettre les balise user mais aui srve a rien ?></p> 
                <p class="card-text"><b>ingredient</b> : <?php echo htmlspecialchars($ingredients); //pour enlever les balise user?></p>
                <p class="card-text"><b>preparation</b> : <?php echo  strip_tags($recipe);//pour mettre les balise user mais aui srve a rien ?></p> 
                <p class="card-text"><b>activation</b> : <?php echo is_enabledOk($is_enabled); //pour enlever les balise user?></p>
            </div>
		
        </div>
		<button type="submit" herf="user_recettes.php">Retour a la page "vos recettes"</a></button>

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