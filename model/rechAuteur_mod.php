<?php

// Déclaration de la variable d'insertion du code html /////////////////////////////////////////////
$strHtml = "";
$strAlert = "";
$code ="";


// Si yne saisie est effectuée //////////////////////////////////////////////////////////////////////////////
if(isset($_POST['saisie']) && $_POST['saisie'] != NULL)
{
	$saisie = htmlspecialchars($_POST['saisie']);
	// Création nouvelle connexion avec la table Auteur ////////////////////////////////////////////////
	$AuteurDAO = new AuteurDAO();
	$auteurs = $AuteurDAO->search($saisie);				// Affichage de la liste des auteurs

	$strHtml .= "<div class='row-fluid sortable'>		
				  <div class='box span12'>
					<div class='box-header' data-original-title>
						<h2><i class='halflings-icon user'></i><span class='break'></span>Résultats de la recherche pour \"$saisie\"</h2>
						<div class='box-icon'>
							<a href='#' class='btn-setting'><i class='halflings-icon wrench'></i></a>
							<a href='#' class='btn-minimize'><i class='halflings-icon chevron-up'></i></a>
							<a href='#' class='btn-close'><i class='halflings-icon remove'></i></a>
						</div>
					</div>
					<div class='box-content' id='list'>

						<form class='form-horizontal' action='rechAuteur.php' method='post'>
						<table class='table table-striped table-bordered bootstrap-datatable datatable'>
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
								<a class='btn btn-success' href='#' onclick=\"javascript:imprimer_bloc('Fiche auteur', '$code')\">
									<i class='halflings-icon white print'></i>  
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
 

	$strHtml .= " </tbody></table>

					  <div class='form-actions'>
						<button type='btn' class='btn'onclick=\"javascript:imprimer_bloc('Liste des auteurs', 'list')\"><i class='halflings-icon white print'></i></button>
					  </div>

					  </form>

	</div></div></div>";

}

?>