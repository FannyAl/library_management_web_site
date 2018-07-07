<?php

// Connexion BDD ////////////////////////////////////////
require "../init.php";
 
// Affichage contenu ////////////////////////////////////
include("../model/listeLivre_mod.php");	// fonction affichage des données utilisteurs
include("../view/listeLivre_tpl.php");	// Vue : affichage du formulaire => code html

?>