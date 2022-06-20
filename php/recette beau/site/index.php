<?php session_start();

$title = 'accueil'; 
							
require('control/controller.php');

ob_start();


if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listrecipes') {
        listrecipes();
    }
    elseif ($_GET['action'] == 'test') {
        test();
    }
    elseif ($_GET['action'] == 'recipe') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            recipe();
        }
        else {
            echo 'Erreur : aucun identifiant de recette envoyé';
        }
    }
}
else {
    listrecipes();
}



		
 $article = ob_get_clean(); 
						
 
 require('view/template.php'); 
