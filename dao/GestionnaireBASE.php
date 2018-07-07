<?php

// Classe gestionnaire de base /////////////////////////////////////////////////////////////////////////////
class GestionnaireBASE
{
	// Déclaration des attributs ///////////////////////////////////////////////////////////////////////////
	private static $instance;
	public $database;

	// Constructeur de la classe Gestionnaire de base //////////////////////////////////////////////////////
	private function __construct()
	{
		// Connexion à la base de données
		$url = "sqlsrv:server=".BDD_HOST.";Database=".BDD_BD;

		$user = BDD_USER;
		$password = BDD_PASSWORD;

		try 
		{
			$this->database = new PDO($url, $user, $password);
		} 
		catch (PDOException $e) 
		{
			die( 'Connexion échouée : ' . $e->getMessage());
		}
	}


	// Fonction de récupération de données
	public static function getInstance()
	{
		if (!isset(self::$instance))						// Vérification exitence de la variable
		{
			self::$instance = new GestionnaireBASE();	// Création d'une nouvelle intance de connexion (self => intance classe static)
		}
		return self::$instance;
	}


	// Fonction gestion des erreurs si problème de connexion
	protected function testErreur($result)
	{
		if (PDO::errorInfo($result)) 
		{
			$cause = "Standard Message  : " . $result->getMessage() . "<br>" .
		    	 "User Info  : " . $result->getUserInfo() . "<br>" .
		    	 "Debug Info : " . $result->getDebugInfo() . "<br>";

		    echo $cause;
		    return false;
		} 
		else 
		{
			return true;
		}
		
	}

}


?>