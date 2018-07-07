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
            <i class="icon-list"></i>
            <a href="listeAuteur.php">Liste des auteurs</a> 
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
                    <li class="active"><a href="listeAuteur.php"><i class="halflings-icon list"></i></a></li>
                    <li><a href="ajoutAuteur.php"><i class="halflings-icon plus"></i></a></li>
                </ul>
                        
                <?php echo $strHtml; ?> <!-- ************************************ Liste des Auteurs ***********************************************-->

                <div class='form-actions'>
                    <button type='btn' class='btn' onclick="javascript:imprimer_bloc('Liste des auteurs', 'list')"><i class='halflings-icon white print'></i></button>
                </div>

            </div>

        </div><!--/span-->
    </div><!--/row-->


<!--Foot-->
<?php include("foot.php"); ?>