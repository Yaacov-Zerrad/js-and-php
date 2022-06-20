<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>contact</title>
    </head>



<?php
//tres important pour que les donnees soit bonne
//verifie que les parrametre sont la et que les valeur sont correcte
if (
    (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    || (!isset($_POST['message']) || empty($_POST['message']))
    )
{
	echo('Il faut un email et un message valides pour soumettre le formulaire.');
    return;
}

$message = $_POST['message'];
?>





    </head>
 
    <body>
    <!--en tete-->
    <div id="boxpage">
    <?php include('includes/header.php'); ?>
    
    <!-- Le corps -->
    <section><!--section/ partie de la page-->
        <article class="article1"><!--bloc d info complementaire au texte-->
        <h1>Message bien reçu !</h1>
        
        <div class="card">
            
            <div class="card-body">
                <h5 class="card-title">Rappel de vos informations</h5>
                <p class="card-text"><b>nom</b> : <?php echo  htmlspecialchars($_POST['nom']);//pour mettre les balise user mais aui srve a rien ?></p> 
                <p class="card-text"><b>Email</b> : <?php echo $_POST['email']; ?></p>
                <p class="card-text"><b>Message</b> : <?php echo strip_tags($message); //pour enlever les balise user?></p>
                
            </div>
        </div>
                
        </article>
    </section>
    

    <!-- Le pied de page -->
    
    <?php include('includes/footer.php'); ?>
</div>
    </body>
</html>

<h1>Message bien reçu !</h1>
        
        <div class="card">
            
            <div class="card-body">
                <h5 class="card-title">Rappel de vos informations</h5>
                <p class="card-text"><b>nom</b> : <?php echo $_GET['nom']; ?></p>
                <p class="card-text"><b>Email</b> : <?php echo $_GET['email']; ?></p>
                <p class="card-text"><b>Message</b> : <?php echo $_GET['message']; ?></p>
                
            </div>
        </div>

