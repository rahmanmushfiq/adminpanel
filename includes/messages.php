<?php
require_once 'functions/function.php';
?>
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-9">
                <h2 class="page-header">
                    Messages
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
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <table id="tbl" class="table table-bordered table-hover table-striped table-responsive">
                        <thead id="heading_center">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $oDB = new DB();
                            $result = $oDB->manageMessageData();
                            while ($res = mysqli_fetch_assoc($result))
                            {
                                ?>
                                <tr class="text-center">
                                    <td><?= $res['m_name']; ?></td>
                                    <td><?= $res['m_email']; ?></td>
                                    <td><?= $res['m_subject']; ?></td>
                                    <td><?= $res['m_message']; ?></td>
                                    <td>
                                        <a href="view_message.php?vm=<?= urlencode($res['m_id']); ?>"><button type="button" class="btn btn-xs btn-warning">View</button></a>
                                        <a href="delete_message.php?dm=<?= urlencode($res['m_id']); ?>"><button type="button" class="btn btn-xs btn-danger">Delete</button>
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
