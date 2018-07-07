<?php

// Connexion BDD ////////////////////////////////////////
require "../init.php";
 
// Affichage contenu ////////////////////////////////////
include("../model/rechFondRapide_mod.php");	// fonction affichage des données utilisteurs
include("../view/rechFondRapide_tpl.php");	// Vue : affichage du formulaire => code html

?>