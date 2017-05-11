<?php

  require_once '../../includes/DbOperations.php';
  $db = new DbOperations();
  $tblName = 'visitations';
  $response = array();
  
  if($_SERVER['REQUEST_METHOD']=='POST'){
  
    if(isset($_POST['name']) and isset($_POST['phone'])){
		 $userData = array(
			  'name' => $_POST['name'],
			  'phone' => $_POST['phone'],
			  'visitation_number' => $_POST['visitation_number'],
			  'report' => $_POST['report']
		  );
		  $insert = $db->insert($tblName,$userData);
		 
		 if($insert){
		     $response['error'] = false;
			 $response['message'] = "Visitation entered successfully";
		 }
		 else{
		     $response['error'] = true;
			 $response['message'] = "Some error occurred please try again later";
		 }
	}
	else{
	  $response['error'] = true;
	  $response['message'] = "Please ensure all required fields are filled!";
	}
  }
  else{
    $response['error'] = true;
	$response['message'] = "Invalid Request";
  }
  
  echo json_encode($response);
  
?>