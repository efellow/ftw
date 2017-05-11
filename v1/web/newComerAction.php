<?php
  require_once '../../includes/DbOperations.php';
  $db = new DbOperations();
  $tblName = 'visitorinfo';
  
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
				  echo '<td>#'.$count.'</td>';
				  echo '<td>'.$user['name'].'</td>';
				  echo '<td>'.$user['address'].'</td>';
				  echo '<td>'.$user['phone'].'</td>';
				  echo '<td>'.$user['profession'].'</td>';
				  echo '<td>'.$user['first_attendance'].'</td>';
				  echo '<td>'.$user['worship_reason'].'</td>';
				  echo '<td>'.$user['needs'].'</td>';
				  echo '<td>'.$user['hostname'].'</td>';
				  echo '<td>'.$user['partner'].'</td>';
				  echo '<td><a href="javascript:void(0);" class="glyphicon glyphicon-edit" onclick="editUser(\''.$user['id'].'\')"></a><a href="javascript:void(0);" class="glyphicon glyphicon-trash" onclick="return confirm(\'Are you sure to delete data?\')?userAction(\'delete\',\''.$user['id'].'\'):false;"></a></td>';
				  echo '</tr>';
			  endforeach;
		  }else{
			  echo '<tr><td colspan="5">No user(s) found......</td></tr>';
		  }
	  }elseif($_POST['action_type'] == 'add'){
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
		  echo $insert?'ok':'err';
	  }elseif($_POST['action_type'] == 'edit'){
		  if(!empty($_POST['id'])){
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