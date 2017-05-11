<?php
  require_once '../../includes/DbOperations.php';
  $db = new DbOperations();
  
  /********* Change the table name *************/
  $tblName = 'usersinfo';
  /*********************************************/
  
  if(isset($_POST['action_type']) && !empty($_POST['action_type'])){
	  if($_POST['action_type'] == 'data'){
		  $conditions['where'] = array('id'=>$_POST['id']);
		  $conditions['return_type'] = 'single';
		  $user = $db->getRows($tblName,$conditions);
		  echo json_encode($user);
	  }elseif($_POST['action_type'] == 'view'){
		  $users = $db->getRows($tblName,array('order_by'=>'id DESC'));
		  if(!empty($users)){
			  $count = 0;
			  foreach($users as $user): $count++;
				  echo '<tr>';
				  echo '<td>'.$count.'</td>';
				  
				  /********* Draw data from the Database *************/
				  echo '<td>'.$user['name'].'</td>';
				  echo '<td>'.$user['email'].'</td>';
				  echo '<td>'.$user['password'].'</td>';
				  echo '<td>'.$user['phone'].'</td>';
				  /***************************************************/
				  
				  echo '<td><a href="javascript:void(0);" onclick="editUser(\''.$user['id'].'\')"><i class="small material-icons">mode_edit</i></a><a href="javascript:void(0);" onclick="return confirm(\'Are you sure to delete data?\')?userAction(\'delete\',\''.$user['id'].'\'):false;"><i class="small material-icons">delete</i></a></td>';
				  echo '</tr>';
			  endforeach;
		  }else{
			  echo '<tr><td colspan="5">No user(s) found......</td></tr>';
		  }
	  }elseif($_POST['action_type'] == 'add'){
		  $userData = array(
			  'name' => $_POST['name'],
			  'email' => $_POST['email'],
			  'password' => $_POST['password'],
			  'phone' => $_POST['phone']
		  );
		  $insert = $db->insert($tblName,$userData);
		  echo $insert?'ok':'err';
	  }elseif($_POST['action_type'] == 'edit'){
		  if(!empty($_POST['id'])){
			  
			  /********* Edit the data from the Database*************/
			  $userData = array(
				  'name' => $_POST['name'],
				  'email' => $_POST['email'],
				  'password' => $_POST['password'],
				  'phone' => $_POST['phone']
			  );
			  /******************************************************/
			  
			  $condition = array('id' => $_POST['id']);
			  $update = $db->update($tblName,$userData,$condition);
			  echo $update?'ok':'err';
		  }
	  }elseif($_POST['action_type'] == 'delete'){
		  if(!empty($_POST['id'])){
			  $condition = array('id' => $_POST['id']);
			  $delete = $db->delete($tblName,$condition);
			  echo $delete?'ok':'err';
		  }
	  }
	  exit;
  }
?>