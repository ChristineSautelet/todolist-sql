<?php
include 'connexion.php';
$resultat = $bdd->query('SELECT * FROM les_status LEFT JOIN taches ON les_status.id=taches.status where les_status.id=1');
$resultat2 = $bdd->query('SELECT * FROM les_status LEFT JOIN taches ON les_status.id=taches.status where les_status.id=2');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>matodo-php.lol</title>
    <link rel="stylesheet" href="css/style.css" media="screen" charset="utf-8">
</head>
<body>
<div class="container">
    <h1>TODOLIST</h1>
    <p class="mt-5">A FAIRE</p>
    <div>
        <form action=" <?php ?>" method="post" class="mt-3">
            <?php while ($donnees = $resultat->fetch()){
            echo "<div>";
            echo "<input type='checkbox' id='scales' name='".$donnees['nom']."'>";
            echo "<label for='scales'>".$donnees['nom']."</label>";
            echo "</div>";
            }
            $resultat->closeCursor();
            ?>
            <button type="submit" class="btn btn-primary" name="button">Envoyer</button>
        </form>
    </div>
    <p class="mt-5">ARCHIVE</p>
    <div>
        <form action=" <?php ?>" method="post" class="mt-3">
            <?php while ($donnees2 = $resultat2->fetch()){
            echo "<div>";
            echo "<input type='checkbox' id='scales' name='".$donnees2['nom']."'>";
            echo "<label for='scales'><s>".$donnees2['nom']."</s></label>";
            echo "</div>";
            }
            $resultat2->closeCursor();
            ?>
        </form>
    </div>
    <div>
        <p class="mt-5">AJOUTER UNE TÂCHE</p>
        <form action="ajout.php" method="post" class="mt-3">
            <label for="newtache">La tâche à effectuer</label></br>
            <input type="text" name="newtache" id="newtache" value="">
            <button type="submit" class="btn btn-primary" name="button">Envoyer</button>
        </form>
    </div>      
</body>
</html>