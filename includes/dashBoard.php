<?php
require_once 'functions/function.php';

$oDB = new DB();
$result = $oDB->viewProjectQuantity();
?>
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                Dashboard
                </h1>
            </div>
        </div>
        <!-- /.row -->
        
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <i class="fa fa-comments fa-5x"></i>
                            </div>
                            <div class="col-xs-11 text-right">
                                <div class="huge">26</div>
                                <div>Messages!</div>
                            </div>
                        </div>
                    </div>
                    <a href="messages.php">
                        <div class="panel-footer">
                            <span class="pull-left">View Messages</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <i class="fa fa-fw fa-user fa-5x"></i>
                            </div>
                            <div class="col-xs-11 text-right">
                                <div class="huge">4</div>
                                <div>Admins!</div>
                            </div>
                        </div>
                    </div>
                    <a href="manage_admin.php">
                        <div class="panel-footer">
                            <span class="pull-left">View Admins</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <i class="fa fa-fw fa-wrench fa-5x"></i>
                            </div>
                            <div class="col-xs-11 text-right">
                                <div class="huge"><?php echo $result;?></div>
                                <div>Projects!</div>
                            </div>
                        </div>
                    </div>
                    <a href="manage_projects.php">
                        <div class="panel-footer">
                            <span class="pull-left">View Projects</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <i class="fa fa-table fa-5x"></i>
                            </div>
                            <div class="col-xs-11 text-right">
                                <div class="huge">13</div>
                                <div>Bills!</div>
                            </div>
                        </div>
                    </div>
                    <a href="manage_bills.php">
                        <div class="panel-footer">
                            <span class="pull-left">View Bills</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
