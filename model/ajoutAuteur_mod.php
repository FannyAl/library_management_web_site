<?php

// Déclaration de la variable d'insertion du code html /////////////////////////////////////////////
$strAlert = "";

// Si action nouvel auteur ////////////////////////////////////////////////////////////////////////
if (isset($_REQUEST["code"])) 
{	
	// Création d'un nouvel auteur
	$auteur = new Auteur($_REQUEST["code"], $_REQUEST["nom"], $_REQUEST["prenom"]);

	// Enregistrement sur la base de données
	$auteurDAO = new AuteurDAO();
	$retour = $auteurDAO->save($auteur);
	

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
