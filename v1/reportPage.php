<?php
  include "../../includes/login/session.php";
  //session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>PCNLekki-Report Page</title>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<!-- favicon link-->
	<link rel="icon" type="image/png" href="../../images/logo-400x230.png">

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- Material design links-->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
<link rel="stylesheet" type="text/css" href="../../css/styles.css">
<link rel="stylesheet" type="text/css" href="../../css/reportstyles.css" media="screen">

<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>
<body>
      <!-- The drawer is always open in large screens. The header is always shown,
  even in small screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header">
  <header id="head" class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Report</span>
          <div class="mdl-layout-spacer"></div>
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <li class="mdl-menu__item">Contact</li>
            <li class="mdl-menu__item">Legal information</li>
          </ul>
        </div>
    </header>
        
        
		<div id="menu" class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
			<header class="demo-drawer-header">
			  <img src="../../images/logo.jpg" class="demo-avatar">
			  <div class="demo-avatar-dropdown">
				<span><?php
				   echo $login_session['email']; // needs editing
				?></span>
				<div class="mdl-layout-spacer"></div>
				<button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
				  <i class="material-icons" role="presentation">arrow_drop_down</i>
				  <span class="visuallyhidden">Accounts</span>
				</button>
				<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
				  <a href="../../includes/login/logout.php" style="text-decoration:none;"><li class="mdl-menu__item">Logout</li></a>
				</ul>
			  </div>
			</header>
			<nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800" id="nav-menu">
			  <a class="mdl-navigation__link" href="../../v1/web/homePage.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Home</a>
			  
			  
			  <a class="mdl-navigation__link" href="../../v1/web/userPage.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">person_pin</i>User</a>
			  <a class="mdl-navigation__link" href="../../v1/web/newComerPage.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">person_add</i>New Comers</a>
			  <a class="mdl-navigation__link" href="../../v1/web/visitationPage.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">drive_eta</i>Visitations</a>
			  <a class="mdl-navigation__link" href="../../v1/web/reportPage.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">book</i>Report</a>
			  <a class="mdl-navigation__link" href="../../v1/web/aboutPage.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">info_outline</i>About</a>
			  <a class="mdl-navigation__link" href="http://pcnlekki.tk" target="_blank"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">language</i>Visit Website</a>
			  <div class="mdl-layout-spacer"></div>
			  <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i></a>
			</nav>
		  </div>

      
        <main class="mdl-layout__content">
          <div class="page-content" id="report-container">
		    <?php
			  include "reportActions.php";
			?>
		  
		    <form method="post" action="printPage.php">
			  <header>
			    <h4>The Presbyterian Church of Nigeria, Lekki parish</h4>
			    <h4>Report of the welcome committee for the month of <?php monthdate(date("m")); ?></h4>
			  </header>
			  
			  <section >
			    <ol>
				  <div id="firstreading" style="float: left; width: 100%; display: block;">
				    <div id="report-text" style="float: left; width: 40%; padding-top: 3%;">
						<li>Number of first time worshippers: </li>
						<li>Number in (1) above relocating to Lagos:</li>
						<li>Number in (1) above already domiciled in lagos:</li>
						<li>Number just passing through:</li>
					</div>
					
					<div id="report-table" style="float: left; width: 40%;margin-left: 10%;">
						<table>
						  <tr>
							<th>Week 1</th>
							<th>Week 2</th>
							<th>Week 3</th>
							<th>Week 4</th>
							<th>Total</th>
						  </tr>
						  <tr>
							<td><?php echo $FirstTime_week1; ?></td>
							<td><?php echo $FirstTime_week2; ?></td>
							<td><?php echo $FirstTime_week3; ?></td>
							<td><?php echo $FirstTime_week4; ?></td>
							<td><?php 
							echo ($FirstTime_week1 + $FirstTime_week2 + $FirstTime_week3 + $FirstTime_week4); 
							?></td>
						  </tr>
						  <tr>
							<td><?php echo $reLagos_week1; ?></td>
							<td><?php echo $reLagos_week2; ?></td>
							<td><?php echo $reLagos_week3; ?></td>
							<td><?php echo $reLagos_week4; ?></td>
							<td><?php 
							echo ($reLagos_week1 + $reLagos_week2 + $reLagos_week3 + $reLagos_week4); 
							?></td>
						  </tr>
						  <tr>
							<td><?php echo $noLagos_week1; ?></td>
							<td><?php echo $noLagos_week2; ?></td>
							<td><?php echo $noLagos_week3; ?></td>
							<td><?php echo $noLagos_week4; ?></td>
							<td><?php 
							echo ($noLagos_week1 + $noLagos_week2 + $noLagos_week3 + $noLagos_week4); 
							?></td>
						  </tr>
						  <tr>
							<td><?php echo $inLagos_week1; ?></td>
							<td><?php echo $inLagos_week2; ?></td>
							<td><?php echo $inLagos_week3; ?></td>
							<td><?php echo $inLagos_week4; ?></td>
							<td><?php 
							echo ($inLagos_week1 + $inLagos_week2 + $inLagos_week3 + $inLagos_week4); 
							?></td>
						  </tr>
						</table>   
					</div>
					
				  </div>
				  <li style="clear: both;">With respect to (2) and (3) above, how many indicated need for: </li>
				  <div style="clear: both; float: left; width:100%;">
					<ul style="float:left; width: 20%; ">
					  <li>Prayer </span></li>
					  <li>Counselling</span></li>
					  <li>Deliverance</span></li>
					  <li>Place of worship </li>
					  <li>Job</li>
					  <li>Medical</li>
					  <li>Others(specify)</li>
				    </ul>
					
					<ul style="text-decoration: none; list-style: none;">
					  <li><?php echo $needsPrayer; ?></li>
					  <li><?php echo $needsCounselling; ?></li>
					  <li><?php echo $needsDeliverance; ?></li>
					  <li><?php echo $needsWorshipPlace; ?></li>
					  <li><?php echo $needsJob; ?></li>
					  <li><?php echo $needsMedical; ?></li>
					  <li><?php echo $needsOthers; ?><span><input type="text" name="others" size="79" style="margin-left: 10px;"></span></li>
					</ul>
				  </div>
				  <li>Indicate outcome with respect to action taken in (5) above:</li>
				  <textarea name="number_six" rows="6" cols="109" maxlength="600" placeholder="max. of 600 characters"></textarea>
				  <li>Indicate outcome if information regarding addresses and phone numbers in (2) and (3) above have been shared <br/>
				  with relevant Commitees for follow up: </li>
				  <textarea name="number_seven" rows="6" cols="109" maxlength="600" placeholder="max. of 600 characters"></textarea>
				  <li>Indicate number converted to permanent worshippers within the month: <input type="text" name="permanent-worshippers" size="3"></li>
				  <li>Where success is not readily achieved, what are out/their reasons?</li>
				  <textarea name="number_nine" rows="6" cols="109" maxlength="600" placeholder="max. of 600 characters"></textarea>
				  <li>Any other comments:</li>
				  <textarea name="number_ten" rows="6" cols="109" maxlength="600" placeholder="max. of 600 characters"></textarea>
				</ol>
			  </section>
			  
			  <footer style="clear: both; margin: 35px 40px;">
			    <div id="signature-one" style="float: left;">
				  <p>Prepared by: </p>
				  <p>..............................................</p>
				</div>
				<div id="signature-two" style="float: right;  padding-top: 35px;">
				  <p>..............................................</p>
				</div>
				
				<div>
				  <!-- Accent-colored raised button -->
                  <button class="mdl-button mdl-js-button mdl-button--raised" style="clear: both; margin-top: 80px; margin-left: 150px; background-color:#37474F; color:#fff;">Generate Report</button>
				</div>
			  </footer>
			 
			 </form> 
          </div>
        </main>
      </div> 
</div>   
                                                                                
</body>
</html>