<div class="panel panel-default users-content">
    <div class="panel-heading"> Click the '+' sign to add a new user <a href="javascript:void(0);" class="glyphicon glyphicon-plus" id="addLink" onclick="javascript:$('#addForm').slideToggle();"></a></div>
    
    <!-- This div handles the add new item form-->
    <div class="panel-body none formData" id="addForm">
        <h2 id="actionLabel">Add User</h2>
        <form class="form" id="userForm">
            <?php
                include "../../includes/users/userFillForm.php"; //editable
            ?>
            <a href="javascript:void(0);" class="btn btn-warning" onclick="$('#addForm').slideUp();">Cancel</a>
            <a href="javascript:void(0);" class="btn btn-success" onclick="visitorAction('add')">Add User</a>
        </form>
    </div>
    
    <!-- This div handles the edit item form-->
    <div class="panel-body none formData" id="editForm">
        <h2 id="actionLabel">Edit User</h2>                      <!-- Editable -->
        <form class="form" id="userForm">
            <?php
                require "../../includes/users/userEditForm.php"; //editable
            ?>
            <input type="hidden" class="form-control" name="id" id="idEdit"/>
            <a href="javascript:void(0);" class="btn btn-warning" onclick="$('#editForm').slideUp();">Cancel</a>
            <a href="javascript:void(0);" class="btn btn-success" onclick="visitorAction('edit')">Update User</a>
        </form>
    </div>
    
   <div id="user_table">
   
    <!-- This part creates the table-->
    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" class="table table-hover table-condensed">
        <thead>
            <tr>
            <!--Editable-->
                <th>#</th>
                <th class="mdl-data-table__cell--non-numeric">Name</th>
                <th class="mdl-data-table__cell--non-numeric">Email</th>
                <th class="mdl-data-table__cell--non-numeric">Password</th>
                <th class="mdl-data-table__cell--non-numeric">Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="visitorData">
            <?php
                //require "../../includes/DbOperations.php";
                $db = new DbOperations();
                $users = $db->getRows('usersinfo',array('order_by'=>'id DESC'));  //change the database name
                if(!empty($users)): $count = 0; foreach($users as $user): $count++;
            ?>
            <tr>
                    <td><?php echo $count; ?></td>
                    <?php
                      require "../../includes/users/userTableData.php"; //editable
                    ?>
                <td>
                    <a href="javascript:void(0);" class="glyphicon glyphicon-edit" onclick="editUser('<?php echo $user['id']; ?>')"></a>
                    <a href="javascript:void(0);" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure to delete data?')?visitorAction('delete','<?php echo $user['id']; ?>'):false;"></a>
                </td>
            </tr>
            <?php endforeach; else: ?>
            <tr><td colspan="5">No users(s) found......</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
   
   
   </div>
</div>