<?php

// Déclaration de la variable d'insertion du code html /////////////////////////////////////////////
$strHtml = "";

// Si action nouveau Login => mot de passe /////////////////////////////////////////////////////////
if (isset($_REQUEST["login"])) 
{	
	// Création d'un nouvel utilisateur
	$utilisateur = new Utilisateur($_REQUEST["login"], $_REQUEST["password"], $_REQUEST["niveau"]);

	// Création d'une nouvelle connexion utilisateur
	$utilisateurDAO = new UtilisateurDAO();
	// Enregistrement sur la base de données
	$retour = $utilisateurDAO->save($utilisateur);
	

		// Affichage notification informant de l'ajout
		if ($retour) 
		{
			$strAlert =  "<div id = 'myAlert' class = 'alert alert-success'>
							<a href = '#' class = 'close' data-dismiss = 'alert'>&times;</a>
							<strong>OK !</strong> Ajout effectué.
						</div>";
		} 
		else 
		{
			$strAlert = "<div id = 'myAlert' class = 'alert alert-danger'>
							<a href = '#' class = 'close' data-dismiss = 'alert'>&times;</a>
							<strong>Problème !</strong> Ajout non effectué.
						</div>";
		}
	
}

?>
