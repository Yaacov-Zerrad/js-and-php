<?php 

// Chargement des classes
require_once('model/recipeManager.php');
require_once('model/CommentManager.php');



function listRecipes()
{
    $recipeManager = new recipeManager(); // Création d'un objet
    $recipes = $recipeManager->getrecipes(); // Appel d'une fonction de cet objet

    require('recipesView.php');
}

function recipe()
{
    $recipeManager = new recipeManager();
    $commentManager = new CommentManager();
    $mysqlClient = $recipeManager->dbConnect();
    $recipe = $recipeManager->gettest($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('recipeView.php');
}

function test(){echo('ca marche');}

function addComment($recipeId, $author, $comment)
{
    $commentManager = new CommentManager();

    $affectedLines = $commentManager->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $recipeId);
    }
}








