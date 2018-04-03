<?php

/* For Content */

class Parts {

    public function addHeader()
    {
        require_once("includes/header.php");
    }

    public function addSidebar()
    {
        require_once("includes/sidebar.php");
    }

    public function addPage($pageName)
    {
        require_once("includes/" . $pageName);
    }

    public function addFooter()
    {
        require_once("includes/footer.php");
    }

}

/* Database Class */

class DB {

    private $serverName = "localhost";
    private $userName = "root";
    private $passWord = "";
    private $dbName = "psam";
    private $con;

    public function __construct()
    {
        $this->dbConnect();
    }

    public function dbConnect()
    {
        $this->con = mysqli_connect($this->serverName, $this->userName, $this->passWord, $this->dbName);
        return $this->con;
    }

    //Project Queries

    public function insert_project($p_category, $p_title, $p_price, $p_sold, $p_soldby)
    {
        $con = $this->dbConnect();
        if ($con)
        {
            $query = "INSERT INTO tbl_project(p_category,p_title,p_price,p_quantity,p_soldby) VALUES ('$p_category','$p_title','$p_price','$p_sold','$p_soldby')";
            $result = mysqli_query($con, $query);
            if ($result)
            {
                return TRUE;
            }
            else
            {
                echo mysqli_error($con);
            }
        }
    }

    public function getProjectData($id)
    {
        $query = "SELECT * FROM tbl_project WHERE p_id = '$id'";
        $res = mysqli_query($this->con, $query);
        return mysqli_fetch_assoc($res);
    }

    public function editProjectData($id, $p_category, $p_title, $p_price, $p_sold, $p_soldby)
    {
        $query = "UPDATE tbl_project SET p_category = '$p_category', p_title = '$p_title', p_price = '$p_price', p_quantity = '$p_sold', p_soldby = '$p_soldby' WHERE p_id = '$id'";
        $res = mysqli_query($this->con, $query);
        if ($res)
        {
            return TRUE;
        }
        return FALSE;
    }

    public function deleteProjectData($id)
    {
        $query = "DELETE FROM tbl_project WHERE p_id = '$id'";
        $res = mysqli_query($this->con, $query);
        if ($res)
        {
            return TRUE;
        }
        return FALSE;
    }

    public function manageProjectData()
    {
        $query = "SELECT * FROM tbl_project ORDER BY p_id DESC";
        $res = mysqli_query($this->con, $query);
        return $res;
    }

    //Bill Queries

    public function insert_bills($bill_month, $bill_office, $bill_current, $bill_gas, $bill_water, $bill_net, $bill_maintenance)
    {
        $con = $this->dbConnect();
        if ($con)
        {
            $query = "INSERT INTO tbl_bills(b_month,b_office,b_current,b_gas,b_water,b_net,b_maintenance) VALUES ('$bill_month', '$bill_office', '$bill_current', '$bill_gas', '$bill_water', '$bill_net','$bill_maintenance')";
            $result = mysqli_query($con, $query);
            if ($result)
            {
                return TRUE;
            }
            else
            {
                echo mysqli_error($con);
            }
        }
    }

    public function manageBillData()
    {
        $query = "SELECT * FROM tbl_bills ORDER BY b_id DESC";
        $res = mysqli_query($this->con, $query);
        return $res;
    }

    public function getBillData($id)
    {
        $query = "SELECT * FROM tbl_bills WHERE b_id = '$id'";
        $res = mysqli_query($this->con, $query);
        return mysqli_fetch_assoc($res);
    }

    public function editBillData($id, $bill_month, $bill_office, $bill_current, $bill_gas, $bill_water, $bill_net, $bill_maintenance)
    {
        $query = "UPDATE tbl_bills SET b_month = '$bill_month', b_office = '$bill_office', b_current = '$bill_current', b_gas = '$bill_gas', b_water = '$bill_water', b_net = '$bill_net', b_maintenance = '$bill_maintenance' WHERE b_id = '$id'";
        $res = mysqli_query($this->con, $query);
        if ($res)
        {
            return TRUE;
        }
        return FALSE;
    }

    public function deleteBillData($id)
    {
        $query = "DELETE FROM tbl_bills WHERE b_id = '$id'";
        $res = mysqli_query($this->con, $query);
        if ($res)
        {
            return TRUE;
        }
        return FALSE;
    }

    //Message Queries

    public function manageMessageData()
    {
        $query = "SELECT * FROM tbl_message ORDER BY m_id DESC";
        $res = mysqli_query($this->con, $query);
        return $res;
    }

    public function deleteMessageData($id)
    {
        $query = "DELETE FROM tbl_message WHERE m_id = '$id'";
        $res = mysqli_query($this->con, $query);
        if ($res)
        {
            return TRUE;
        }
        return FALSE;
    }

    public function getMessageData($id)
    {
        $query = "SELECT * FROM tbl_message WHERE m_id = '$id'";
        $res = mysqli_query($this->con, $query);
        return mysqli_fetch_assoc($res);
    }

    //Dashboard Queries
    public function viewProjectQuantity()
    {
        $query = "SELECT COUNT(*) FROM tbl_project";
        $res = mysqli_query($this->con, $query);
        if ($res)
        {
            return TRUE;
        }
        return FALSE;
    }

}
