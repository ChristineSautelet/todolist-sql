<?php

include '_01connexion.php';

$donnees = [
        'nom' => $_POST['newtache'],
        'status' => 1,
        'id' => 0,];

$sql = $bdd->prepare
("INSERT INTO todo VALUES (:id, :nom, :status)");

$sql->execute($donnees);
header ('location: ../../index.php');


?>