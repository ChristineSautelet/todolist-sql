<?php
include 'connexion.php';
$resultat = $bdd->query('SELECT * FROM todo where status=1');
$resultat2 = $bdd->query('SELECT * FROM todo where status=2');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>matodo-php.lol</title>
    <link rel="stylesheet" href="css/style.css" charset="utf-8">
</head>
<body>
<div class="container">
    <h1>TODOLIST</h1>
    <div id="divscroll">
        <form action="check.php" method="POST" class="mt-3">
        <p class="mt-3">A FAIRE</p>
        <div id="afaire">

            <?php while ($donnees = $resultat->fetch()){
            if (!$donnees['id']){break;}
            echo '<input type="checkbox" name="choix[]" value='.$donnees['id'].'> '.$donnees['nom'].'</br>';
            }
            $resultat->closeCursor();
            ?>
            </br>
            <button type="submit" class="btn btn-primary" name="button">Envoyer</button>
        </div>
        <div>
        <p class="mt-5">ARCHIVE</p>
            <?php while ($donnees2 = $resultat2->fetch()){
            if (!$donnees2['id']){break;}
            echo '<input type="checkbox" name="choix[]" value='.$donnees2['id'].'><s>'.$donnees2['nom'].'</s></br>';
            }
            $resultat2->closeCursor();
            ?>
        </div>
        </form>
    </div>
    <div>
        <p class="mt-5">AJOUTER UNE TÂCHE</p>
        <form action="ajout.php" method="post" class="mt-3">
            <label for="newtache">La tâche à effectuer</label></br>
            <input type="text" name="newtache" id="newtache" value="">
            <button type="submit" class="btn btn-primary" name="button">Ajouter</button>
        </form>
    </div>      
</body>
</html>