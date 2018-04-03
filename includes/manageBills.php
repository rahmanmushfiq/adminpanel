<?php
require_once 'functions/function.php';
?>
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->

        <div class="col-lg-9">
            <h2 class="page-header ">
                Manage Bills
            </h2>
        </div>
        <div class="col-lg-3">
            <div class="input-group custom-search-form page-header">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="tbl" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Month</th>
                                <th>Office Rent</th>
                                <th>Current Bill</th>
                                <th>Gas Bill</th>
                                <th>Water Bill</th>
                                <th>Internet Bill</th>
                                <th>Maintainance Bill</th>                               
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody> 
                            <?php 
                            $oDB = new DB();
                            $result = $oDB->manageBillData();
                            while($res = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr class="text-center">
                                <td><?php echo $res['b_month']; ?></td>
                                <td><?php echo $res['b_office']; ?></td>
                                <td><?php echo $res['b_current']; ?></td>
                                <td><?php echo $res['b_gas']; ?></td>
                                <td><?php echo $res['b_water']; ?></td>
                                <td><?php echo $res['b_net']; ?></td>
                                <td><?php echo $res['b_maintenance']; ?></td>                                
                                <td>
                                    <a href="edit_bill.php?eb=<?php echo urlencode($res['b_id']); ?>"> <button type="button" class="btn btn-xs btn-info">Edit</button></a>
                                    <a href="delete_bill.php?db=<?php echo urlencode($res['b_id']); ?>"><button type="button" class="btn btn-xs btn-danger">Delete</button>
                                </td>
                            </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-offset-2 col-lg-10 ">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
