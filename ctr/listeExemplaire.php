<?php

// Connexion BDD ////////////////////////////////////////
require "../init.php";
 
// Affichage contenu ////////////////////////////////////
include("../model/listeExemplaire_mod.php");	// fonction affichage des données utilisteurs
include("../view/listeExemplaire_tpl.php");	// Vue : affichage du formulaire => code html

?>