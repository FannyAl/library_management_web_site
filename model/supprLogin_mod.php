<?php

// Déclaration de la variable d'insertion du code html /////////////////////////////////////////////
$strHtml = "";
$strAlert = "";

// Si le login existe => supprimer le login ////////////////////////////////////////////////////////
if (isset($_REQUEST["login"])) 
{	

	$utilisateur = new Utilisateur($_REQUEST["login"], "", "");

	
	$utilisateurDAO = new UtilisateurDAO();
	$retour = $utilisateurDAO->delete($utilisateur);
	
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

