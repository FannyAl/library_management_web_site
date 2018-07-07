<?php

// Déclaration de la variable d'insertion du code html /////////////////////////////////////////////
$strHtml = "";


// Création nouvelle connexion avec la table Auteur ////////////////////////////////////////////////
$ThemeDAO = new ThemeDAO();
$themes = $ThemeDAO->display_List();				// Affichage de la liste des thèmes

$strHtml .= "	<h2>La liste des thèmes</h2>

				<thead>
				  <tr>
					<th>Code</th>
					<th>Libellé</th>
					<th>Descriptif</th>
					<th>Actions</th>
				  </tr>
				</thead>
				<tbody>";

if (is_array($themes)) 
{
// Affichage de tous les themes contenus dans la table dans un tableau ////////////////////////////
	foreach ($themes as $theme) 
	{

		$strHtml .= "<tr>
						<td>$theme->code</td>
						<td>$theme->libel</td>
						<td>$theme->description</td>
						<td>"
						.genere_bouton('info', 'book', '', "listeLivre.php?affiche&code=$theme->code" ).						
						"</td>
					</tr>";
	}
}
else $strAlert = "<div id = 'myAlert' class = 'alert alert-danger'>
							<a href = '#' class = 'close' data-dismiss = 'alert'>&times;</a>
							<strong>Problème !</strong> Erreur dans la connexion. $themes
						</div>";

$strHtml .= "</tbody></table></div></form></body>";
?>