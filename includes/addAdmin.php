<div id="page-wrapper" class="add_admin">
    <?php
    global $msg,$ok;
    if(isset($ok)){
        echo '<h3 style="color: green; text-align: center;">'.$ok."</h3>"; 
    }
    if(isset($msg)){
        echo '<h3 style = "color: red; text-align: center;">'.$msg. "</h3>";
    }
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center">Add Admin</h2>
            </div>
        </div>
        <div class="panel-body" >
            <form id="Add-form" class="form-horizontal" method="post" action="">
                <input type = "hidden" name="action" value="admins">
                <div class="form-group">
                    <label for="firstname" class="col-md-3 control-label">First Name</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="first_name" placeholder="Enter Your First Name" onkeyup="check_firstname(this)" value= "<?php if(isset($_POST['first_name'])) echo $_POST['first_name'];?>"   >
                        <a id="firstname_msg"></a>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-md-3 control-label">Last Name</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="last_name" placeholder="Enter Your Last Name" value="<?php if(isset($_POST['last_name'])) echo $_POST['last_name'];?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-md-3 control-label">Email</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="email" placeholder="Enter Your Email Address"
                        onkeyup="check_email(this)" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"     ><a id="email_msg"></a>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-md-3 control-label">Password</label>
                    <div class="col-md-6">
                        <input type="password" class="form-control" name="password" placeholder="Enter Your Password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="number" class="col-md-3 control-label">Contact Number</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="number" placeholder="Enter Your Number"
                        onkeyup="check_phone(this)" value="<?php if(isset($_POST['number'])) echo $_POST['number'];?>"     ><a id="phone_msg"></a>
                    </div>
                </div>
                <div class="form-group">
                    <label for="number" class="col-md-3 control-label"> Photo Upload</label>
                    <div class="col-md-6">
                        <input type="file" name="upload">
                    </div>
                </div>
                <div class="form-group">
                    <label for="number" class="col-md-3 control-label"> CV Upload</label>
                    <div class="col-md-6">
                        <input type="file" name="upload">
                    </div>
                </div>
                <div class="form-group">
                    <!-- Button -->
                    <div class="col-md-offset-3 col-md-6">
                        <button id="btn-submit" type="submit" class="btn btn-info pull-right btn-edit"><i class="icon-hand-right"></i>Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->