<?php

// Déclaration de la variable d'insertion du code html /////////////////////////////////////////////
$strHtml = "";


// Création nouvelle connexion avec la table Auteur ////////////////////////////////////////////////
$AuteurDAO = new AuteurDAO();
$auteurs = $AuteurDAO->display_List();				// Affichage de la liste des auteurs

$strHtml .= "	<h2>La liste des auteurs</h2>

				<thead>
				  <tr>
					<th>Code</th>
					<th>Nom</th>
					<th>Prénom</th>
					<th>Actions</th>
				  </tr>
				</thead>
				<tbody>";

if (is_array($auteurs)) 
{
// Affichage de tous les auteurs contenus dans la table dans un tableau ////////////////////////////
	foreach ($auteurs as $auteur) 
	{

		$strHtml .= "<tr>
						<td>$auteur->code</td>
						<td>$auteur->nom</td>
						<td>$auteur->prenom</td>
						<td>"
						.genere_bouton('info', 'pencil', '', "modifAuteur.php?affiche&code=$auteur->code&nom=$auteur->nom&prenom=$auteur->prenom" )
						
						.genere_bouton('info', 'trash', '', "supprimeAuteur.php?code=$auteur->code" ).
							
						"</td>
					</tr>";
	}
}
else $strAlert = "<div id = 'myAlert' class = 'alert alert-danger'>
							<a href = '#' class = 'close' data-dismiss = 'alert'>&times;</a>
							<strong>Problème !</strong> Erreur dans la connexion. $auteurs
						</div>";

$strHtml .= "</tbody></table></div></form></body>";
?>