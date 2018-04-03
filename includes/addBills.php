<div id="page-wrapper" class="add_bill">
    <?php
    global $msg, $ok;
    if (isset($ok)) {
        echo '<h3 style="color: green; text-align: center;">' . $ok . "</h3>";
    }
    if (isset($msg)) {
        echo '<h3 style = "color: red; text-align: center;">' . $msg . "</h3>";
    }
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center">Add Bills</h2>
            </div>
        </div>
        <div class="panel-body" >
            <form id="Add-form" class="form-horizontal" method="post" action="">
                <input type="hidden" name="action" value="bills">                
                <div class="form-group">
                    <label class="col-md-3 control-label">Month</label>
                    <div class="col-md-6">
                        <select class="form-control" id="exampleFormControlSelect1" name="billing_month">
                            <option value="0"> -- Select a Month -- </option>
                            <option value="Jan">January</option>
                            <option value="Feb">February</option>
                            <option value="Mar">March</option>
                            <option value="Apr">April</option>
                            <option value="May">May</option>
                            <option value="Jun">June</option>
                            <option value="Jul">July</option>
                            <option value="Aug">August</option>
                            <option value="Sep">September</option>
                            <option value="Oct">October</option>
                            <option value="Nov">November</option>
                            <option value="Dec">December</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Office Rent</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="office_rent" placeholder="Enter Office Rent" value="<?php if (isset($_POST['office_rent'])) echo $_POST['office_rent']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Current Bill</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="current_bill" placeholder="Enter Your Current Bill" value="<?php if (isset($_POST['current_bill'])) echo $_POST['current_bill']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Gas Bill</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="gas_bill" placeholder="Enter Your Gas Bill" value="<?php if (isset($_POST['gas_bill'])) echo $_POST['gas_bill']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Water Bill</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="water_bill" placeholder="Enter Your Water Bill" value="<?php if (isset($_POST['water_bill'])) echo $_POST['water_bill']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Internet Bill</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="net_bill" placeholder="Enter Your Internet Bill" value="<?php if (isset($_POST['net_bill'])) echo $_POST['net_bill']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Maintenance Bill</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="maintenance_bill" placeholder="Enter Your Maintenance Bill" value="<?php if (isset($_POST['maintenance_bill'])) echo $_POST['maintenance_bill']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <!-- Button -->
                    <div class="col-md-offset-3 col-md-6">
                        <button id="btn-Add" type="submit" class="btn btn-info pull-right btn-edit"><i class="icon-hand-right"></i> Add Bill</button>
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