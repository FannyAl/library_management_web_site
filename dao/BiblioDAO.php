<?php

///////////////////////////////////////////////////////////////////////////////////////////////
// Création classe Auteur DAO /////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
class BiblioDAO extends BASEdao 
{
	
	// Fonction SAUVEGARDE ////////////////////////////////////////////////////////////////////
	public function save($bibliotheque) 
	{
		$requete = "INSERT INTO bibliotheque VALUES ('$bibliotheque->code','$bibliotheque->libel','$bibliotheque->adresse');";		// Requête mySQL
		$result = $this->database->query($requete);																	// Envoie de la requête à la BDD
		return $this->testErreur($result);																			// Gestion des erreurs	
	}
		
	
	// Fonction SUPPRIMER ////////////////////////////////////////////////////////////////////	
	public function delete($bibliotheque) 
	{
		$requete = "DELETE FROM bibliotheque where codBibliotheque='$bibliotheque->code';";
		$result = $this->database->query($requete);
		return $this->testErreur($result);	
	}
	

	// Fonction MODIFIER données bibliotheque /////////////////////////////////////////////////////
	public function modify($new) 
	{
		$requete = "UPDATE bibliotheque set libelBibliotheque = '$new->libel', adrBibliotheque = '$new->adresse'  
					where codBibliotheque = '$new->code';";
		$result = $this->database->query($requete);
		return $this->testErreur($result);
	}
	

	// Fonction AFFICHAGE de bibliotheque ///////////////////////////////////////////////////////
	public function display_List() 
	{	
		$requete = 'SELECT * FROM bibliotheque';																			// Requête mySQL
		$result = $this->database->query($requete);																	// Envoie de la requête à la BDD																						// Création de la collection Auteur => affichage tableau
		
		// Si pas d'erreur
		if ($this->testErreur($result) == "") 
		{
			$bibliotheques = array();	
			// Parcours du tableau bibliotheque
			while ($utilEnBase = $result->fetch(PDO::FETCH_OBJ)) 
			{
				$bibliotheques[] = new Bibliotheque($utilEnBase->codBibliotheque, $utilEnBase->libelBibliotheque, $utilEnBase->adrBibliotheque);
			}
		}
		else $bibliotheques = $this->testErreur($result);
		// Affichage du tableau
		return $bibliotheques;
	}	

	// Fonction RECHERCHE et AFFICHAGE Bibliotheque  ///////////////////////////////////////////////////
	public function search($saisie) 
	{	
		$requete = "SELECT * FROM bibliotheque WHERE codBibliotheque LIKE '%$saisie%' OR libelBibliotheque LIKE '%$saisie%' OR adrBibliotheque LIKE '%$saisie%' ";		// Requête mySQL
		$result = $this->database->query($requete);																	// Envoie de la requête à la BDD																						// Création de la collection Auteur => affichage tableau
		
		// Si pas d'erreur
		if ($this->testErreur($result) == "") 
		{
			$bibliotheques = array();	
			// Parcours du tableau Bibliotheque
			while ($utilEnBase = $result->fetch(PDO::FETCH_OBJ)) 
			{
				$bibliotheques[] = new Bibliotheque($utilEnBase->codBibliotheque, $utilEnBase->libelBibliotheque, $utilEnBase->adrBibliotheque);
			}
		}
		else $bibliotheques = $this->testErreur($result);
		// Affichage du tableau
		return $bibliotheques;
	}	
	
}


?>