<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>recettes</title> 

       
    </head>
 
    <body>
    <!--en tete-->
    <div id="boxpage">
    <?php include('includes/header.php'); ?>
    
    <!-- Le corps -->
    
    <section><!--section/ partie de la page-->
    <article class="article1"><!--bloc d info complementaire au texte-->
                <h1>ici vous aurai des recettes</h1>
                <p>
                <?php include_once('includes/login.php');?>

            <?php if(isset($_SESSION['LOGGED_USER'])): ?>
                <?php foreach(getRecipes($recipes) as $recipe) : ?>
                <h3><?php echo $recipe['title']; ?></h3>
                <h4><?php echo $recipe['recipe']; ?></h4>
                <i><?php echo displayAuthor($recipe['author'], $users); ?></i>
                <?php endforeach ?>
                <?php endif; ?>
    

             

                </p>
            </article>
            <aside class="aside1"> <!--bloc d info non complementaire/article independant-->               
                <h1>Partagez vos recettes</h1>
                <p>Vous avez une recettes interressante ?<br> <a href="insertRecettes.php">Partagez la avec nous</a></p>
            </aside>
        </section>
    
    <!-- Le pied de page -->
    
    <?php include('includes/footer.php'); ?>
</div>
    </body>
</html>