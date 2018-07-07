<?php

// Déclaration de la variable d'insertion du code html /////////////////////////////////////////////
$strHtml = "";


if(isset($_REQUEST["isbn"]))
{
	$isbn = $_REQUEST["isbn"];
	// Création nouvelle connexion avec la table exemplaire ////////////////////////////////////////////////
	$ExemplaireDAO = new ExemplaireDAO();
	$exemplaires = $ExemplaireDAO->search_from_livre($isbn);				// Affichage de la liste des exemplaires

	$strHtml .= "	<h2>La liste des exemplaires</h2>

					<thead>
							  <tr>
								<th>N°</th>
								<th>Bibliothèque</th>
								<th>Emplacement</th>
								<th>Isbn</th>
								<th>Exemplaire</th>
								<th>Commentaire</th>
								<th>Dispo</th>
							  </tr>
							</thead>
					<tbody>";

	if (is_array($exemplaires)) 
	{
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

	$strHtml .= "</tbody></table></div></form></body>";
	
}
?>