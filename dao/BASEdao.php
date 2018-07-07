<?php

// Création classe BaseDAO : chemin d'accès des données entre les objets et la BDD //////////////////////////////
// Gestion de la connexion //////////////////////////////////////////////////////////////////////////////////////
// Pattern Singleton => redéfinition du constructeur en accès privé
// Une classe abstraite ne peut être instancier / même visibilité (pas privée) / associée à des méthodes communes
abstract class BASEdao
{
	// Déclaration de l'attribut database avec une valeur par défault ///////////////////////////////////////////
	protected $database = null; 		// PDO : stocker dans la classe une instance de PDO


	// Constructeur de la classe BaseDAO par défault ////////////////////////////////////////////////////////////
	function __construct()
	{
		$this->database = GestionnaireBASE::getInstance()->database;
	}


	// Fonction testErreur => vérification résultat (erreur)
	protected function testErreur($result)
	{
		// Vérification des erreurs 
		if (!$result) 
		{
			return $this->database->errorInfo()[2];
		}
		
		else return "";
	}
}

?>