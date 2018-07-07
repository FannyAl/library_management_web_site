<?php

// Déclaration de la variable d'insertion du code html /////////////////////////////////////////////
$strHtml = "";
$login = "";

// Si mdp n'existe pas => changer le mot de passe //////////////////////////////////////////////////
if (!isset($_REQUEST["affiche"])) 
{
	if (isset($_REQUEST["login"])) 
	{
		// Récupération des données utilisateur
		$login = $_REQUEST["login"];
		$password = $_REQUEST["password"];
		$newpassword = $_REQUEST["newpassword"];
		
		// Création d'un nouvel utilisateur
		$utilisateur = new Utilisateur($_REQUEST["login"], $_REQUEST["password"], 0);

		// Création d'une nouvelle connexion utilisateur
		$utilisateurDAO = new UtilisateurDAO();
		$retour = $utilisateurDAO->modif_psw($utilisateur, $newpassword);
		
		// Affichage notification informant de la suppression
		if ($retour) 
		{
			$strAlert =  "<div id = 'myAlert' class = 'alert alert-success'>
							<a href = '#' class = 'close' data-dismiss = 'alert'>&times;</a>
							<strong>OK !</strong> Modification effectuée.
						</div>";
		} 
		else 
		{
			$strAlert = "<div id = 'myAlert' class = 'alert alert-danger'>
							<a href = '#' class = 'close' data-dismiss = 'alert'>&times;</a>
							<strong>Problème !</strong> Modification non effectuée.
						</div>";
		}
		
	}
}

// Si mot de passe symilaire afficher le login tel qu'il existe
else 
{
	if (isset($_REQUEST["login"])) 
	{
		$login = $_REQUEST["login"];
	}
}

?>