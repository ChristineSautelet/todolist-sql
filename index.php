<?php
include 'assets/php/_01connexion.php';
include 'assets/php/_02select.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'assets/php/_10head.php';?>

    <head>
    <body>
        <div class="container mt-1">
            <h1 class="text-center">TODOLIST</h1>
            <div id="haut" class="pl-2">
                <form action="assets/php/_03check.php" method="POST">
                <h2 class="mt-2">A FAIRE</h2>
                <div id="afaire" class="mt-3 mb-3">

                    <?php while ($donnees = $resultat->fetch()){
                    if (!$donnees['id']){break;}
                    echo '<input type="checkbox" name="choix[]" value='.$donnees['id'].'> '.$donnees['nom'].'</br>';
                    }
                    $resultat->closeCursor();
                    ?>
                    </br>
                    <button type="submit" class="btn btn-primary" name="button">Envoyer</button>
                </div>
                <h2 class="mt-4">ARCHIVE</h2>
                <div id="archive" class="mt-4">
                    <?php 
                        while ($donnees2 = $resultat2->fetch()){
                        if (!$donnees2['id']){break;}
                        echo '<input type="checkbox" name="choix[]" value='.$donnees2['id'].'><s>'.$donnees2['nom'].'</s></br>';
                        }
                    $resultat2->closeCursor();
                    ?>
                </div>
                </form>
            </div>
            <div id="bas" class="mt-4 pl-2">
                <h2 class="mt-2">AJOUTER UNE TÂCHE</h2>
                <form action="assets/php/_05ajout.php" method="post">
                    <label for="newtache" class="ml-2">La tâche à effectuer</label></br>
                    <div class="row">
                        <textarea class="col-6 ml-3" type="text" name="newtache" id="newtache" value="" maxlength="200" autofocus placeholder="Entrez nouvelle tâche"></textarea>
                        <button type="submit" class="btn btn-primary col-4 ml-3" name="button">Ajouter</button>
                    </div>
                </form>
            </div>  
        </div>    
    </body>
</html>