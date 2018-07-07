<?php

// Connexion BDD ////////////////////////////////////////
require "../init.php";
 
// Affichage contenu ////////////////////////////////////
include("../model/listeTheme_mod.php");	// fonction affichage des données utilisteurs
include("../view/listeTheme_tpl.php");	// Vue : affichage du formulaire => code html

?>