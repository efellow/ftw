<?php
  include "../../includes/login/session.php";
  //session_start();
  $response = array();
  
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $others = $_POST['others'];
	$number_six = $_POST['number_six'];
	$number_seven = $_POST['number_seven'];
	$number_nine = $_POST['number_nine'];
	$number_ten = $_POST['number_ten'];
    if(isset($others) and isset($number_six) and isset($number_seven) and isset($number_nine) and isset($number_ten)){
		include "printPageHtml.php";
	}
	else{
	    $response['error'] = true;
	    $response['message'] = "Please fill all required areas first";
		echo $response['message'];
	}
  }else{
    $response['error'] = true;
	$response['message'] = "Invalid Request <br/> Go back to report page.";
	echo $response['message'];
  }
?>