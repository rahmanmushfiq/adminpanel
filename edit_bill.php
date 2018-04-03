<?php
include_once('functions/function.php');
require_once(".//manage.php");
$oParts = new Parts();
$oParts->addHeader();
$oParts->addSidebar();
$oParts->addFooter();
?>
<?php
$id = $_GET['eb'];
$oDB = new DB();
$res = $oDB->getBillData($id);
?>

<div id="page-wrapper" class="add_bill">
    <?php
    global $msg, $ok;
    if (isset($ok))
    {
        echo '<h3 style="color: green; text-align: center;">' . $ok . "</h3>";
    }
    if (isset($msg))
    {
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
                <input type="hidden" name="action" value="edit_bill_form">
                <input type="hidden" name="bill_id" value="<?= $res['b_id']; ?>">                
                <div class="form-group">
                    <label class="col-md-3 control-label">Month</label>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="billing_month" placeholder="Enter Month" value="<?= $res['b_month']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Office Rent</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="office_rent" placeholder="Enter Office Rent" value="<?= $res['b_office']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Current Bill</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="current_bill" placeholder="Enter Your Current Bill" value="<?= $res['b_current']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Gas Bill</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="gas_bill" placeholder="Enter Your Gas Bill" value="<?= $res['b_gas']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Water Bill</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="water_bill" placeholder="Enter Your Water Bill" value="<?= $res['b_water']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Internet Bill</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="net_bill" placeholder="Enter Your Internet Bill" value="<?= $res['b_net']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Maintenance Bill</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="maintenance_bill" placeholder="Enter Your Maintenance Bill" value="<?= $res['b_maintenance']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <!-- Button -->
                    <div class="col-md-offset-3 col-md-6">
                        <button id="btn-Add" type="submit" class="btn btn-info pull-right btn-edit"><i class="icon-hand-right"></i> Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->