<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="../lib/css/bootstrap.min.css" rel="stylesheet">
	<link href="../lib/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="../lib/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="../lib/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="../lib/img/logo-ConvertImage.ico">
	<!-- end: Favicon -->
	
	<style type="text/css">
			body { background: #ECECEB !important; }
		</style>
	
</head>

<!-- Formulaire LOGIN -->

<body>
		<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						<a href="../index.php"><i class="halflings-icon home"></i></a>
						<a href="../ctr/login.php"><i class="halflings-icon user"></i></a>
					</div>

					<center><img src="../lib/img/centre_culturel_M_login.jpg"></center>
					
					<form class="form-horizontal" action="../ctr/ajoutLogin.php" method="post">
						<fieldset>
							
							<div class="clearfix"></div>

							<div class="input-prepend" title="Username">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="login" id="login" type="text" placeholder="Identifiant"/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="password" id="password" type="password" placeholder="Mot de Passe"/>
							</div>
							<div class="clearfix"></div>
							
							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon cog"></i></span>
								<input class="input-large span10" name="niveau" id="niveau" value="1" type="text" placeholder="Niveau"/>
							</div>

							<div class="button-login" >	
								<button type="submit" class="button-login btn " value="Authentifier">Créer</button>
							</div>
					</form>
					
				</div><!--/span-->
			</div><!--/row-->
			
	</div><!--/.fluid-container-->
	</div><!--/fluid-row-->

</body>


<!-- Intégration foot-->
<?php  include("foot.php"); ?>