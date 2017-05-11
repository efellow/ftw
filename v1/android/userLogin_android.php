<?php
  require_once '../../includes/DbOperations.php';
  $db = new DbOperations();
  $response = array();
  
  if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['email']) and isset($_POST['password'])){
	  $email = $_POST['email'];
	  $pass = $_POST['password'];
	  
	  if($db->userLogin($email,$pass)){
	    $user = $db->getUserByUsername($email);
		$response['error'] = false;
	    $response['id'] = $user['id'];
		$response['email'] = $user['email'];
		$response['name'] = $user['name'];
	  }else{
	    $response['error'] = true;
	    $response['message'] = "Invalid email or password";
	  }
	}
	else{
	  $response['error'] = true;
	  $response['message'] = "Required fields are missing";
	}
  }else{
    $response['error'] = true;
	$response['message'] = "Invalid Request";
  }
  
  echo json_encode($response);
?>