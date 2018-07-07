<!DOCTYPE html>
<html lang="en">
<head>
  
  <!-- start: Meta -->
  <meta charset="utf-8">
  <title>Les Marmusots</title>
  <meta name="description" content="Bootstrap Metro Dashboard">
  <meta name="author" content="Dennis Ji">
  <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <!-- end: Meta -->
  
  <!-- start: Mobile Specific -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- end: Mobile Specific -->
  
  <!-- start: CSS -->
  <link id="bootstrap-style" href="lib/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/css/bootstrap-responsive.min.css" rel="stylesheet">
  <link id="base-style" href="lib/css/style.css" rel="stylesheet">
  <link id="base-style-responsive" href="lib/css/style-responsive.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
  <!-- end: CSS -->
  

  <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link id="ie-style" href="lib/css/ie.css" rel="stylesheet">
  <![endif]-->
  
  <!--[if IE 9]>
    <link id="ie9style" href="lib/css/ie9.css" rel="stylesheet">
  <![endif]-->
    
  <!-- start: Favicon -->
  <link rel="shortcut icon" href="lib/img/logo-ConvertImage.ico">
  <!-- end: Favicon -->
  
    
    
    
</head>

<body>
    <!-- start: Header -->
  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container-fluid">
        <a class="brand" href="index.php">
          <span><strong class = "fst">/</strong>
              <strong class = "scd">/</strong>
                &nbsp;Mon compte</span>
        </a>
                
        <!-- start: Header Menu -->
        <div class="nav-no-collapse header-nav">
          <ul class="nav pull-right">
            <li class="dropdown hidden-phone">
              <a class="btn dropdown-toggle" href="ctr/#">
                <i class="halflings-icon white book"></i>
                <span class="hidden-tablet"> Livres</span>
              </a>
            </li>
            <!-- start: Notifications Dropdown -->
            <li class="dropdown hidden-phone">
              <a class="btn dropdown-toggle" href="ctr/rechAuteur.php">
                <i class="halflings-icon white pencil"></i>
                <span class="hidden-tablet"> Auteur</span>
              </a>
            </li>
            <!-- end: Notifications Dropdown -->
            <!-- start: Message Dropdown -->
            <li class="dropdown hidden-phone">
              <a class="btn dropdown-toggle" href="ctr/#">
                <i class="halflings-icon white th-list"></i>
                <span class="hidden-tablet"> Thèmes</span>
              </a>
            </li>
            <!-- end: Message Dropdown -->
            <li class="dropdown hidden-phone">
              <a class="btn dropdown-toggle" href="ctr/#">
                <i class="halflings-icon white file"></i>
                <span class="hidden-tablet"> Exemplaires</span>
              </a>
            </li>

            <!-- start: User Dropdown -->
            <li class="dropdown">
              <a class="btn dropdown-toggle profil" data-toggle="dropdown">
                <i class="halflings-icon white user"></i> Utilisateur
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li class="dropdown-menu-title">
                  <span>Réglages</span>
                </li>
                <li><a href="ctr/modifLogin.php"><i class="halflings-icon user"></i> Profil</a></li>
                <li><a href="#"><i class="halflings-icon cog"></i> Paramètre</a></li>
                <li><a href="ctr/login.php"><i class="halflings-icon off"></i> Déconnexion</a></li>
              </ul>
            </li>
            <!-- end: User Dropdown -->
          </ul>
        </div>
        <!-- end: Header Menu -->
      </div>
    </div>
  </div>
  <!-- start: Header -->
  
  <div class="container-fluid-full">

    <div class="row-fluid">
        
      <!-- start: Main Menu -->
      <div id="sidebar-left" class="span2">
        <div class="nav-collapse sidebar-nav">
          <ul class="nav nav-tabs nav-stacked main-menu hidden-phone">
            <li><a href="index.php"><i class="icon-home"></i><span class="hidden-tablet"> Home</span></a></li>  
            <li><a href="ctr/rechFondRapide.php"><i class="icon-search"></i><span class="hidden-tablet"> Recherche</span></a></li>
            <li><a href="ctr/#"><i class="icon-share-alt"></i><span class="hidden-tablet"> Prêts</span></a></li>
          </ul>
        </div>
      </div>
      <!-- end: Main Menu -->
    </div>
      
      <noscript>
        <div class="alert alert-block span10">
          <h4 class="alert-heading">Warning!</h4>
          <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
        </div>
      </noscript>
