<!--Head-->
<?php include("head.php"); ?>


<div id="content" class="span10">		
		
	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="index.php">Home</a> 
			<i class="icon-angle-right"></i>
		</li>
		<li>
			<i class="icon-pencil"></i>
			<a href="rechAuteur.php">Gestion des auteurs</a> 
			<i class="icon-angle-right"></i>
		</li>
		<li>
			<i class="icon-trash"></i>
			<a href="modifAuteur.php">Supprimer un auteur</a> 
		</li>
	</ul>


	<div class="row-fluid">
					
		<div class="box span12">
			<div class="box-header">
				<h2><i class="halflings-icon trash"></i><span class="break"></span>Suppression de l'auteur : <?php echo @$nom." ".@$prenom; ?></h2>
			</div>
			<div class="box-content">
				<ul class="nav tab-menu nav-tabs" id="myTab">
					<li><a href="javascript:history.go(-1)"><i class="halflings-icon arrow-left"></i></a></li>
				</ul>		
			</div>

		</div><!--/span-->
	</div><!--/row-->

	<br>
	<?php echo $strAlert; ?> <!-- ************************************ Intégration formulaire résultat ***********************************************-->

</div>
			
<!-- Footer -->	
<?php include("foot.php"); ?>