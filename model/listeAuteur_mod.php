<?php

// Déclaration de la variable d'insertion du code html /////////////////////////////////////////////
$strHtml = "";
$code="";


// Création nouvelle connexion avec la table Auteur ////////////////////////////////////////////////
$AuteurDAO = new AuteurDAO();
$auteurs = $AuteurDAO->display_List();				// Affichage de la liste des auteurs

$strHtml .= "
					<div class='box-content' id='list'>

						<table id='example' class='table table-striped table-bordered bootstrap-datatable datatable'>
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
		$code = $auteur->code;
		$strHtml .= "<tr id='$code'>

							<td>$auteur->code</td>
							<td>$auteur->nom</td>
							<td>$auteur->prenom</td>
							<td class='center'>


								<a class='btn btn-success dt-button buttons-print' href='#' onclick=\"javascript:imprimer_bloc('Fiche auteur', '$code')\";>
									<i class='halflings-icon white print';></i>  
								</a>

								<a class='btn btn-info' href='modifAuteur.php?affiche&code=$auteur->code&nom=$auteur->nom&prenom=$auteur->prenom'>
									<i class='halflings-icon white edit'></i>  
								</a>
								<a class='btn btn-danger' href='supprimeAuteur.php?code=$auteur->code'>
									<i class='halflings-icon white trash'></i> 
								</a>
							</td>
						</tr>";
	}
}
else $strAlert = "<div id = 'myAlert' class = 'alert alert-danger'>
							<a href = '#' class = 'close' data-dismiss = 'alert'>&times;</a>
							<strong>Problème !</strong> Erreur dans la connexion. $auteurs
						</div>";

$strHtml .= "</tbody></table></div>";
?>