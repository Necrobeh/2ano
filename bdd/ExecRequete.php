<?php

 // Exécution d'une requête avec MySQL
 function ExecRequete ($requete, $connexion) {
	$resultat = mysql_query ($requete, $connexion);
	if ($resultat) 
		return $resultat;
	else {
		echo "<b>Erreur dans l'exécution de la requête '$requete'." . "</b><br />";
		die ("<b>Message de MySQL :</b> " . mysql_error($connexion));
	}
 }
 
 // Recherche de l'objet suivant 
 function ObjetSuivant ($resultat) {
	return mysql_fetch_object ($resultat);
 }
 ?>