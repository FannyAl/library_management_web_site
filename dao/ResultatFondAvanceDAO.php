<?php

///////////////////////////////////////////////////////////////////////////////////////////////
// Création classe Fond DAO /////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
class ResultatFondAvanceDAO extends BASEdao 
{
	
	// Fonction RECHERCHE et AFFICHAGE fond  ///////////////////////////////////////////////////
	public function constru_requete($r_livre, $r_auteur, $r_condition, $r_theme, $r_biblio) 
	{	
		$requete = "";

		// Si LIVRE ////////////////////////////////////////////////////////////////
		if($r_livre != '')
		{
			$requete .= "SELECT * FROM livre WHERE titreLivre LIKE '%$r_livre%' ";

			// Gestion CONDITION ////////////////////////////////////////////////////////
			if($r_condition == "et")
			{
				$requete .= " INTERSECT ";
			}
			elseif($r_condition == "ou")
			{
				$requete .= " UNION " ;
			}
			elseif($r_condition == "sauf")
			{
				$requete .= " EXCEPT ";
			}

			// Si AUTEUR ////////////////////////////////////////////////////////////////
			if($r_auteur != '')
			{
				$requete .= "SELECT * FROM auteur WHERE nomAuteur LIKE '%$r_auteur%' OR prenomAuteur LIKE '%$r_auteur%' ";

				// Si THEME ////////////////////////////////////////////////////////////////
				if(($r_theme != '') AND ($r_theme != "---"))
				{
					$requete .= "INTERSECT SELECT * FROM theme WHERE CodTheme LIKE '$r_theme'";
				}
				// Si BIBLIO ////////////////////////////////////////////////////////////////
				elseif(($r_biblio != '') AND ($r_biblio != "---"))
				{
					$requete .= "INTERSECT SELECT * FROM biblio WHERE codBibliotheque LIKE '$r_biblio';";
				}
				// Fin de la requête
				else $requete .= ";";
			}
		}

		// Si AUTEUR ////////////////////////////////////////////////////////////////
		elseif($r_auteur != '')
		{
			$requete .= "SELECT * FROM auteur WHERE nomAuteur LIKE '%$r_auteur%' OR prenomAuteur LIKE '%$r_auteur%' ";

			// Si THEME ////////////////////////////////////////////////////////////////
			if(($r_theme != '') AND ($r_theme != "---"))
			{
				$requete .= "INTERSECT SELECT * FROM theme WHERE CodTheme LIKE '$r_theme'";
			}
			// Si BIBLIO ////////////////////////////////////////////////////////////////
			elseif(($r_biblio != '') AND ($r_biblio != "---"))
			{
				$requete .= "INTERSECT SELECT * FROM biblio WHERE codBibliotheque LIKE '$r_biblio';";
			}
			// Fin de la requête
			else $requete .= ";";
		}

		// Retourne la requête constituée
		echo $requete;
		return $requete;
	}


	// Fonction EXECUTE REQUETE => recherche avancée //////////////////////////////////////////////
	function execute_requete() 
	{	
		// Construction de la requête en fonction des paramètres sélectionnés 
		$requete = self::constru_requete('','','','','');
		$result = $this->database->query($requete);

		// Si pas d'erreur
		if ($this->testErreur($result) == "") 
		{
			$resulatFonds = array();	
			// Parcours du tableau Fond
			while ($utilEnBase = $result->fetch(PDO::FETCH_OBJ)) 
			{
				$resulatFonds[] = new ResultatFond($utilEnBase->IsbnLivre, $utilEnBase->codTheme, $utilEnBase->titreLivre,
													 $utilEnBase->codAuteur, $utilEnBase->nomAuteur, $utilEnBase->prenomAuteur, $utilEnBase->libelTheme,
													 $utilEnBase->codBibliotheque, $utilEnBase->libelBibliotheque);
			}
		}
		else $resulatFonds = $this->testErreur($result);
		// Affichage du tableau
		return $resulatFonds;
	}	
	
}


?>