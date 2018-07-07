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
			<i class="icon-edit"></i>
			<a href="modifAuteur.php">Modifier un auteur</a> 
		</li>
	</ul>


	<div class="row-fluid">
					
		<div class="box span12">
			<div class="box-header">
				<h2><i class="halflings-icon edit"></i><span class="break"></span>Modification de l'auteur : <?php echo @$nom." ".@$prenom; ?></h2>
			</div>
			<div class="box-content">
				<ul class="nav tab-menu nav-tabs" id="myTab">
					<li><a href="javascript:history.go(-1)"><i class="halflings-icon arrow-left"></i></a></li>
				</ul>
						
				<!-- Affichage formulaire d'ajout -->			 
					<div class="tab-pane active" id="Recherche">
						<form class="form-horizontal" action="modifAuteur.php" method="post">
							<fieldset>

								<div class="control-group">
								  <label class="control-label" for="saisie">Code Auteur :</label>
								  <div class="controls">
									<input name="code" type="text" value='<?php echo @$code; ?>' readonly />
								  </div>
								</div>

								<div class="control-group">
								  <label class="control-label" for="saisie">Nom :</label>
								  <div class="controls">
									<input name="nom" type="text" value='<?php echo @$nom; ?>'/>
								  </div>
								</div>

								<div class="control-group">
								  <label class="control-label" for="saisie">Prénom :</label>
								  <div class="controls">
									<input name="prenom" type="text" value='<?php echo @$prenom; ?>'/>
								  </div>
								</div>

								<div class="form-actions">
									<button type="submit" class="btn btn-primary">Enregistrer</button>
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