<?php
$servname = "localhost"; 
$dbname = "sql_todolist_sql"; 
$user = "christinesautelet"; 
$pass = "user";

try
{
    $bdd = new PDO('mysql:host='.$servname.';dbname='.$dbname.';charset=utf8', $user, $pass);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}