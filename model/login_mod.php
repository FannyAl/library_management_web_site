<?php

// Action saisie formulaire LOGIN /////////////////////////////////////
if (isset($_REQUEST["login"])) 
{
	// Récupération des données saisies
	$login = $_REQUEST["login"];
	$password = $_REQUEST["password"];
	
	// Création d'une nouvelle connexion Utilisateur
	$utilisateurDao = new UtilisateurDao();
	$ok = $utilisateurDao->validate_login($login, $password);
	
	// Message de confirmation connexion
	echo "OK : ".$ok;
}

?>