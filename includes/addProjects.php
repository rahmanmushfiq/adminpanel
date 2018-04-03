<div id="page-wrapper" class="project_height">
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
                    <h2 class="text-center page-header">Add Projects</h2>
                </div>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" method="post" action="">
                    <input type="hidden" name="action" value="projects">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Project Category</label>
                        <div class="col-md-6">
                            <select class="form-control" id="exampleFormControlSelect1" name="project_cat">
                            <option value="0"> --Select a Category-- </option>
                            <option value="android">Android</option>
                            <option value="graphics design">Graphics Design</option>
                            <option value="web development">Web Development and Design</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Project Title</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="project_title" placeholder="Enter Project Title" value="<?php if (isset($_POST['project_title'])) echo $_POST['project_title']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Project Price</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="project_price" placeholder="Enter Your Project Price" value="<?php if (isset($_POST['project_price'])) echo $_POST['project_price']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Number of Sold Copy</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="number_of_sold_copy" placeholder="Enter Number of Sold Copy" value="<?php if (isset($_POST['number_of_sold_copy'])) echo $_POST['number_of_sold_copy']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Sold By</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="sold_by" placeholder="Enter Seller Name" value="<?php if (isset($_POST['sold_by'])) echo $_POST['sold_by']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-md-offset-3 col-md-6">
                            <button id="btn-Add" type="submit" class="btn btn-info pull-right btn-edit"><i class="icon-hand-right"></i>   Add Project  </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
