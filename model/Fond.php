<?php

class Fond
{
	// Attributs de la class Fond
	public $id;
	public $date;
	public $resultat;

	// Constructeur de la class Fond
	public function __construct($id, $dt, $rslt)
	{
		$this->id = $id;
		$this->date = $dt;
		$this->resultat = $rslt;
	}
}

?>