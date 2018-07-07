<?php

// Connexion BDD ////////////////////////////////////////
require "../init.php";
 
// Affichage contenu ////////////////////////////////////
include("../model/listeAuteur_mod.php");	// fonction affichage des données utilisteurs
include("../view/listeAuteur_tpl.php");	// Vue : affichage du formulaire => code html

?>