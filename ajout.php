<?php

include 'connexion.php';

$donnees = [
        'name' => ucfirst($_POST['name']),
        'status' => 1,
        'id' => 0,];

$sql = $bdd->prepare
("INSERT INTO taches VALUES (:id, :name, :status)");

$sql->execute($donnees);

session_start();
$_SESSION['success']=1;

header('location:index.php');

?>