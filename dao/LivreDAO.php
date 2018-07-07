<?php

///////////////////////////////////////////////////////////////////////////////////////////////
// Création classe livre DAO /////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
class LivreDAO extends BASEdao 
{
	
	// Fonction SAUVEGARDE ////////////////////////////////////////////////////////////////////
	public function save($livre) 
	{
		$requete = "INSERT INTO livre VALUES ('$livre->isbn','$livre->codeTheme','$livre->titre');";		// Requête mySQL
		$result = $this->database->query($requete);																	// Envoie de la requête à la BDD
		return $this->testErreur($result);																			// Gestion des erreurs	
	}
		
	
	// Fonction SUPPRIMER ////////////////////////////////////////////////////////////////////	
	public function delete($livre) 
	{
		$requete = "DELETE FROM livre where IsbnLivre='$livre->isbn';";
		$result = $this->database->query($requete);
		return $this->testErreur($result);	
	}
	

	// Fonction MODIFIER données livre /////////////////////////////////////////////////////
	public function modify($new) 
	{
		$requete = "UPDATE livre set codTheme = '$new->codeTheme', titreLivre = '$new->titre'  
					where IsbnLivre = '$new->isbn';";
		$result = $this->database->query($requete);
		return $this->testErreur($result);
	}
	

	// Fonction AFFICHAGE de livre ///////////////////////////////////////////////////////
	public function display_List() 
	{	
		$requete = 'SELECT * FROM livre';																			// Requête mySQL
		$result = $this->database->query($requete);																	// Envoie de la requête à la BDD																						// Création de la collection Auteur => affichage tableau
		
		// Si pas d'erreur
		if ($this->testErreur($result) == "") 
		{
			$livres = array();	
			// Parcours du tableau Livre
			while ($utilEnBase = $result->fetch(PDO::FETCH_OBJ)) 
			{
				$livres[] = new Livre($utilEnBase->IsbnLivre, $utilEnBase->codTheme, $utilEnBase->titreLivre);
			}
		}
		else $livres = $this->testErreur($result);
		// Affichage du tableau
		return $livres;
	}	


	// Fonction RECHERCHE et AFFICHAGE livre  ///////////////////////////////////////////////////
	public function search($saisie) 
	{	
		$requete = "SELECT * FROM livre WHERE IsbnLivre LIKE '%$saisie%' OR codTheme LIKE '%$saisie%' OR titreLivre LIKE '%$saisie%' ";		// Requête mySQL
		$result = $this->database->query($requete);																	// Envoie de la requête à la BDD																						// Création de la collection Auteur => affichage tableau
		
		// Si pas d'erreur
		if ($this->testErreur($result) == "") 
		{
			$livres = array();	
			// Parcours du tableau Livre
			while ($utilEnBase = $result->fetch(PDO::FETCH_OBJ)) 
			{
				$livres[] = new Livre($utilEnBase->IsbnLivre, $utilEnBase->codTheme, $utilEnBase->titreLivre);
			}
		}
		else $livres = $this->testErreur($result);
		// Affichage du tableau
		return $livres;
	}	


	// Fonction RECHERCHE et AFFICHAGE livre from THEME ///////////////////////////////////////////////////
	public function search_from_theme($code) 
	{	
		$requete = "SELECT * FROM livre WHERE codTheme='$code' ";													// Requête mySQL
		$result = $this->database->query($requete);																	// Envoie de la requête à la BDD																						// Création de la collection Auteur => affichage tableau
		
		// Si pas d'erreur
		if ($this->testErreur($result) == "") 
		{
			$livres = array();	
			// Parcours du tableau Livre
			while ($utilEnBase = $result->fetch(PDO::FETCH_OBJ)) 
			{
				$livres[] = new Livre($utilEnBase->IsbnLivre, $utilEnBase->codTheme, $utilEnBase->titreLivre);
			}
		}
		else $livres = $this->testErreur($result);
		// Affichage du tableau
		return $livres;
	}	

	
}


?>