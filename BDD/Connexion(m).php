<?php
 // Fonction Connexion: connexion � MySQL
 function Connexion ($pServeur, $pNom, $pMotPasse, $pBase) {
 // Connexion au serveur
	$connexion = mysql_pconnect ($pServeur, $pNom, $pMotPasse);
	if (!$connexion) {
		die ("D�sol�, connexion au serveur $pServeur impossible\n");
	}
 // Connexion � la base
	if (!mysql_select_db ($pBase, $connexion)) {
		echo "D�sol�, acc�s � la base $pBase impossible\n";
		die ("<b>Message de MySQL :</b> " . mysql_error($connexion));
	}
	mysql_query("SET NAMES UTF8");
 // On renvoie la variable de connexion
	return $connexion; 
 }
 ?>