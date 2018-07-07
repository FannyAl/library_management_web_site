<?php

// Connexion BDD ////////////////////////////////////////
require "../init.php";
 
// Affichage contenu ////////////////////////////////////
include("../model/login_mod.php");	// fonction affichage des données utilisteurs
include("../view/login_tpl.php");	// Vue : affichage du formulaire => code html

?>
