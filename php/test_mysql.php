<?php
try
{
	// On se connecte à MySQL
	$mysqlClient = new PDO('mysql:host=localhost;dbname=recettes;charset=utf8', 
        'root', 
        'root',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
);
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table recipes
$sqlQuery = "SELECT * FROM recipes  WHERE author = 'mimi zerrad'";//demande de selection . where= que si
$recipesStatement = $mysqlClient->prepare($sqlQuery);//prepare en inexploitable
$recipesStatement->execute();//exploitable
$recipes = $recipesStatement->fetchAll();//en tableau

// On affiche chaque recette une à une . puisque tableau
foreach ($recipes as $recipe) {
?>
    <p><?php echo $recipe['title'],'<br>',$recipe['author']; ?></p>
<?php
}


//INSERER UN ELEMENT
// Ecriture de la requête
$sqlQueryInsert = 'INSERT INTO recipes(title, recipe, author, is_enabled) VALUES (:title, :recipe, :author, :is_enabled)';

// Préparation
$insertRecipe = $mysqlClient->prepare($sqlQueryInsert);

// Exécution ! La recette est maintenant en base de données
$insertRecipe->execute([
    'title' => 'chausson aux pommes',
    'recipe' => 'Etape 1 : Des pommes ! Etape 2 : farinne ...',
    'author' => 'mimi zerrad',
    'is_enabled' => 1, // 1 = true, 0 = false
]);
?>