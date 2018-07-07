<?php

class Theme
{
	// Attributs de la class Thème
	public $code;
	public $libel;
	public $description;

	// Constructeur de la class Thème
	public function __construct($cod, $lbl, $descrip)
	{
		$this->code = $cod;
		$this->libel = $lbl;
		$this->description = $descrip;
	}
}

?>