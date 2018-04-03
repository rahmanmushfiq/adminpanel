<?php
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
require_once 'includes/footer.php';
require_once 'functions/function.php';
?>
<?php
$id = $_GET['vm'];
$oDB = new DB();
$res = $oDB->getMessageData($id);
?>
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row" >
            <div class="col-lg-9">
                <h2 class="page-header">
                    Messages
                </h2>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <table id="tbl" class="table table-bordered table-hover table-striped table-responsive">
                        <thead id="heading_center">
                            <tr>
                                <th>Name</th>                              
                                <th>Message</th>                             
                            </tr>
                        </thead>
                        <tbody>
                    
                                <tr class="text-center">
                                    <td><?= $res['m_name']; ?></td>                            
                                    <td><?= $res['m_message']; ?></td>
                                </tr>
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
