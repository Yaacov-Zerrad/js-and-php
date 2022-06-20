<?php

require_once("Manager.php");
    
    
class recipeManager extends Manager
{



function display_recipe(array $recipe) : string
{
    $recipe_content = '';

    if ($recipe['is_enabled']) {
        $recipe_content = '<article>';
        $recipe_content .= '<h3>' . $recipe['title'] . '</h3>';
        $recipe_content .= '<div>' . $recipe['recipe'] . '</div>';
        $recipe_content .= '<i>' . $recipe['author'] . '</i>';
        $recipe_content .= '</article>';
    }
    
    return $recipe_content;
}

 public function display_author(string $authorEmail, array $users) : string
{
    for ($i = 0; $i < count($users); $i++) {
        $author = $users[$i];
        if ($authorEmail === $author['email']) {
            return $author['full_name'] . '(' . $author['age'] . ' ans)';
        }
    }
}

    public function get_recipes(array $recipes, int $limit) : array
{
    $valid_recipes = [];
    $counter = 0;

    foreach($recipes as $recipe) {
        if ($counter == $limit) {
            return $valid_recipes;
        }

        $valid_recipes[] = $recipe;
        $counter++;
    }

    return $valid_recipes;
}

function is_enabledOk($is_enabled) 
{
    if ($is_enabled == 1){
        echo ('publiee');
    }else{
        echo ('gardee en brouillon');
    }
}


    public function getRecipes()
{
    $mysqlClient = $this->dbConnect();
   $reqs = $mysqlClient->query("SELECT * FROM recipes ");//prepare en inexploitable
   
   return $reqs;
} 

/*
    public function getRecipe($recipeId)
{
    $mysqlClient = $this->dbConnect();
   $req= $mysqlClient->prepare("SELECT * FROM recipes WHERE id = ?" );//prepare en inexploitable
   $req->execute(array($recipeId));//exploitable
   $recipe = $req->fetch(PDO::FETCH_ASSOC);//en tableau
   
   return $recipe;
} 
*/
    public function gettest($getId)
    {
        $mysqlClient = $this->dbConnect();
$retrieveRecipeStatement = $mysqlClient->prepare('SELECT * FROM recipes WHERE recipe_id ');
$retrieveRecipeStatement->execute([
    'recipe_id' => $getId,
]);
    
$recipe = $retrieveRecipeStatement->fetch();
    return $recipe;

    }



/*

public function limit(){
   if(isset($_GET['limit']) && is_numeric($_GET['limit'])) {
    $limit = (int) $_GET['limit'];
} else {
    $limit = 100;
}
    return $limit;
}

*/

}