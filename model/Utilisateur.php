<?php

class Utilisateur 
{

	// Attributs de la classe Utilisteur
	public $login;	
	public $password;
	public $niveau;

	// Constructeur de la classe Utilisateur
	public function __construct($login, $password, $niv) 
	{
		$this->login = $login;
		$this->password = $password;
		$this->niveau = $niv;
	}
}

?>