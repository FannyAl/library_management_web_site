<?php

class ResultatFond
{
	// Attributs de la class résultat recherche avancée fonds
	// LIVRE
	public $isbn;
	public $codeTheme;
	public $titre;
	// AUTEUR
	public $codeAuteur;
	public $nomAuteur;
	public $prenomAuteur;
	// THEME
	public $libelTheme;
	// BIBLIOTHEQUE
	public $codeBiblio;
	public $libelBiblio;

	// Constructeur de la class résultat recherche avancée fonds
	public function __construct($Isbn, $codtheme, $titreLivre, $codAuteur, $nm, $prenm, $lblTheme, $codBiblio, $lblBiblio )
	{
		// LIVRE
		$this->isbn = $isbn;
		$this->codeTheme = $codtheme;
		$this->titre = $titreLivre;
		// AUTEUR
		$this->codeAuteur = $codAuteur;
		$this->nomAuteur = $nm;
		$this->prenomAuteur = $prenom;
		// THEME
		$this->libelTheme = $lblTheme;
		// BIBLIOTHEQUE
		$this->codeBiblio = $codBiblio;
		$this->libelBiblio = $lblBiblio;
	}
}

?>