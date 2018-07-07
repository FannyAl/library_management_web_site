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
    </div>
    <div id="stack2" class="tab-pane fade">
    	<br>
    	<!-- Formulaire de Recherche-->
        <h2>Recherche avancée</h2><br>

            <div class="table-responsive">
            <!-- *****************************************************  -->
            <!-- ********************* Tableau   *********************  -->
            <!-- *****************************************************  -->
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Critère</th>
                      <th>Sélection</th>
                      <th>Conditions</th>
                  </tr>
                  </thead>


                  <!-- *****************************************************  -->
                  <!-- ********************* Ligne 1 : TITRE   *********************  -->
                  <!-- *****************************************************  -->
                  <tbody>
                    <tr>
                      <th>
                        <!-- **************** Combobox critères   ***************  -->
                        <label>Titre</label>

                      </th>

                       <!-- **************** Input   ***************  -->
                      <th>
                          <!-- Formulaire de Recherche-->
                          <div class="form-group input-grou">
                              <div class="input-group">
                                  <input type="text" placeholder="Saisissez un titre" name="saisie_livre" id="saisie_livre" class="form-control">
                              </div>
                          </div> 
                      </th>

                      <!-- **************** Conditions  ***************  -->
                      <th>

                        <div class="form-group">
                          <div class="icon-addon addon-md condition">
                              <select class="form-control condition" name='condition' id='condition'>
                                <option value='et' selected>et</option>
                                <option value='ou'>ou</option>
                                <option value='sauf'>sauf</option>
                              </select>
                              <i class="icon icon-search"></i>
                          </div>
                        </div>

                      </th>
                   
                  </tr>

                  </tbody>

                  <!-- *****************************************************  -->
                  <!-- ********************* Ligne 2 : AUTEUR   *********************  -->
                  <!-- *****************************************************  -->
                  <tbody>
                    <tr>
                      <th>
                        <!-- **************** Combobox critères   ***************  -->
                        <label>Auteur</label>

                      </th>

                       <!-- **************** Input   ***************  -->
                      <th>
                          <!-- Formulaire de Recherche-->
                          <div class="form-group input-grou">
                              <div class="input-group">
                                  <input type="text" placeholder="Saisissez un auteur" name="saisie_auteur" id="saisie_auteur" class="form-control">
                              </div>
                          </div>  
                      </th>
                   
                  </tr>

                  </tbody>
                  </table>

                  <br><br><br>

                  <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Critère</th>
                      <th>Pour aller plus loin dans la recherche</th>
                  </tr>
                  </thead>

                  <!-- *****************************************************  -->
                  <!-- ********************* Ligne 3 : THEME  *********************  -->
                  <!-- *****************************************************  -->
                  <tbody>
                    <tr>
                      <th>
                        <!-- **************** Combobox critères   ***************  -->
                        <label>Theme</label>

                      </th>

                       <!-- **************** Input   ***************  -->
                      <th>
                        <div class='form-group'>
                          <?php echo $strHtml3; ?>  
                          </div> 
                      </th>
                   
                  </tr>

                  </tbody>

                  <!-- *****************************************************  -->
                  <!-- ********************* Ligne 4 : Bibliothèque   *********************  -->
                  <!-- *****************************************************  -->
                  <tbody>
                    <tr>
                      <th>
                        <!-- **************** Combobox critères   ***************  -->
                        <label>Bibliothèque</label>

                      </th>

                       <!-- **************** Input   ***************  -->
                      <th>
                        <div class='form-group'>
                          <?php echo $strHtml4; ?>  
                          </div> 
                      </th>
                   
                  </tr>

                  </tbody>

                </table>

                 <!-- **************** Boutons  ***********************  -->
                        <div class="btn_form">
                          <button type="submit" class="btn btn-default btn_cherche" name="chercher" value="chercher" onclick="redir('')">Chercher</button>
                          <button type="reset" class="btn btn-default btn_effacer"><i class="fa fa-undo" aria-hidden="true"></i>&nbsp;Effacer</button>
                        </div>

                <br>
                <br>

              </div>

              <br>
              <br>

		<br>

    </div>
    <div id="stack3" class="tab-pane fade">
    </div>
    <div id="stack4" class="tab-pane fade">
    </div>
</div>

<!--Foot-->
<?php include("foot.php"); ?>

<!--<script language="javascript" type="text/javascript">

function redir('the_url')
{
    window.location.replace(the_url);
}

</script>-->
