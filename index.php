<?php
  session_start();
  
  require_once 'includes/DbOperations.php';
	
    $useremail = "";
	$password = "";
	$error = "";
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	   if (isset($_POST['useremail']) and isset($_POST['password'])){
		
	   $useremail = $_POST['useremail'];
	   $password = $_POST['password'];
	   
	   $db = new DbOperations();
	  
		if($db->web_userLogin($useremail,$password)){
  
		   //session_register("useremail");
		   $_SESSION['login_user'] = $useremail;
		   
		   header("location: v1/web/homePage.php");
		}else{
		  $error = "Invalid username or password";
		}
	
	 }	
	 else{
	  $error = "Required fields are missing";
	}
   }
   
   if(isset($_SESSION['login_user'])){
     header("location: v1/web/homePage.php");
   }
?>

<head>
    <title>PCN Lekki</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/logo-400x230.png">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    <style type="text/css">
		table tr th, table tr td{font-size: 1.2rem;}
		.row{ margin: 20px auto;width: 30%;}
		.logo {margin: 20px auto; margin-bottom: 60px;}
		.show {visibility: visible; display: block;}
		.hide {visibility: hidden; display: none;}
		@media screen and (max-width: 960px) {
		.row{ margin: 20px auto;width: 40%;}
		}
		@media screen and (max-width: 768px) {
		.row{ margin: 20px auto;width: 50%;}
		}
		@media screen and (max-width: 550px) {
		.row{ margin: 20px auto;width: 60%;}
		}
		@media screen and (max-width: 320px) {
		.row{ margin: 20px auto;width: 80%;}
		}
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <img src="images/logo-400x230.png" class="img-responsive logo" alt="PcnLekki logo" width="230" height="165">
		<?php
          include 'loginFragment.php';
        ?>
        <div id="errormessage" class="alert alert-warning hide" style = "font-size:11px; margin-top:10px">
          <?php echo $error; ?>
        </div>
        
        <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
    </div>
</div>
</body>
</html>