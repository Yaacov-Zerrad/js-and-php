<?php   
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
// Suppression du cookie designPrefere
setcookie('LOGGED_USER');
// Suppression de la valeur du tableau $_COOKIE
unset($_COOKIE['LOGGED_USER']);
setcookie('NAME_USER');
// Suppression de la valeur du tableau $_COOKIE
unset($_COOKIE['NAME_USER']);
header("location:/index.php"); //to redirect back to "index.php" after logging out

?>