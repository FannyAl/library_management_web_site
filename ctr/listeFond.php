<?php

// Connexion BDD ////////////////////////////////////////
require "../init.php";
 
// Affichage contenu ////////////////////////////////////
include("../model/listeFond_mod.php");	// fonction affichage des données utilisteurs
include("../view/listeFond_tpl.php");	// Vue : affichage du formulaire => code html

?>