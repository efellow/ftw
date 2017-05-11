<?php
  session_start();
?>

<?php
   require_once '../../includes/DbOperations.php';
   
   $db = new DbOperations();
   
   $user_check = $_SESSION['login_user'];
   
   $login_session = $db->web_userSession($user_check);
   
   if(!isset($login_session)){
      header("location: ../../index.php");
   }
?>