<?php

class Auteur
{
	// Attributs de la class Auteur
	public $code;
	public $nom;
	public $prenom;

	// Constructeur de la class Auteur
	public function __construct($cod, $nm, $prnom)
	{
		$this->code = $cod;
		$this->nom = $nm;
		$this->prenom = $prnom;
	}
}

?>