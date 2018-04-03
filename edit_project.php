<?php
include_once('functions/function.php');
require_once(".//manage.php");
$oParts = new Parts();
$oParts->addHeader();
$oParts->addSidebar();
$oParts->addFooter();
?>
<?php
$id = $_GET['e'];
$oDB = new DB();
$res = $oDB->getProjectData($id);
?>
<div id="page-wrapper" class="project_height">
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
                <h2 class="text-center page-header">Edit Projects</h2>
            </div>
        </div>
        <div class="panel-body" >
            <form class="form-horizontal" method="post" action="">
                <input type="hidden" name="action" value="edit_project_form">
                <input type="hidden" name="project_id" value="<?= $res['p_id']; ?>">             
                <div class="form-group">
                    <label class="col-md-3 control-label">Project Category</label>

                </div>
                <div class="col-md-6">
                    <label class="col-md-3 control-label">Project Category</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="project_cat" value = "<?= $res['p_category']; ?>">
                    </div>
                </div> 
                <div class="form-group">
                    <label class="col-md-3 control-label">Project Title</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="project_title" placeholder="Enter Project Title" value = "<?= $res['p_title']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Project Price</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="project_price" placeholder="Enter Your Project Price" value = "<?= $res['p_price']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Number of Sold Copy</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="number_of_sold_copy" placeholder="Enter Number of Sold Copy" value = "<?= $res['p_quantity']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Sold By</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="sold_by" placeholder="Enter Seller Name" value = "<?= $res['p_soldby']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <!-- Button -->
                    <div class="col-md-offset-3 col-md-6">
                        <button id="btn-Add" type="submit" class="btn btn-info pull-right btn-edit"><i class="icon-hand-right"></i> Update </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

