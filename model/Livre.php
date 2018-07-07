<?php

class Livre
{
	// Attributs de la class livre
	public $isbn;
	public $codeTheme;
	public $titre;

	// Constructeur de la class livre
	public function __construct($isbn, $ctheme, $ttr)
	{
		$this->isbn = $isbn;
		$this->codeTheme = $ctheme;
		$this->titre = $ttr;
	}
}

?>