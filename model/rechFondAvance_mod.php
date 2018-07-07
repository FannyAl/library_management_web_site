<?php

// Déclarartion des variables ////////////////////////////////////////////////////////////////////////////////
$strHtml3 = "";
$strHtml4 = "";
$link = "";


	// Alimentation du comboBox THEME ///////////////////////////////////////////////////////////////////////
	// Si sélection Theme dans le menu dropdown
	function display_list_theme($ptheme) 
	{
		// Connxion à la classe Theme
		$ThemeDAO = new ThemeDAO();
		$themes = $ThemeDAO->display_List();				// Affichage de la liste des thèmes
		$retour = "
		
        <div class='icon-addon addon-md'>
		<select class='form-control' name='theme' id='theme'>
		<option>---<option>";

		if (is_array($themes)) 
		{
			foreach ($themes as $theme) 
			{
				$selected = "";
						if ($theme->code == $ptheme) 
						{
							$selected = "selected";
						}
				$retour .= "<option value='".$theme->code."' $selected>$theme->libel</option>";
			}
		}
		$retour .= "</select>
					<i class='icon icon-search'></i>
                    </div>";
		return $retour;
	} 


	// Alimentation du comboBox BIBLIOTHEQUE ////////////////////////////////////////////////////////////////
	// Si sélection Bibli dans le menu dropdown
	function display_list_biblio($pbiblio) 
	{
		// Connxion à la classe LIVRE
		$BiblioDAO = new BiblioDAO();
		$bibliotheques = $BiblioDAO->display_List();				// Affichage de la liste des bibliotheques
		$retour = "
		
        <div class='icon-addon addon-md'>
		<select class='form-control' name='bibliotheque' id='bibliotheque'>
		<option>---<option>";

		if (is_array($bibliotheques)) 
		{
			foreach ($bibliotheques as $bibliotheque) 
			{
				$selected = "";
						if ($bibliotheque->code == $pbiblio) 
						{
							$selected = "selected";
						}
				$retour .= "<option value='".$bibliotheque->code."' $selected>$bibliotheque->libel</option>";
			}
		}
		$retour .= "</select>
					<i class='icon icon-search'></i>
                    </div>";
		return $retour;
	} 


// Intégration du dropdown menu liste de la recherche ////////////////////////////////////////////////////////
$strHtml3 .= display_list_theme("");
$strHtml4 .= display_list_biblio(""); 

// Redirection vers le formulaire de résultat
if(isset($_POST['chercher']) AND ($_POST['chercher']) == 'chercher') 
{ 
	header("Location:resultatFondAvance.php"); 
} 

?>