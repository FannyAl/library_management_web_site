<?php

// Connexion BDD ////////////////////////////////////////
require "../init.php";
 
// Affichage contenu ////////////////////////////////////
include("../model/rechAuteur_mod.php");	// fonction affichage des données utilisteurs
include("../view/rechAuteur_tpl.php");	// Vue : affichage du formulaire => code html

?>