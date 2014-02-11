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

$req = 'SELECT * FROM admin';
$resultSelect = ExecRequete ($req, $connexion);

$row = ObjetSuivant($resultSelect);
$result_id = $row->Identifiant;
$result_mdp = $row->MdP;


if(isset($result_id) AND ($result_mdp))
{
	if(isset($_POST['id']) AND (md5($_POST['mdp'])))
	{
		if($result_id == $_POST['id'] AND $result_mdp == md5($_POST['mdp']))
		{
			session_start();
			$_SESSION['admin']=true;
			header('Location:admin/edit_projet.php');
		}
		else
		{
			echo 'Mauvais identifiant et/où mot de passe '. md5($_POST['mdp']) .' // '. $result_mdp;
		}
	}
}
else
{
	echo 'Impossible de se connecter à la base de données';
}

?>

<a href=".">Retour à l'accueil</a>