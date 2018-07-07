<?php

class Redaction
{
	// Attributs de la class Rédaction
	public $IsbnLivre;
	public $codAuteur;

	// Constructeur de la class Auteur
	public function __construct($isbn, $codAUT)
	{
		$this->IsbnLivre = $isbn;
		$this->codAuteur = $codAUT;
	}
}

?>