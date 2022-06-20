<?php 
session_start();

include_once('includes/mySQLConnect.php');
include_once('includes/variables.php');
include_once('includes/user.php');   

$postData = $_POST;

if (!isset($postData['id']))
{
	echo('Il faut un identifiant valide pour supprimer une recette.');
    return;
}	

$id = $postData['id'];

$deleteRecipeStatement = $mysqlClient->prepare('DELETE FROM recipes WHERE recipe_id = :id');
$deleteRecipeStatement->execute([
    'id' => $id,
]);

header('Location: user_recettes.php');
?>
