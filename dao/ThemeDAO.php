<?php

///////////////////////////////////////////////////////////////////////////////////////////////
// Création classe Theme DAO /////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
class ThemeDAO extends BASEdao 
{
	
	// Fonction SAUVEGARDE ////////////////////////////////////////////////////////////////////
	public function save($theme) 
	{
		$requete = "INSERT INTO theme VALUES ('$theme->code','$theme->libel','$theme->description');";		// Requête mySQL
		$result = $this->database->query($requete);																	// Envoie de la requête à la BDD
		return $this->testErreur($result);																			// Gestion des erreurs	
	}
		
	
	// Fonction SUPPRIMER ////////////////////////////////////////////////////////////////////	
	public function delete($theme) 
	{
		$requete = "DELETE FROM theme where codTheme='$theme->code';";
		$result = $this->database->query($requete);
		return $this->testErreur($result);	
	}
	

	// Fonction MODIFIER données theme /////////////////////////////////////////////////////
	public function modify($new) 
	{
		$requete = "UPDATE theme set libelTheme = '$new->libel', descripTheme = '$new->description'  
					where codTheme = '$new->code';";
		$result = $this->database->query($requete);
		return $this->testErreur($result);
	}
	

	// Fonction AFFICHAGE de theme ///////////////////////////////////////////////////////
	public function display_List() 
	{	
		$requete = 'SELECT * FROM theme';																			// Requête mySQL
		$result = $this->database->query($requete);																	// Envoie de la requête à la BDD																						// Création de la collection Auteur => affichage tableau
		
		// Si pas d'erreur
		if ($this->testErreur($result) == "") 
		{
			$themes = array();	
			// Parcours du tableau theme
			while ($utilEnBase = $result->fetch(PDO::FETCH_OBJ)) 
			{
				$themes[] = new Theme($utilEnBase->codTheme, $utilEnBase->libelTheme, $utilEnBase->descripTheme);
			}
		}
		else $themes = $this->testErreur($result);
		// Affichage du tableau
		return $themes;
	}	

	// Fonction RECHERCHE et AFFICHAGE theme  ///////////////////////////////////////////////////
	public function search($saisie) 
	{	
		$requete = "SELECT * FROM theme WHERE codTheme LIKE '%$saisie%' OR libelTheme LIKE '%$saisie%' OR descripTheme LIKE '%$saisie%' ";		// Requête mySQL
		$result = $this->database->query($requete);																	// Envoie de la requête à la BDD																						// Création de la collection Auteur => affichage tableau
		
		// Si pas d'erreur
		if ($this->testErreur($result) == "") 
		{
			$themes = array();	
			// Parcours du tableau theme
			while ($utilEnBase = $result->fetch(PDO::FETCH_OBJ)) 
			{
				$themes[] = new Theme($utilEnBase->codTheme, $utilEnBase->libelTheme, $utilEnBase->descripTheme);
			}
		}
		else $themes = $this->testErreur($result);
		// Affichage du tableau
		return $themes;
	}	
	
}


?>