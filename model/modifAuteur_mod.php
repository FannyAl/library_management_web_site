<?php

// Déclaration de la variable d'insertion du code html /////////////////////////////////////////////
$strHtml = "";
$code = "";
$strAlert = "";

// Si le code n'existe pas => changer le mot de passe //////////////////////////////////////////////////
if (!isset($_REQUEST["affiche"])) 
{
	if (isset($_REQUEST["code"])) 
	{
		// Récupération des données auteur
		$code = $_REQUEST["code"];
		$nom = @$_REQUEST["nom"];
		$prenom = @$_REQUEST["prenom"];
		
		// Changement des données
		$auteur_apres = new Auteur($code, $nom, $prenom);

		// Création du nouvel auteur
		$auteurDAO = new AuteurDAO();
		$retour = $auteurDAO->modify($auteur_apres);
		
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

// Si mot de passe symilaire afficher les données de l'auteur tel qu'il existe
else 
{
	if (isset($_REQUEST["code"])) 
	{
		$code = $_REQUEST["code"];
		$nom = @$_REQUEST["nom"];
		$prenom = @$_REQUEST["prenom"];
	}
}

?>