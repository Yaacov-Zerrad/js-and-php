<?php 

require_once("Manager.php");

class commentManager extends Manager 
{ 

    
    
    

    public function getComments($recipeId)
    {
        $mysqlClient = dbConnect();
    $commentsStatement = $mysqlClient->prepare("SELECT *
FROM users u WHERE post_id = ? 
JOIN comments c
    ON u.user_id = c.user_id
JOIN recipes r
	ON c.recipe_id = r.recipe_id");//prepare en inexploitable / demande de selection 
$commentsStatement->execute(array($recipeId));//exploitable

    return $comments;
    }

    public function postComment($recipeId, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(recipe_id, user_id, comment, created_at) VALUES(?, ?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($recipeId, $author, $comment));

        return $affectedLines;
    }













}