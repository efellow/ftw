<!DOCTYPE html>
<html lang="en">

<head>
    <title>PCNLekki-Print Page</title>
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
<link rel="stylesheet" type="text/css" href="../../css/styles.css" media="screen">
<link rel="stylesheet" type="text/css" href="../../css/reportstyles.css" media="screen">
<link rel="stylesheet" type="text/css" href="../../css/print.css" media="print">

<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

</head>
<body style="width:100%; margin: 0 10px;">
      <!-- The drawer is always open in large screens. The header is always shown,
  even in small screens. -->
<div>
          <div>
		  
		      <?php
			    include "reportActions.php";
			  ?>
		      
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
					  <li><?php echo $needsOthers; ?><span style="margin-left: 10px;"><?php echo $others; ?></span></li>
					</ul>
				  </div>
				  <li>Indicate outcome with respect to action taken in (5) above:</li>
				  <span><?php echo $number_six; ?><span><br/>
				  <li>Indicate outcome if information regarding addresses and phone numbers in (2) and (3) above have been shared <br/>
				  with relevant Commitees for follow up: </li>
				  <span><?php echo $number_seven; ?><span><br/>
				  <li>Indicate number converted to permanent worshippers within the month: <input type="text" name="permanent-worshippers" size="3"></li>
				  <li>Where success is not readily achieved, what are out/their reasons?</li>
				  <span><?php echo $number_nine; ?><span><br/>
				  <li>Any other comments:</li>
				  <span><?php echo $number_ten; ?><span><br/>
				</ol>
			  </section>
			  
			  <footer style="clear: both; margin: 35px 40px;float: left; width: 100%;">
			    <div id="signature-one" style="float: left; width: 40%;">
				  <p>Prepared by: </p>
				  <p>..............................................</p>
				</div>
				<div id="signature-two" style="float: left;  width: 40%;padding-top: 35px;">
				  <p>..............................................</p>
				</div>
				
			  </footer>
          </div>
      </div> 
</div>   
                                                                                
</body>
</html>