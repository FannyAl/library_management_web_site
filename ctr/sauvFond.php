<?php

// Connexion BDD ////////////////////////////////////////
require "../init.php";
 
// Affichage contenu ////////////////////////////////////
include("../model/sauvFond_mod.php");	// fonction affichage des données utilisteurs
include("../view/sauvFond_tpl.php");	// Vue : affichage du formulaire => code html

?>