

<?php
// On affiche chaque recette une à une . puisque tableau
foreach (get_recipes($recipes, $limit) as $recipe) :  ?>
    <div>
        <h3><?php echo($recipe['recipe_id']); echo $recipe['title'];?></h3>
        <div><?php echo $recipe['recipe'] ; ?></div>
        <i><?php echo(display_author($recipe['author'], $users)); ?></i>
        <?php if(isset($loggedUser) && $recipe['author'] === $loggedUser['email']): ?>
            <ul class="modif">
                <li><a href="updateRecettes.php?id=<?php echo($recipe['recipe_id']); ?>">modifier</a></li>
                <li><a href="#.php">effacer</a></li>
            </ul>   
        <?php  endif; ?>
    <div>
<?php   endforeach  ?>


// variables.php

<?php
 On affiche chaque recette une à une . puisque tableau
foreach (get_recipes($recipes, $limit) as $recipe) :  ?>
    <div>
        <h3><?php echo($recipe['recipe_id']); echo $recipe['title'];?></h3>
        <div><?php echo $recipe['recipe'] ; ?></div>
        <i><?php echo(display_author($recipe['author'], $users)); ?></i>
        <?php if(isset($loggedUser) && $recipe['author'] === $loggedUser['email']): ?>
            <ul class="modif">
                <li><a href="updateRecettes.php?id=<?php echo($recipe['recipe_id']); ?>">modifier</a></li>
                <li><a href="#.php">effacer</a></li>
            </ul>   
        <?php  endif; ?>
    <div>
<?php   endforeach  ?>

$users = [
    [
        'full_name' => 'Yaacov Zerrad',
        'email' => 'yaazerrad@exemple.com',
        'age' => 25,
    ],
    [
        'full_name' => 'Myriam Zerrad',
        'email' => 'Myriamslevy@exemple.com',
        'age' => 25,
    ],
    [
        'full_name' => 'Arie Zerrad',
        'email' => 'ArieZerrad@exemple.com',
        'age' => 3,
    ],
];

$recipes = [
    [
        'title' => 'gratin',
        'recipe' => 'pomme de terre frommage...',
        'author' => 'yaazerrad@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => 'couscous viande...',
        'author' => 'arieZerrad@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'gteau au cafe',
        'recipe' => 'pate cafe...',
        'author' => 'myriamslevy@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Salade',
        'recipe' => 'choux carotte...',
        'author' => 'yaazerrad@exemple.com',
        'is_enabled' => false,
    ],
];


echo $users [0]['full_name'];
/*
foreach ($users as $user);
if (array_key_exists('age',$users))
{
    echo 'La clé "jhgf" se trouve dans la recette !';
}

*/
//afficher recette






?>