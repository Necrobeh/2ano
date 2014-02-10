<form method="post" action="log.php">
	<p><label for="id">Votre identifiant :</label><input type="text" name="id"/></p>
	<p><label for="mdp">mot de passe :</label><input type="password" name="mdp"/></p>
	<input type="submit" value="Envoyer"/>
</form>

<?php
 
include("BDD/Connect.php");
include("BDD/Connexion.php");
include("BDD/ExecRequete.php");

$connexion=Connexion($pServeur, $pNom, $pMotPasse, $pBase);

$req_id = 'SELECT identifiant FROM admin';
$result_id = ExecRequete ($req_id, $connexion);
$req_mdp = 'SELECT mdp FROM admin';
$result_mdp = ExecRequete ($req_mdp, $connexion);

if(isset($result_id) AND ($result_mdp))
{
	if(isset($_POST['id']) AND ($_POST['mdp']))
	{
		if($result_id == $_POST['id'] AND $result_mdp == $_POST['mdp'])
		{
		//Envoi vers le formulaire d'édition en tiny mce
		}
		else
		{
		echo 'Mauvais identifiant et/où mot de passe';
		}
	}
}
else
{
	echo 'Impossible de se connecter à la base de données';
}

?>

<a href=".">Retour à l'accueil</a>