<?php

///////////////////////////////////////////////////////////////////////////////////////////////
// Création classe Fond DAO /////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
class FondDAO extends BASEdao 
{
	
	// Fonction SAUVEGARDE résultats //////////////////////////////////////////////////////////
	public function save($resultat) 
	{
		$requete = "INSERT INTO fond VALUES ('$resultat->id','$resultat->date','$resultat->resultat');";					// Requête mySQL
		$result = $this->database->query($requete);																	// Envoie de la requête à la BDD
		return $this->testErreur($result);																			// Gestion des erreurs	
	}
		
	
	// Fonction SUPPRIMER ////////////////////////////////////////////////////////////////////	
	public function delete($resultat) 
	{
		$requete = "DELETE FROM fond where id='$resultat->id';";
		$result = $this->database->query($requete);
		return $this->testErreur($result);	
	}
	

	// Fonction MODIFIER données Fond /////////////////////////////////////////////////////
	public function modify($new) 
	{
		$requete = "UPDATE fond set dateRech = '$new->date', resultatRech = '$new->resultat'  
					where id = '$new->id';";
		$result = $this->database->query($requete);
		return $this->testErreur($result);
	}
	

	// Fonction AFFICHAGE de fond ///////////////////////////////////////////////////////
	public function display_List() 
	{	
		$requete = 'SELECT * FROM fond';																			// Requête mySQL
		$result = $this->database->query($requete);																	// Envoie de la requête à la BDD																						// Création de la collection Auteur => affichage tableau
		
		// Si pas d'erreur
		if ($this->testErreur($result) == "") 
		{
			$fonds = array();	
			// Parcours du tableau Fond
			while ($utilEnBase = $result->fetch(PDO::FETCH_OBJ)) 
			{
				$fonds[] = new Fond($utilEnBase->id, $utilEnBase->dateRech, $utilEnBase->resultatRech);
			}
		}
		else $fonds = $this->testErreur($result);
		// Affichage du tableau
		return $fonds;
	}	

	// Fonction RECHERCHE et AFFICHAGE fond  ///////////////////////////////////////////////////
	public function search($saisie) 
	{	
		$requete = "SELECT * FROM fond WHERE id LIKE '%$saisie%' OR dateRech LIKE '%$saisie%' OR resultatRech LIKE '%$saisie%' ";		// Requête mySQL
		$result = $this->database->query($requete);																	// Envoie de la requête à la BDD																						// Création de la collection Auteur => affichage tableau
		
		// Si pas d'erreur
		if ($this->testErreur($result) == "") 
		{
			$fonds = array();	
			// Parcours du tableau Fond
			while ($utilEnBase = $result->fetch(PDO::FETCH_OBJ)) 
			{
				$fonds[] = new Fond($utilEnBase->id, $utilEnBase->dateRech, $utilEnBase->resultatRech);
			}
		}
		else $fonds = $this->testErreur($result);
		// Affichage du tableau
		return $fonds;
	}	
	
}


?>