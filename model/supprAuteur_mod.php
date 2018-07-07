<?php

// Déclaration de la variable d'insertion du code html /////////////////////////////////////////////
$strHtml = "";
$strAlert = "";

// Si l'auteur existe => supprimer l'auteur ////////////////////////////////////////////////////////
if (isset($_REQUEST["code"])) 
{	
	// Récupération des données auteur
	$code = $_REQUEST["code"];
	$nom = @$_REQUEST["nom"];
	$prenom = @$_REQUEST["prenom"];

	$auteur = new auteur($code, $nom, $prenom);

	
	$auteurDAO = new AuteurDAO();
	$retour = $auteurDAO->delete($auteur);
	
	if ($retour) 
	{
		$strAlert =  "<div id = 'myAlert' class = 'alert alert-success'>
						<a href = '#' class = 'close' data-dismiss = 'alert'>&times;</a>
						<strong>OK !</strong> Suppression réussie.
					</div>";
	} 

	else 
	{
		$strAlert = "<div id = 'myAlert' class = 'alert alert-danger'>
						<a href = '#' class = 'close' data-dismiss = 'alert'>&times;</a>
						<strong>Problème !</strong> Suppression non effectuée.
					</div>";
	}

}

?>

