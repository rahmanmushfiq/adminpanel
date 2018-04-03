<?php
require_once 'functions/function.php';
?>
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Manage Projects
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="tbl" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Project Title</th>
                                <th>Project Category</th>
                                <th>Price</th>
                                <th>Number of Sold Copy</th>
                                <th>Sold By</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $oDB = new DB();
                            $result = $oDB -> manageProjectData();
                            while ($res = mysqli_fetch_assoc($result))  {
                            ?>
                            <tr class="text-center">
                                <td><?php echo $res['p_title']; ?></td>
                                <td><?php echo $res['p_category']; ?></td>
                                <td><?php echo $res['p_price']; ?></td>
                                <td><?php echo $res['p_quantity']; ?></td>
                                <td><?php echo $res['p_soldby']; ?></td>                                
                                <td>
                                    <a href="edit_project.php?e=<?= urlencode($res['p_id']); ?>"><button type="button" class="btn btn-xs btn-info">Edit</button></a>
                                    <a href="delete_project.php?d=<?= urlencode($res['p_id']); ?>"><button type="button" class="btn btn-xs btn-danger">Delete</button></a>                                
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->