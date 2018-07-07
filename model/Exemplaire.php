<?php

class Exemplaire
{
	// Attributs de la class Exemplaire
	public $numEX;
	public $codeBIBLIO;
	public $codeEMPL;
	public $isbn;
	public $codeEXEMPLAIRE;
	public $commentEXEMPL;
	public $dispo;

	// Constructeur de la class Exemplaire
	public function __construct($numex, $codebiblio, $codeempl, $isb, $codeexemplaire, $commentexempl, $disp)
	{
		$this->numEX = $numex;
		$this->codeBIBLIO = $codebiblio;
		$this->codeEMPL = $codeempl;
		$this->isbn = $isb;
		$this->codeEXEMPLAIRE = $codeexemplaire;
		$this->commentEXEMPL = $commentexempl;
		$this->dispo = $disp;
	}
}

?>