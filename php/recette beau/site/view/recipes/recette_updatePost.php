<?php session_start();

include_once('includes/mySQLConnect.php');
include_once('includes/variables.php');
include_once('includes/user.php');   

$postData = $_POST;

if (!isset($postData['id'])
    || is_numeric($postData['title'])
    || !isset($postData['recipe'])
    )
{
    echo 'Il manque des info pour modifier !';
    return;
}


$id = $postData['id'];
$title = $postData['title'];
$recipe = $postData['recipe'];


//faire l insertion dans la base
$retrieveRecipe = $mysqlClient->prepare('UPDATE recipes SET title = :title, recipe = :recipe WHERE recipe_id = :id');
$retrieveRecipe ->execute([
    'title' => $title,
    'recipe' => $recipe,
    'id' => $id,
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
										<h2><a href="#">Operation reussie</a></h2>
										<p>Votre recette a ete modifier avec succee.</p>
									</div>
								</header>
								<p>
                					
        
        <div class="card">
            
            <div class="card-body">
                <h5 class="card-title"><?php echo($title); ?></h5>
                <p class="card-text"><b>Titre</b> : <?php echo  htmlspecialchars($title);//pour mettre les balise user mais aui srve a rien ?></p> 
                <p class="card-text"><b>Recette</b> : <?php echo strip_tags($recipe); ?></p>
                
            </div>
        </div>
                <h3><a href="user_recettes.php">revenir a vos recettes cliquez</a></h3>
        </article>
    </section>
    

    <!-- Le pied de page -->
    
    <?php include('includes/footer.php'); ?>
</div>
    </body>
</html>


