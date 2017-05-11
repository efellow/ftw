<?php
  include "../../includes/login/session.php";
  //session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>PCNLekki-Visitations Page</title>
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
<link rel="stylesheet" href="../../css/styles.css">

<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

<style type="text/css">
table {margin: 0 auto; width: 100%; overflow: auto; text-overflow: ellipsis;}
table tr th, table tr td{font-size: 1.0rem;}
.row{ margin:20px 20px 20px 20px;width: 100%;}
.glyphicon{font-size: 20px;}
.glyphicon-plus{float: right;}
a.glyphicon{text-decoration: none;}
a.glyphicon-trash{margin-left: 10px;}
.none{display: none;}
#nav-menu a {text-decoration: none;}
#visit_table { overflow-x:auto;}
</style>
<script>
function getUsers(){
    $.ajax({
        type: 'POST',
        url: 'visitationActions.php', //editable: change to action file
        data: 'action_type=view&'+$("#userForm").serialize(),
        success:function(html){
            $('#visitorData').html(html);
        }
    });
}
function visitorAction(type,id){
    id = (typeof id == "undefined")?'':id;
    var statusArr = {add:"added",edit:"updated",delete:"deleted"};
    var visitorData = '';
    if (type == 'add') {
        visitorData = $("#addForm").find('.form').serialize()+'&action_type='+type+'&id='+id;
    }else if (type == 'edit'){
        visitorData = $("#editForm").find('.form').serialize()+'&action_type='+type;
    }else{
        visitorData = 'action_type='+type+'&id='+id;
    }
    $.ajax({
        type: 'POST',
        url: 'visitationActions.php', //editable
        data: visitorData,
        success:function(msg){
            if(msg == 'ok'){
                alert('User data has been '+statusArr[type]+' successfully.');
                getUsers();
                $('.form')[0].reset();
                $('.formData').slideUp();
            }else{
                alert('Some problem occurred, please try again.');
            }
        }
    });
}
function editUser(id){
    $.ajax({
        type: 'POST',
        dataType:'JSON',
        url: 'visitationActions.php', //editable: change to action
        data: 'action_type=data&id='+id,
        success:function(data){
			//chage this part to edit data from the database
            $('#idEdit').val(data.id);
            $('#nameEdit').val(data.name);;
            $('#phoneEdit').val(data.phone);
			$('#visitation_numberEdit').val(data.visitation_number);
			$('#reportEdit').val(data.report);
            $('#editForm').slideDown();
        }
    });
}
</script>
</head>
<body>
      <!-- The drawer is always open in large screens. The header is always shown,
  even in small screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header">
  <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Visitations</span>
          <div class="mdl-layout-spacer"></div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search">
              <label class="mdl-textfield__label" for="search">Enter your query...</label>
            </div>
          </div>
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <li class="mdl-menu__item">Contact</li>
            <li class="mdl-menu__item">Legal information</li>
          </ul>
        </div>
      </header>
        
        <?php
           include '../../includes/layout/menu.php';
        ?>
      
        <main class="mdl-layout__content">
          <div class="page-content">
			  <?php
			    include '../../includes/layout/visitationFragment.php';
			  ?>
          </div>
        </main>
      </div> 
</div>   
                                                                                
</body>
</html>