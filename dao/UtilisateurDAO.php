<?php

///////////////////////////////////////////////////////////////////////////////////////////////
// Création classe Utilisateur DAO ////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
class UtilisateurDAO extends BASEdao 
{
	
	// Fonction SAUVEGARDE ////////////////////////////////////////////////////////////////////
	public function save($utilisateur) 
	{
		$requete = "INSERT INTO login VALUES ('$utilisateur->login','$utilisateur->password','$utilisateur->niveau');"; 	// Requête mySQL
		$result = $this->database->query($requete);																			// Envoie de la requête à la BDD
		return $this->testErreur($result);																					// Gestion des erreurs
	}
		

	// Fonction SUPPRIMER ////////////////////////////////////////////////////////////////////
	public function delete($utilisateur) 
	{
		$requete = "DELETE FROM login where login='$utilisateur->login';";						// Requête mySQL
		$result = $this->database->query($requete);												// Envoie de la requête à la BDD
		return $this->testErreur($result);														// Gestion des erreurs
	}
	

	// Fonction MODIFIER le mot de passe /////////////////////////////////////////////////////
	public function modif_psw($utilisateur, $new) 
	{
		$requete = "UPDATE login set mdp = '$new' where login = '$utilisateur->login';";		// Requête mySQL
		$result = $this->database->query($requete);												// Envoie de la requête à la BDD
		return $this->testErreur($result);														// Gestion des erreurs
	}
	

	// Fonction AFFICHAGE de l'Utilisateur ///////////////////////////////////////////////////
	public function display_List() 
	{	
		$requete = 'SELECT * FROM login';														// Requête mySQL
		$result = $this->database->query($requete);												// Envoie de la requête à la BDD
		
		// Si pas d'erreur
		if ($this->testErreur($result) == "") 
		{
			// Génere tableau
			$utilisateurs = array();																		// Création de la collection Utilisateur => affichage tableau
			while ($utilEnBase = $result->fetch(PDO::FETCH_OBJ)) 											// fetchRow() => Retourne une ligne de résultat MySQL sous la forme d'un tableau
			{
				$utilisateurs[] = new Utilisateur(en_UTF8($utilEnBase->login), en_UTF8($utilEnBase->mdp), en_UTF8($utilEnBase->niveau));
			}
			
		}
		else $utilisateurs = $this->testErreur($result);
		// Affichage du tableau
		return $utilisateurs;
	}
	

	// Fonction AUTHENTIFICATION de l'utilisateur //////////////////////////////////////////////
	public function validate_login($login, $password) 
	{
		$requete = "SELECT * FROM login where login = '" . $login . "'";						// Requête mySQL
		$authOk = false;																		// Flag
		$result = $this->database->query($requete);												// Envoie de la requête à la BDD
		
		// Parcours la table LOGIN => mdp
		if ($this->testErreur($result) == "") 
		{
			if ($result->rowCount() > 0) 
			{
				//Récupération de la première ligne de résultat
				$utilisateur = $result->fetch(PDO::FETCH_OBJ);									// fetchRow() => Retourne une ligne de résultat MySQL sous la forme d'un tableau
				if ($utilisateur->mdp == $password) 
				{																				// Retrouve Utilisateur puis validation mdp associé
					$authOk = true;																// Arrêt du parcour de la table		
				} 
				else 
				{
					throw new Exception("Mauvais mot de passe");
				}
				
			}

			else 
			{
				throw new Exception("Saisie incorrecte");
			}	
		}
		// Affichage du tableau LOGIN => Utilisteur et mot de passe
		return $authOk;	
	}	
}

?>