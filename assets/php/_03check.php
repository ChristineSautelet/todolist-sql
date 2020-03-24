<?php
include '_01connexion.php';


if(isset($_POST['choix'])){
$array = ($_POST['choix']);
foreach ($array as $value){
$sql = $bdd->prepare
("UPDATE todo SET status = 
CASE 
WHEN status = 1 THEN 2
WHEN status = 2 THEN 1
END
WHERE id = $value;");
$sql->execute();
}
}
header ('Location:../../index.php');
?>
