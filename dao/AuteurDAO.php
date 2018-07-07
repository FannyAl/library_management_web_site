<?php

///////////////////////////////////////////////////////////////////////////////////////////////
// Création classe Auteur DAO /////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
class AuteurDAO extends BASEdao 
{
	
	// Fonction SAUVEGARDE ////////////////////////////////////////////////////////////////////
	public function save($auteur) 
	{
		$requete = "INSERT INTO auteur VALUES ('$auteur->code','$auteur->nom','$auteur->prenom');";					// Requête mySQL
		$result = $this->database->query($requete);																	// Envoie de la requête à la BDD
		return $this->testErreur($result);																			// Gestion des erreurs	
	}
		
	
	// Fonction SUPPRIMER ////////////////////////////////////////////////////////////////////	
	public function delete($auteur) 
	{
		$requete = "DELETE FROM auteur where codAuteur='$auteur->code';";
		$result = $this->database->query($requete);
		return $this->testErreur($result);	
	}
	

	// Fonction MODIFIER données Auteur /////////////////////////////////////////////////////
	public function modify($new) 
	{
		$requete = "UPDATE auteur set nomAuteur = '$new->nom', prenomAuteur = '$new->prenom'  
					where codAuteur = '$new->code';";
		$result = $this->database->query($requete);
		return $this->testErreur($result);
	}
	

	// Fonction AFFICHAGE de l'auteur ///////////////////////////////////////////////////////
	public function display_List() 
	{	
		$requete = 'SELECT * FROM auteur';																			// Requête mySQL
		$result = $this->database->query($requete);																	// Envoie de la requête à la BDD																						// Création de la collection Auteur => affichage tableau
		
		// Si pas d'erreur
		if ($this->testErreur($result) == "") 
		{
			$auteurs = array();	
			// Parcours du tableau Auteur
			while ($utilEnBase = $result->fetch(PDO::FETCH_OBJ)) 
			{
				$auteurs[] = new Auteur($utilEnBase->codAuteur, $utilEnBase->nomAuteur, $utilEnBase->prenomAuteur);
			}
		}
		else $auteurs = $this->testErreur($result);
		// Affichage du tableau
		return $auteurs;
	}	

	// Fonction RECHERCHE et AFFICHAGE auteur  ///////////////////////////////////////////////////
	public function search($saisie) 
	{	
		$requete = "SELECT * FROM auteur WHERE codAuteur LIKE '%$saisie%' OR nomAuteur LIKE '%$saisie%' OR prenomAuteur LIKE '%$saisie%' ";		// Requête mySQL
		$result = $this->database->query($requete);																	// Envoie de la requête à la BDD																						// Création de la collection Auteur => affichage tableau
		
		// Si pas d'erreur
		if ($this->testErreur($result) == "") 
		{
			$auteurs = array();	
			// Parcours du tableau Auteur
			while ($utilEnBase = $result->fetch(PDO::FETCH_OBJ)) 
			{
				$auteurs[] = new Auteur($utilEnBase->codAuteur, $utilEnBase->nomAuteur, $utilEnBase->prenomAuteur);
			}
		}
		else $auteurs = $this->testErreur($result);
		// Affichage du tableau
		return $auteurs;
	}	
	

	// Fonction RECHERCHE et AFFICHAGE auteur from ISBN  ///////////////////////////////////////////////////
	public function search_from_isbn($code) 
	{	
		$requete = "SELECT nomAuteur prenomAuteur FROM auteur WHERE codAuteur ='code' ";		// Requête mySQL
		$result = $this->database->query($requete);																	// Envoie de la requête à la BDD																						// Création de la collection Auteur => affichage tableau
		
		// Si pas d'erreur
		if ($this->testErreur($result) == "") 
		{
			$auteurs = array();	
			// Parcours du tableau Auteur
			while ($utilEnBase = $result->fetch(PDO::FETCH_OBJ)) 
			{
				$auteurs[] = new Auteur($utilEnBase->codAuteur, $utilEnBase->nomAuteur, $utilEnBase->prenomAuteur);
			}
		}
		else $auteurs = $this->testErreur($result);
		// Affichage du tableau
		return $auteurs;
	}	
}


?>