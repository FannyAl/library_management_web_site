<?php

// Parametres pour SQL SERVER 2012 /////////////////////////////////////////////////////////////////////
define ('BDD_HOST', "(local)\SQLEXPRESS");  
define ('BDD_USER', "sa");						// Avec connexion identifiant
define ('BDD_PASSWORD', "afpacentre");			// Avec connexion mot de passe
define ('BDD_BD', "Gestion_des_Bibliotheques");
 

// fonction chargement des paramètres de la base de données ////////////////////////////////////////////
function __autoload($class_name) 
{

	// Ajout extension dans tableau
	$directorys = array('../','../dao/','../model/');


	foreach($directorys as $directory)
	{
		//see if the file class exsists 
		if(file_exists($directory.$class_name . '.php'))
		{
			require_once($directory.$class_name . '.php');
			return;
		}
	}
}


?>