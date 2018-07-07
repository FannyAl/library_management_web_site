<?php

// Déclaration de la variable d'insertion du code html /////////////////////////////////////////////
$strHtml = "";


if(isset($_REQUEST["code"]))
{
	$code = $_REQUEST["code"];
	// Création nouvelle connexion avec la table Livre ////////////////////////////////////////////////
	$LivreDAO = new LivreDAO();
	$livres = $LivreDAO->search_from_theme($code);				// Affichage de la liste des livres

	$strHtml .= "	<h2>La liste des livres</h2>

					<thead>
						<tr>
						<th>Isbn</th>
						<th>Thème</th>
						<th>Titre du livre</th>
						<th>Actions</th>
						</tr>
					</thead>
					<tbody>";

	if (is_array($livres)) 
	{
	// Affichage de tous les livres contenus dans la table dans un tableau ////////////////////////////
		foreach ($livres as $livre) 
		{

			$strHtml .= "<tr>
							<td>$livre->isbn</td>
								<td>$livre->codeTheme</td>
								<td>$livre->titre</td>
							<td>"
							.genere_bouton('info', 'duplicate', '', "listeExemplaire.php?affiche&isbn=$livre->isbn" ).
							"</td>
						</tr>";
		}
	}
	else $strAlert = "<div id = 'myAlert' class = 'alert alert-danger'>
								<a href = '#' class = 'close' data-dismiss = 'alert'>&times;</a>
								<strong>Problème !</strong> Erreur dans la connexion. $livres
							</div>";

	$strHtml .= "</tbody></table></div></form></body>";

}
?>