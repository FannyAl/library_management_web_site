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
			<i class="icon-plus"></i>
			<a href="ajoutAuteur.php">Ajouter un auteur</a> 
		</li>
	</ul>


	<div class="row-fluid">
					
		<div class="box span12">
			<div class="box-header">
				<h2><i class="halflings-icon pencil"></i><span class="break"></span>Gestion des Auteurs</h2>
			</div>
			<div class="box-content">
				<ul class="nav tab-menu nav-tabs" id="myTab">
					<li><a href="rechAuteur.php"><i class="halflings-icon search"></i></a></li>
					<li><a href="listeAuteur.php"><i class="halflings-icon list"></i></a></li>
					<li class="active"><a href="ajoutAuteur.php"><i class="halflings-icon plus"></i></a></li>
				</ul>
						
				<!-- Affichage formulaire d'ajout -->			 
					<div class="tab-pane active" id="Recherche">
						<form class="form-horizontal" action="ajoutAuteur.php" method="get">
							<fieldset>

								<div class="control-group">
								  <label class="control-label" for="saisie">Code Auteur :</label>
								  <div class="controls">
									<input type="text" placeholder="ex : 100" class="span6 typeahead" name="code">
								  </div>
								</div>

								<div class="control-group">
								  <label class="control-label" for="saisie">Nom :</label>
								  <div class="controls">
									<input type="text" placeholder="ex : Higgins" class="span6 typeahead" name="nom">
								  </div>
								</div>

								<div class="control-group">
								  <label class="control-label" for="saisie">Prénom :</label>
								  <div class="controls">
									<input type="text" placeholder="ex : Mary" class="span6 typeahead" name="prenom">
								  </div>
								</div>

								<div class="form-actions">
									<button type="submit" class="btn btn-primary">Ajouter</button>
									<button class="btn">Annuler</button>
							  	</div>

							</fieldset>
						</form>	
					</div>
				</div>

		</div><!--/span-->
	</div><!--/row-->

	<br>
	<?php echo $strAlert; ?> <!-- ************************************ Intégration formulaire résultat ***********************************************-->

</div>

<!-- Footer -->
<?php include("foot.php"); ?>