<?php

// Connexion BDD ////////////////////////////////////////
require "../init.php";
 
// Affichage contenu ////////////////////////////////////
include("../model/resultatFondAvance_mod.php");	// fonction affichage des données utilisteurs
include("../view/resultatFondAvance_tpl.php");	// Vue : affichage du formulaire => code html

?>