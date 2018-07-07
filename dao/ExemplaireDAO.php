<?php

///////////////////////////////////////////////////////////////////////////////////////////////
// Création classe Exemplaire DAO /////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
class ExemplaireDAO extends BASEdao 
{
	
	// Fonction SAUVEGARDE ////////////////////////////////////////////////////////////////////
	public function save($exemplaire) 
	{
		$requete = "INSERT INTO exemplaire VALUES ('$exemplaire->numEX','$exemplaire->codeBIBLIO','$exemplaire->codeEMPL','$exemplaire->isbn',		
													'$exemplaire->codeEXEMPLAIRE','$exemplaire->commentEXEMPL', '$exemplaire->dispo',);"; 		// Requête mySQL
		$result = $this->database->query($requete);																	// Envoie de la requête à la BDD
		return $this->testErreur($result);																			// Gestion des erreurs	
	}
		
	
	// Fonction SUPPRIMER ////////////////////////////////////////////////////////////////////	
	public function delete($exemplaire) 
	{
		$requete = "DELETE FROM exemplaire where numExemplaire='$exemplaire->numEX';";
		$result = $this->database->query($requete);
		return $this->testErreur($result);	
	}
	

	// Fonction MODIFIER données Exemplaire /////////////////////////////////////////////////////
	public function modify($new) 
	{
		$requete = "UPDATE exemplaire SET codBibliotheque = '$new->codeBIBLIO', codEmplacement = '$new->codeEMPL', IsbnLivre = '$new->isbn', 
										  codExemplaire = '$new->codeEXEMPLAIRE', commentExemplaire = '$new->commentEXEMPL', disponible = '$new->dispo',
					where numExemplaire = '$new->numEX';";
		$result = $this->database->query($requete);
		return $this->testErreur($result);
	}
	

	// Fonction AFFICHAGE de l'exemplaire ///////////////////////////////////////////////////////
	public function display_List() 
	{	
		$requete = 'SELECT * FROM exemplaire';																			// Requête mySQL
		$result = $this->database->query($requete);																	// Envoie de la requête à la BDD																						// Création de la collection Auteur => affichage tableau
		
		// Si pas d'erreur
		if ($this->testErreur($result) == "") 
		{
			$exemplaires = array();	
			// Parcours du tableau Exemplaire
			while ($utilEnBase = $result->fetch(PDO::FETCH_OBJ)) 
			{
				$exemplaires[] = new Exemplaire($utilEnBase->numExemplaire, $utilEnBase->codBibliotheque, $utilEnBase->codEmplacement, 
												$utilEnBase->IsbnLivre, $utilEnBase->codExemplaire, $utilEnBase->commentExemplaire, $utilEnBase->disponible);
			}
		}
		else $exemplaires = $this->testErreur($result);
		// Affichage du tableau
		return $exemplaires;
	}	

	// Fonction RECHERCHE et AFFICHAGE exemplaire  ///////////////////////////////////////////////////
	public function search($saisie) 
	{	
		$requete = "SELECT * FROM exemplaire WHERE numExemplaire LIKE '%$saisie%' OR codBibliotheque LIKE '%$saisie%' OR codEmplacement LIKE '%$saisie%' OR	
												IsbnLivre LIKE '%$saisie%' OR codExemplaire LIKE '%$saisie%' OR commentExemplaire LIKE '%$saisie%' OR disponible LIKE '%$saisie%' ";	// Requête mySQL
		$result = $this->database->query($requete);																	// Envoie de la requête à la BDD																						// Création de la collection Auteur => affichage tableau
		
		// Si pas d'erreur
		if ($this->testErreur($result) == "") 
		{
			$exemplaires = array();	
			// Parcours du tableau Exemplaire
			while ($utilEnBase = $result->fetch(PDO::FETCH_OBJ)) 
			{
				$exemplaires[] = new Exemplaire($utilEnBase->numExemplaire, $utilEnBase->codBibliotheque, $utilEnBase->codEmplacement, 
												$utilEnBase->IsbnLivre, $utilEnBase->codExemplaire, $utilEnBase->commentExemplaire, $utilEnBase->disponible);
			}
		}
		else $exemplaires = $this->testErreur($result);
		// Affichage du tableau
		return $exemplaires;
	}	


	// Fonction RECHERCHE et AFFICHAGE exemplaire from LIVRE  ///////////////////////////////////////////////
	public function search_from_livre($codeLivre) 
	{	
		$requete = "SELECT * FROM exemplaire WHERE IsbnLivre='$codeLivre' ";	// Requête mySQL
		$result = $this->database->query($requete);																	// Envoie de la requête à la BDD																						// Création de la collection Auteur => affichage tableau
		
		// Si pas d'erreur
		if ($this->testErreur($result) == "") 
		{
			$exemplaires = array();	
			// Parcours du tableau Exemplaire
			while ($utilEnBase = $result->fetch(PDO::FETCH_OBJ)) 
			{
				$exemplaires[] = new Exemplaire($utilEnBase->numExemplaire, $utilEnBase->codBibliotheque, $utilEnBase->codEmplacement, 
												$utilEnBase->IsbnLivre, $utilEnBase->codExemplaire, $utilEnBase->commentExemplaire, $utilEnBase->disponible);
			}
		}
		else $exemplaires = $this->testErreur($result);
		// Affichage du tableau
		return $exemplaires;
	}	
	
}


?>