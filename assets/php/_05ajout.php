<?php

include '_01connexion.php';
include '_04sanatisation.php';


// envoi
$donnees = [
       'nom' => $nom,
       'status' => 1,
       'id' => 0,];
 var_dump($donnees);
 $sql = $bdd->prepare
 ("INSERT INTO todo VALUES (:id, :nom, :status)");

$sql->execute($donnees);
header ('location: ../../index.php');
?>
