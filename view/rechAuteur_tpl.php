<!--Head-->
<?php include("head.php"); ?>

<div id="content" class="span10">		
		
	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="../index.php">Home</a> 
			<i class="icon-angle-right"></i>
		</li>
		<li>
			<i class="icon-pencil"></i>
			<a href="rechAuteur.php">Gestion des auteurs</a> 
			<i class="icon-angle-right"></i>
		</li>
		<li>
			<i class="icon-search"></i>
			<a href="rechAuteur.php">Recherche rapide</a> 
		</li>
	</ul>


	<div class="row-fluid">
		<!-- ************************************ Fenêtre Gestion des Auteurs ***********************************************-->			
		<div class="box span12">
			<div class="box-header">
				<h2><i class="halflings-icon pencil"></i><span class="break"></span>Gestion des Auteurs</h2>
			</div>
			<div class="box-content">
				<ul class="nav tab-menu nav-tabs" id="myTab">
					<li class="active"><a href="rechAuteur.php"><i class="halflings-icon search"></i></a></li>
					<li><a href="listeAuteur.php"><i class="halflings-icon list"></i></a></li>
					<li><a href="ajoutAuteur.php"><i class="halflings-icon plus"></i></a></li>
				</ul>
				
				<!-- ************************************ Code Formulaire **************************************************-->	
				<div id="myTabContent" class="tab-content">
					<div class="tab-pane active" id="Recherche">
							<form class="form-horizontal" action="rechAuteur.php" method="post">
							  <fieldset>
								<div class="control-group">
								  <label class="control-label" for="saisie">Recherche rapide</label>
								  <div class="controls">
								  	<div class="input-append">
									<input type="text" placeholder="Code, nom ou prénom de l'auteur" class="span6 typeahead" name="saisie" id="saisie"  data-provide="typeahead" data-items="4" data-source='["3005","200","300","310","450","460","520","800","900","Couatmer","Chabas","Higgins","Dard","Klein","King","Goscinni","Giblin","Gérard"]'>
									<button type="submit" class="btn btn-primary">Chercher</button>
									<button type="reset" class="btn">Annuler</button>
								  </div>
								</div>
							   </div>
							  </fieldset>
							
					</div>
					<div class="tab-pane" id="custom">
						<p></p>
					</div>
					<div class="tab-pane" id="messages">
						<p></p>
					</div>
				</div>
			</div>
		</div><!--/span-->
	</div><!--/row-->

	<br>
	<?php echo $strHtml; ?> <!-- ************************************ Intégration formulaire résultat ***********************************************-->

</div>

<!--Foot-->
<?php include("foot.php"); ?>
