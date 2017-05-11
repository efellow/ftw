<?php
  include "../../includes/login/session.php";
  //session_start();
?>

<!DOCTYPE html>
<html lang="en">

<?php
	
	$filename = "homePageActions.php";
?>


<head>
    <title>PCNLekki-Home Page</title>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<!-- favicon link-->
	<link rel="icon" type="image/png" href="../../images/logo-400x230.png">
	
    <!-- Bootstrap links-->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    <!-- Material design links-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
    <link rel="stylesheet" href="../../css/styles.css">
    
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    
    <style type="text/css">
		table {margin: 0 auto; width: 100%; overflow: hidden; text-overflow: ellipsis;}
		table tr th, table tr td{font-size: 1.0rem;}
		.row{ margin:20px 20px 20px 20px;width: 100%;}
		.glyphicon{font-size: 20px;}
		.glyphicon-plus{float: right;}
		a.glyphicon{text-decoration: none;}
		a.glyphicon-trash{margin-left: 10px;}
		.none{display: none;}
		.mdl-color--teal-300 {
		  background: #263238 !important;
		  padding-top: 10px !important;
		  color: #fff;
		}
		#nav-menu a {text-decoration: none;}
		#chart ul li {  display:inline; padding: 5px;}
		#chart p { text-decoration:none; }
		#last-member span {font-weight:bold;}
    </style>
</head>


<body>
<!-- The drawer is always open in large screens. The header is always shown,
  even in small screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header">
  <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Home</span>
          <div class="mdl-layout-spacer"></div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search">
              <label class="mdl-textfield__label" for="search">Enter your query...</label>
            </div>
          </div>
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <li class="mdl-menu__item">Contact</li>
            <li class="mdl-menu__item">Legal information</li>
          </ul>
        </div>
      </header>
  
  <?php
     include '../../includes/layout/menu.php';
  ?>
  
  <main class="mdl-layout__content">
    <div class="page-content">
         <?php
			if (file_exists($filename)) {
				include "homePageActions.php";
				
				include "../../includes/layout/homePageFragment.php";
			} else {
				echo "The file $filename does not exist";
			}
		 ?>
    </div>
  </main>
</div>                                                                                    
</body>
</html>