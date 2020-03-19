<?php

include 'connexion.php';

$donnees = [
        'nom' => $_POST['newtache'],
        'status' => 1,
        'id' => 0,];

$sql = $bdd->prepare
("INSERT INTO taches VALUES (:id, :nom, :status)");

$sql->execute($donnees);

session_start();
$_SESSION['success']=1;

header('location:index.php');

?>