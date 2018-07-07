<?php

// Déclaration de la variable d'insertion du code html /////////////////////////////////////////////
$strHtml = "";
$strAlert = "";


// Si une saisie est effectuée //////////////////////////////////////////////////////////////////////////////
if(isset($_POST['saisie']) && $_POST['saisie'] != NULL)
{
	$saisie = htmlspecialchars($_POST['saisie']);
	// Création nouvelle connexion avec la table Exemplaire ////////////////////////////////////////////
	$ExemplaireDAO = new ExemplaireDAO();
	$exemplaires = $ExemplaireDAO->search($saisie);				// Affichage de la liste des exemplaires

	// Création nouvelle connexion avec la table Auteur ////////////////////////////////////////////////
	$LivreDAO = new LivreDAO();
	$livres = $LivreDAO->search($saisie);				// Affichage de la liste des livres

	// Création nouvelle connexion avec la table Auteur ////////////////////////////////////////////////
	$AuteurDAO = new AuteurDAO();
	$auteurs = $AuteurDAO->search($saisie);				// Affichage de la liste des auteurs


	$strHtml .= "<h2>Résultat de la recherche</h2>";



	////////////////////////////////////////////////////////////////////////////////////////////////////
	// Résultat recherche EXEMPLAIRE ///////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////////////////
	if (is_array($exemplaires)) 
	{
		$strHtml .= "<h3>Résultat liste exemplaire</h3>";
		$strHtml .= "<thead>
						  <tr>
							<th>Num-Exemplaire</th>
							<th>Code Bibliothèque</th>
							<th>Code Emplacement</th>
							<th>Isbn-Livre</th>
							<th>Code-Exemplaire</th>
							<th>Commentaire</th>
							<th>Disponibilités</th>
						  </tr>
						</thead>
						<tbody>";

	// Affichage de tous les exemplaires contenus dans la table dans un tableau ////////////////////////////
		foreach ($exemplaires as $exemplaire) 
		{

			$strHtml .= "<tr>
							<td>$exemplaire->numEX</td>
							<td>$exemplaire->codeBIBLIO</td>
							<td>$exemplaire->codeEMPL</td>
							<td>$exemplaire->isbn</td>
							<td>$exemplaire->codeEXEMPLAIRE</td>
							<td>$exemplaire->commentEXEMPL</td>
							<td>$exemplaire->dispo</td>
							<td>"
							.genere_bouton('info', 'floppy-disk', '', "" )
							
							.genere_bouton('info', 'print', '', "" ).
								
							"</td>
						</tr>";
		}
	}

	else $strAlert = "<div id = 'myAlert' class = 'alert alert-danger'>
								<a href = '#' class = 'close' data-dismiss = 'alert'>&times;</a>
								<strong>Problème !</strong> Erreur dans la connexion. $exemplaires 
							</div>";



	////////////////////////////////////////////////////////////////////////////////////////////////////
	// Résultat recherche LIVRE ////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////////////////
	if (is_array($livres)) 
	{
		$strHtml .= "<h3>Résultat liste livre</h3>";
		$strHtml .= "<thead>
						  <tr>
							<th>Isbn-Livre</th>
							<th>code Thème</th>
							<th>Titre</th>
							<th>Actions</th>
						  </tr>
						</thead>
						<tbody>";

	// Affichage de tous les livres contenus dans la table dans un tableau ////////////////////////////
		foreach ($livres as $livre) 
		{

			$strHtml .= "<tr>
							<td>$livre->isbn</td>
							<td>$livre->codeTheme</td>
							<td>$livre->titre</td>
							<td>"
							.genere_bouton('info', 'duplicate', '', "" )
							.genere_bouton('info', 'floppy-disk', '', "" )
							.genere_bouton('info', 'print', '', "" ).
								
							"</td>
						</tr>";
		}
	}

	else $strAlert = "<div id = 'myAlert' class = 'alert alert-danger'>
								<a href = '#' class = 'close' data-dismiss = 'alert'>&times;</a>
								<strong>Problème !</strong> Erreur dans la connexion. $livres 
							</div>";



	////////////////////////////////////////////////////////////////////////////////////////////////////
	// Résultat recherche Auteur ///////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////////////////
	if (is_array($auteurs)) 
	{
		$strHtml .= "<h3>Résultat liste auteur</h3>";
		$strHtml .= "<thead>
						  <tr>
							<th>Code Auteur</th>
							<th>Nom</th>
							<th>Prénom</th>
							<th>Actions</th>
						  </tr>
						</thead>
						<tbody>";

	// Affichage de tous les auteurs contenus dans la table dans un tableau ////////////////////////////
		foreach ($auteurs as $auteur) 
		{

			$strHtml .= "<tr>
							<td>$auteur->code</td>
							<td>$auteur->nom</td>
							<td>$auteur->prenom</td>
							<td>"
							.genere_bouton('info', 'list', '', "" )
							.genere_bouton('info', 'floppy-disk', '', "" )
							.genere_bouton('info', 'print', '', "" ).
								
							"</td>
						</tr>";
		}
	}
	
	else $strAlert = "<div id = 'myAlert' class = 'alert alert-danger'>
								<a href = '#' class = 'close' data-dismiss = 'alert'>&times;</a>
								<strong>Problème !</strong> Erreur dans la connexion. $auteurs
							</div>";


	$strHtml .= "</tbody></table></div></form></body>";

}

?>