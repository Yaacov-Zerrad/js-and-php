<?php

// Si le cookie est présent
if (isset($_COOKIE['LOGGED_USER']) || isset($_SESSION['LOGGED_USER'])) {
    $loggedUser = [
        'email' => $_COOKIE['LOGGED_USER'] ?? $_SESSION['LOGGED_USER'],
    ];
} else {
    throw new Exception('Il faut être authentifié pour ajouter des recettes');
}

   // On récupère tout le contenu de la table USERS
   function users()
   {
       $mysqlClient = db();
      $usersStatement = $mysqlClient->prepare("SELECT * FROM users ");//prepare en inexploitable / demande de selection 
      $usersStatement->execute();//exploitable
      $users = $usersStatement->fetchAll();//en tableau
      return $users;
   }