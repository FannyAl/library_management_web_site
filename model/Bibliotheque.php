<?php

class Bibliotheque
{
	// Attributs de la class bibli
	public $code;
	public $libel;
	public $adresse;

	// Constructeur de la class bibli
	public function __construct($cod, $lib, $adr)
	{
		$this->code = $cod;
		$this->libel = $lib;
		$this->adresse = $adr;
	}
}

?>