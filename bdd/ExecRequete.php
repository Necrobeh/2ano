<?php

 // Ex�cution d'une requ�te avec MySQL
 function ExecRequete ($requete, $connexion) {
	$resultat = mysql_query ($requete, $connexion);
	if ($resultat) 
		return $resultat;
	else {
		echo "<b>Erreur dans l'ex�cution de la requ�te '$requete'." . "</b><br />";
		die ("<b>Message de MySQL :</b> " . mysql_error($connexion));
	}
 }
 
 // Recherche de l'objet suivant 
 function ObjetSuivant ($resultat) {
	return mysql_fetch_object ($resultat);
 }
 ?>