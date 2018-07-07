<?php

// Récupération des parametres POST //////////////////////////////////////////////////////////////////////////
$livre = '';
$auteur = '';
$theme = '';
$biblio = '';
$condition_livre = '';
$condition_auteur = '';
$condition_theme = '';


///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Phase récupération des données /////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Si TITRE de LIVRE sélectionné //////////////////////////////////////////////////////////////////////////////
if(isset($_POST['saisie_livre']) && $_POST['saisie_livre']!=' ')
{
	$livre = "livre = '".$livre."'";
}

// Si Nom ou Prenom de AUTEUR sélectionné /////////////////////////////////////////////////////////////////////
if(isset($_POST['saisie_auteur']) && $_POST['saisie_auteur']!=' ')
{
	$auteur = "auteur = '".$auteur."'";
}

// Gestion de la CONDITION ////////////////////////////////////////////////////////////////////////////////////
if (isset($_POST['condition']))
{
	$condition = $_POST['condition'];
}

// Si THEME sélectionnée //////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['theme']) && $_POST['theme']!=' ' && $_POST['theme']!='---')
{
	$theme = "theme = '".$theme."'";
}

// Si BIBLIOTHEQUE sélectionnée ///////////////////////////////////////////////////////////////////////////////
if(isset($_POST['bibliotheque']) && $_POST['bibliotheque']!=' '  && $_POST['bibliotheque']!='---')
{
	$bibliotheque = "bibliotheque = '".$bibliotheque."'";
}


///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Phase envoie des données vers classDAO /////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Création nouvelle connexion avec la table RESULTAT Fond Avancé /////////////////////////////////////////////
	$ResultatFondAvanceDAO = new ResultatFondAvanceDAO();
	$resulatFonds = $ResultatFondAvanceDAO->execute_requete();			 // Affichage de la liste des résultats


///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Affichage Tableau résultat /////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////

$strHtml = "	<h2>Résultat de la recheche avancée</h2>

				<thead>
				  <tr>
					<th>Titre</th>
					<th>Auteur</th>
					<th>Thème</th>
					<th>Bibliothèque</th>
				  </tr>
				</thead>
				<tbody>";


// Alimentation du tableau ///////////////////////////////////////////////////////////////////////////////////////
if (is_array($resulatFonds)) 
{
	foreach ($resulatFonds as $resulatFond) 	// Affichage de tous les résultats 
	{

		$strHtml .= "<tr>
						<td>$resulatFond->titre</td>
						<td>$resulatFond->auteur</td>
						<td>$resulatFond->theme</td>
						<td>$resulatFond->biblio</td>
						<td>"
						.genere_bouton('info', 'duplicate', '', "listeExemplaire.php?affiche&isbn=$livre->isbn" ).	
						"</td>
					</tr>";
	}
}
else $strAlert = "<div id = 'myAlert' class = 'alert alert-danger'>
							<a href = '#' class = 'close' data-dismiss = 'alert'>&times;</a>
							<strong>Problème !</strong> Erreur dans la connexion. $resulatFonds
						</div>";

$strHtml .= "</tbody></table></div></form></body>";




?>