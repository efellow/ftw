<?php

  require_once '../../includes/DbOperations.php';
  $db = new DbOperations();
  $tblName = 'visitorinfo';
  $response = array();
  
  if($_SERVER['REQUEST_METHOD']=='POST'){
  
    if(isset($_POST['name']) and isset($_POST['address']) and isset($_POST['phone'])){
		 $userData = array(
			  'name' => $_POST['name'],
			  'address' => $_POST['address'],
			  'phone' => $_POST['phone'],
			  'profession' => $_POST['profession'],
			  'first_attendance' => $_POST['first_attendance'],
			  'worship_reason' => $_POST['worship_reason'],
			  'hostname' => $_POST['hostname'],
			  'needs' => $_POST['needs'],
			  'location' => $_POST['location'],
			  'partner' => $_POST['partner']
		  );
		  $insert = $db->insert($tblName,$userData);
		 
		 if($insert){
		     $response['error'] = false;
			 $response['message'] = "New Comer registered successfully";
		 }
		 else{
		     $response['error'] = true;
			 $response['message'] = "Some error occurred please try again later";
		 }
	}
	else{
	  $response['error'] = true;
	  $response['message'] = "Please fill in all required fields";
	}
  }
  else{
    $response['error'] = true;
	$response['message'] = "Invalid Request";
  }
  
  echo json_encode($response);
  
?>