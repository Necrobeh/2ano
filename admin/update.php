<?php

include "../bdd/Connect.php";
include "../bdd/Connexion.php";
include "../bdd/ExecRequete.php";

$titre=htmlentities($_POST['title'], ENT_QUOTES, "UTF-8");
$content= $_POST['content'];

$connexion=Connexion($pServeur, $pNom, $pMotPasse, $pBase);

$req = 'UPDATE Projet SET Titre="'. $titre .'" , Texte="'. mysql_real_escape_string($content) .'" , Date="'. date('Y-m-d') .'" WHERE Id = 1';
$result = ExecRequete ($req, $connexion);

$reqSelect = 'SELECT * FROM Projet';
$resultSelect = ExecRequete ($reqSelect, $connexion);

$row = $row = ObjetSuivant($resultSelect);
echo $row->Titre ."<br/>". $row->Texte ."<br/>". $row->Date;

?>