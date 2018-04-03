<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li>
            <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard </a>
        </li>
        <li class="dropdown active">
            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-user"></i> Admin <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo" class="collapse">
                <li>
                    <a href="add_admin.php">Add</a>
                </li>
                <li>
                    <a href="manage_admin.php">Manage</a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="javascript:;" data-toggle="collapse" data-target="#project"><i class="fa fa-fw fa-wrench"></i> Projects <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="project" class="collapse">
                <li>
                    <a href="add_projects.php">Add</a>
                </li>
                <li>
                    <a href="manage_projects.php">Manage</a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="javascript:;" data-toggle="collapse" data-target="#bill"><i class="fa fa-fw fa-table"></i> Bills <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="bill" class="collapse">
                <li>
                    <a href="add_bills.php">Add</a>
                </li>
                <li>
                    <a href="manage_bills.php">Manage</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="messages.php"><i class="fa fa-fw fa-comments"></i> Messages</a>
        </li>
    </ul>
</div>
<!-- /.navbar-collapse -->
</nav>