<?php
$resultat = $bdd->query('SELECT * FROM todo where status=1');
$resultat2 = $bdd->query('SELECT * FROM todo where status=2');
?>