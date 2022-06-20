<?php
const MYSQL_HOST = 'localhost';
const MYSQL_PORT = 3306;
const MYSQL_NAME = 'recettes';
const MYSQL_USER = 'root';
const MYSQL_PASSWORD = '20Myriam';


class Manager 
{
protected function dbConnect(){
    
try {
    $mysqlClient = new PDO(
        sprintf('mysql:host=%s;dbname=%s;port=%s', MYSQL_HOST, MYSQL_NAME, MYSQL_PORT),
        MYSQL_USER,
        MYSQL_PASSWORD
    );
    $mysqlClient->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $mysqlClient;
}
 catch(Exception $e)
 {
    die('Erreur : '.$e->getMessage());
}
}


}

