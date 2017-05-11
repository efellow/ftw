<div class="panel panel-default users-content">
    <div class="panel-heading">Click the '+' sign to add new comers <a href="javascript:void(0);" class="glyphicon glyphicon-plus" id="addLink" onclick="javascript:$('#addForm').slideToggle();"></a></div>
    
    <!-- This div handles the add new item form-->
    <div class="panel-body none formData" id="addForm">
        <h2 id="actionLabel">Add New Comer</h2>
        <form class="form" id="userForm">
            <?php
                require "../../includes/FillForm.php"; //editable
            ?>
            <a href="javascript:void(0);" class="btn btn-warning" onclick="$('#addForm').slideUp();">Cancel</a>
            <a href="javascript:void(0);" class="btn btn-success" onclick="visitorAction('add')">Add Newcomer</a>
        </form>
    </div>
    
    <!-- This div handles the edit item form-->
    <div class="panel-body none formData" id="editForm">
        <h2 id="actionLabel">Edit New Comer</h2>                      <!-- Editable -->
        <form class="form" id="userForm">
            <?php
                require "../../includes/EditForm.php"; //editable
            ?>
            <input type="hidden" class="form-control" name="id" id="idEdit"/>
            <a href="javascript:void(0);" class="btn btn-warning" onclick="$('#editForm').slideUp();">Cancel</a>
            <a href="javascript:void(0);" class="btn btn-success" onclick="visitorAction('edit')">Update User</a>
        </form>
    </div>
    
    <div id="newcomertable">
      <!-- This part creates the table-->
    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" class="table table-hover table-condensed">
        <thead>
            <tr>
            <!--Editable-->
                <th class="mdl-data-table__cell--non-numeric">#</th>
                <th class="mdl-data-table__cell--non-numeric">Name</th>
                <th class="mdl-data-table__cell--non-numeric">Address</th>
                <th class="mdl-data-table__cell--non-numeric">Phone</th>
                <th class="mdl-data-table__cell--non-numeric">Profession</th>
                <th class="mdl-data-table__cell--non-numeric">First Attendance</th>
                <th class="mdl-data-table__cell--non-numeric">Reason for worship</th>
                <th class="mdl-data-table__cell--non-numeric">Needs</th>
                <th class="mdl-data-table__cell--non-numeric">Host</th>
                <th class="mdl-data-table__cell--non-numeric">Partner</th>
                <th class="mdl-data-table__cell--non-numeric">Action</th>
            </tr>
        </thead>
        <tbody id="visitorData">
            <?php
                //require "../../includes/DbOperations.php";
                $db = new DbOperations();
                $users = $db->getRows('visitorinfo',array('order_by'=>'id DESC'));  //change the database name
                if(!empty($users)): $count = 0; foreach($users as $user): $count++;
            ?>
            <tr>
                    <td><?php echo $count; ?></td>
                    <?php
                      require "../../includes/TableData.php"; //editable
                    ?>
                <td>
                    <a href="javascript:void(0);" class="glyphicon glyphicon-edit" onclick="editUser('<?php echo $user['id']; ?>')"></a>
                    <a href="javascript:void(0);" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure to delete data?')?visitorAction('delete','<?php echo $user['id']; ?>'):false;"></a>
                </td>
            </tr>
            <?php endforeach; else: ?>
            <tr><td colspan="5">No newcomers(s) found......</td></tr>
            <?php endif; ?>
        </tbody>
    </table>

    </div>

</div>

<!--
<div class="alert alert-warning" >

        <a href="#" class="close" data-dismiss="alert">&times;</a>

        <strong>Warning!</strong> There was a problem with your network connection.

    </div>
    
    
    <div class="success bg-success" >

        <a href="#" class="close" data-dismiss="alert">&times;</a>

        <strong>Success:</strong> Your message has been sent successfully.
        
    </div>
    -->