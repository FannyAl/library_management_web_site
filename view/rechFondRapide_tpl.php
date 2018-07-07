<!--Head-->
<?php include("head.php"); ?>

<!-- Affichage liste des données-->
<head>
	<link rel="stylesheet" type="text/css" href="../lib/css/cover_Formulaire.css">
</head>

<body>
	<form method="post">
	 <div class="table-responsive">     
	  <table  class="table">

	<h1>Consulter les fonds</h1>


<!-- Menu actions Gérer les auteurs-->
<ul class="nav nav-pills nav-info" id="myTab">
    <li><?php echo genere_bouton('info','search','&nbsp;Recherche rapide',"rechFondRapide.php" ); ?></li>
    <li><?php echo genere_bouton('info','zoom-in','&nbsp;Recherche avancée',"rechFondAvance.php" ); ?></li>
    <li><?php echo genere_bouton('info','list','&nbsp;Liste des Thèmes',"listeTheme.php" ); ?></li>
    <li><?php echo genere_bouton('info','floppy-disk',' ',"ListeFond.php" ); ?></li>
</ul>


<!-- Contenu des onglets-->
<div class="tab-content pull-left" id="myTabContent">
    <div id="stack1" class="tab-pane fade active in">
        <br>
		<!-- Formulaire de Recherche-->
		<div class="form-group input-grou">
		    <div class="input-group">
		        <input type="text" placeholder="Saisissez votre recherche" name="saisie" id="saisie" class="form-control">
		        <span class="input-group-btn">
		            <button type="submit" class="btn btn-inverse">Rechercher</button>
		        </span>
		    </div>
		</div>

		<br>
		<?php echo $strHtml; ?> <!-- ************************************ Intégration formulaire résultat ***********************************************-->

    </div>
    <div id="stack2" class="tab-pane fade">
    </div>
    <div id="stack3" class="tab-pane fade">
    </div>
    <div id="stack4" class="tab-pane fade">
    </div>
</div>

<!--Foot-->
<?php include("foot.php"); ?>
