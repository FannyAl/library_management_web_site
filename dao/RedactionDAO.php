<?php

///////////////////////////////////////////////////////////////////////////////////////////////
// Création classe Redaction DAO /////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
class RedactionDAO extends BASEdao 
{
	
	// Fonction SAUVEGARDE ////////////////////////////////////////////////////////////////////
	public function save($redaction) 
	{
		$requete = "INSERT INTO redaction VALUES ('$redaction->isbn','$redaction->cAuteur');";		// Requête mySQL
		$result = $this->database->query($requete);																	// Envoie de la requête à la BDD
		return $this->testErreur($result);																			// Gestion des erreurs	
	}
		
	
	// Fonction SUPPRIMER ////////////////////////////////////////////////////////////////////	
	public function delete($redaction) 
	{
		$requete = "DELETE FROM redaction where IsbnLivre='$redaction->isbn';";
		$result = $this->database->query($requete);
		return $this->testErreur($result);	
	}
	

	// Fonction MODIFIER données Auteur /////////////////////////////////////////////////////
	public function modify($new) 
	{
		$requete = "UPDATE redaction set codAuteur = '$new->cAuteur' where IsbnLivre = '$new->isbn';";
		$result = $this->database->query($requete);
		return $this->testErreur($result);
	}
	

	// Fonction AFFICHAGE de l'redaction ///////////////////////////////////////////////////////
	public function display_List() 
	{	
		$requete = 'SELECT * FROM redaction';																			// Requête mySQL
		$result = $this->database->query($requete);																	// Envoie de la requête à la BDD																						// Création de la collection Auteur => affichage tableau
		
		// Si pas d'erreur
		if ($this->testErreur($result) == "") 
		{
			$redactions = array();	
			// Parcours du tableau Redaction
			while ($utilEnBase = $result->fetch(PDO::FETCH_OBJ)) 
			{
				$redactions[] = new Redaction($utilEnBase->IsbnLivre, $utilEnBase->codAuteur);
			}
		}
		else $redactions = $this->testErreur($result);
		// Affichage du tableau
		return $redactions;
	}	

	// Fonction RECHERCHE et AFFICHAGE redaction  ///////////////////////////////////////////////////
	public function search($saisie) 
	{	
		$requete = "SELECT * FROM redaction WHERE IsbnLivre LIKE '%$saisie%' OR codAuteur LIKE '%$saisie%' ";		// Requête mySQL
		$result = $this->database->query($requete);																	// Envoie de la requête à la BDD																						// Création de la collection Auteur => affichage tableau
		
		// Si pas d'erreur
		if ($this->testErreur($result) == "") 
		{
			$redactions = array();	
			// Parcours du tableau Redaction
			while ($utilEnBase = $result->fetch(PDO::FETCH_OBJ)) 
			{
				$redactions[] = new Redaction($utilEnBase->IsbnLivre, $utilEnBase->codAuteur);
			}
		}
		else $redactions = $this->testErreur($result);
		// Affichage du tableau
		return $redactions;
	}	


	// Fonction RECHERCHE Code Redaction avec Isbn ///////////////////////////////////////////////////
	public function search_codAuteur($isbn) 
	{	
		$requete = "SELECT codAuteur FROM redaction WHERE IsbnLivre='$isbn' ";		// Requête mySQL
		$result = $this->database->query($requete);																	// Envoie de la requête à la BDD																						// Création de la collection Auteur => affichage tableau
		
		// Si pas d'erreur
		if ($this->testErreur($result) == "") 
		{
			$redactions = array();	
			// Parcours du tableau Redaction
			while ($utilEnBase = $result->fetch(PDO::FETCH_OBJ)) 
			{
				$redactions[] = new Redaction($utilEnBase->IsbnLivre, $utilEnBase->codAuteur);
			}
		}
		else $redactions = $this->testErreur($result);
		// Affichage du tableau
		return $redactions;
	}	
	
}


?>