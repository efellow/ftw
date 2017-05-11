<?php

  require_once '../../includes/DbOperations.php';
  $db = new DbOperations();
  
  $tblName = 'usersinfo';
  $response = array();
  
  if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['name']) and isset($_POST['email']) and isset($_POST['password']) and isset($_POST['phone'])){
	
	    $userData = array(
			  'name' => $_POST['name'],
			  'email' => $_POST['email'],
			  'password' => $_POST['password'],
			  'phone' => $_POST['phone']
		  );
		  
		  $insert = $db->insert($tblName,$userData);
	  //Operate database further
	  
	  if ($insert){
	    $response['error'] = false;
	    $response['message'] = "User registered successfully";
	  }else{
	    $response['error'] = true;
	    $response['message'] = "Some error occurred please try again later";
	  }
	}
	else{
	  $response['error'] = true;
	  $response['message'] = "Required fields are missing";
	}
  }
  else{
    $response['error'] = true;
	$response['message'] = "Invalid Request";
  }
  
  echo json_encode($response);
  
?>