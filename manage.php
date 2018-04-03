<?php

include_once('functions/function.php');
if (!empty($_POST))
{
    $action = $_POST['action'];
    $msg = "";
    $ok = "";
    if ($action == 'bills')
    {
        if (!empty($_POST['billing_month']))
        {
            $bill_month = $_POST['billing_month'];
            if (preg_match("/^[a-z A-Z]*$/", $bill_month))
            {
                if (!empty($_POST['office_rent']))
                {
                    $bill_office = $_POST['office_rent'];
                    if (preg_match("/^[0-9\.]*$/", $bill_office))
                    {
                        if (!empty($_POST['current_bill']))
                        {
                            $bill_current = $_POST['current_bill'];
                            if (preg_match("/^[0-9\.]*$/", $bill_current))
                            {
                                if (!empty($_POST['gas_bill']))
                                {
                                    $bill_gas = $_POST['gas_bill'];
                                    if (preg_match("/^[0-9\.]*$/", $bill_gas))
                                    {
                                        if (!empty($_POST['water_bill']))
                                        {
                                            $bill_water = $_POST['water_bill'];
                                            if (preg_match("/^[0-9\.]*$/", $bill_water))
                                            {
                                                if (!empty($_POST['net_bill']))
                                                {
                                                    $bill_net = $_POST['net_bill'];
                                                    if (preg_match("/^[0-9\.]*$/", $bill_net))
                                                    {
                                                        if (!empty($_POST['maintenance_bill']))
                                                        {
                                                            $bill_maintenance = $_POST['maintenance_bill'];
                                                            if (preg_match("/^[0-9\.]*$/", $bill_maintenance))
                                                            {
                                                                $oDB = new DB();
                                                                $res = $oDB->insert_bills($bill_month, $bill_office, $bill_current, $bill_gas, $bill_water, $bill_net, $bill_maintenance);
                                                                if ($res)
                                                                {
                                                                    $ok = "Data Inserted Successfully !";
                                                                    $_POST = array();
                                                                }
                                                                else
                                                                {
                                                                    $msg = "Failed to Insert Data !";
                                                                }
                                                            }
                                                            else
                                                            {
                                                                $msg = "Invalid Maintenance Bill !";
                                                            }
                                                        }
                                                        else
                                                        {
                                                            $msg = "Please Provide Maintenance Bill !";
                                                        }
                                                    }
                                                    else
                                                    {
                                                        $msg = "Invalid Internet Bill !";
                                                    }
                                                }
                                                else
                                                {
                                                    $msg = "Please Provide Internet Bill !";
                                                }
                                            }
                                            else
                                            {
                                                $msg = "Invalid Water Bill !";
                                            }
                                        }
                                        else
                                        {
                                            $msg = "Please Provide Water Bill !";
                                        }
                                    }
                                    else
                                    {
                                        $msg = "Invalid Gas Bill !";
                                    }
                                }
                                else
                                {
                                    $msg = "Please Provide Gas Bill !";
                                }
                            }
                            else
                            {
                                $msg = "Invalid Current Bill !";
                            }
                        }
                        else
                        {
                            $msg = "Please Provide Current Bill !";
                        }
                    }
                    else
                    {
                        $msg = "Invalid Office Rent !";
                    }
                }
                else
                {
                    $msg = "Please Provide Office Rent !";
                }
            }
            else
            {
                $msg = "Invalid Month Type !";
            }
        }
        else
        {
            $msg = "Please Select Billing Month !";
        }
    }
    elseif ($action == 'projects')
    {
        if (!empty($_POST['project_cat']))
        {
            $p_category = $_POST['project_cat'];
            if (preg_match("/^[a-z A-z]*$/", $p_category))
            {
                if (!empty($_POST['project_title']))
                {
                    $p_title = $_POST['project_title'];
                    if (preg_match("/^[a-z A-Z0-9]*$/", $p_title))
                    {
                        if (!empty($_POST['project_price']))
                        {
                            $p_price = $_POST['project_price'];
                            if (preg_match("/^[0-9\.]*$/", $p_price))
                            {
                                if (!empty($_POST['number_of_sold_copy']))
                                {
                                    $p_sold = $_POST['number_of_sold_copy'];
                                    if (preg_match("/^[0-9]*$/", $p_sold))
                                        if (!empty($_POST['sold_by']))
                                        {
                                            $p_soldby = $_POST['sold_by'];
                                            if (preg_match("/^[a-zA-Z]*$/", $p_soldby))
                                            {
                                                if ($_POST['project_price'] && $_POST['number_of_sold_copy'] > 0)
                                                {
                                                    $oDB = new DB();
                                                    $res = $oDB->insert_project($p_category, $p_title, $p_price, $p_sold, $p_soldby);
                                                    if ($res)
                                                    {
                                                        $ok = "Data Inserted Seccessfully !";
                                                        $_POST = array();
                                                    }
                                                    else
                                                    {
                                                        $msg = "Failed to Insert Data !";
                                                    }
                                                }
                                                else
                                                {
                                                    $msg = "Invalid Price or Number of Sold Copy !";
                                                }
                                            }
                                            else
                                            {
                                                $msg = "Invalid Name !";
                                            }
                                        }
                                        else
                                        {
                                            $msg = "Please Provide Seller Name !";
                                        }
                                    else
                                    {
                                        $msg = "Invalid Format of Sold Copy !";
                                    }
                                }
                                else
                                {
                                    $msg = "Please Provide Number of Sold Copy !";
                                }
                            }
                            else
                            {
                                $msg = "Invalid Project Price !";
                            }
                        }
                        else
                        {
                            $msg = "Please Provide a Price !";
                        }
                    }
                    else
                    {
                        $msg = "Invalid Project Title !";
                    }
                }
                else
                {
                    $msg = "Please Provide a Title !";
                }
            }
            else
            {
                $msg = "Invalid Project Category !";
            }
        }
        else
        {
            $msg = "Please Select a Category !";
        }
    }
    elseif ($action == 'edit_project_form')
    {
        if (!empty($_POST['project_cat']))
        {
            $p_category = $_POST['project_cat'];
            if (preg_match("/^[a-z A-z]*$/", $p_category))
            {
                if (!empty($_POST['project_title']))
                {
                    $p_title = $_POST['project_title'];
                    if (preg_match("/^[a-z A-Z0-9]*$/", $p_title))
                    {
                        if (!empty($_POST['project_price']))
                        {
                            $p_price = $_POST['project_price'];
                            if (preg_match("/^[0-9\.]*$/", $p_price))
                            {
                                if (!empty($_POST['number_of_sold_copy']))
                                {
                                    $p_sold = $_POST['number_of_sold_copy'];
                                    if (preg_match("/^[0-9]*$/", $p_sold))
                                    {
                                        if (!empty($_POST['sold_by']))
                                        {
                                            $p_soldby = $_POST['sold_by'];
                                            if (preg_match("/^[a-zA-Z]*$/", $p_soldby))
                                            {
                                                if ($_POST['project_price'] && $_POST['number_of_sold_copy'] > 0)
                                                {
                                                    $p_id = $_POST['project_id'];
                                                    $oDB = new DB();
                                                    $res = $oDB->editProjectData($p_id, $p_category, $p_title, $p_price, $p_sold, $p_soldby);
                                                    if ($res)
                                                    {
                                                        $ok = "Projects Updated Seccessfully !";
                                                        $_POST = array();
                                                    }
                                                    else
                                                    {
                                                        $msg = "Failed to Update Projects !";
                                                    }
                                                }
                                            }
                                            else
                                            {
                                                $msg = "Invalid Seller Name !";
                                            }
                                        }
                                        else
                                        {
                                            $msg = "Please Provide Seller Name !";
                                        }
                                    }
                                    else
                                    {
                                        $msg = "Invalid Format of Sold Copy !";
                                    }
                                }
                                else
                                {
                                    $msg = "Please Provide Number of Sold Copy !";
                                }
                            }
                            else
                            {
                                $msg = "Invalid Project Price !";
                            }
                        }
                        else
                        {
                            $msg = "Please Provide a Price !";
                        }
                    }
                    else
                    {
                        $msg = "Invalid Project Title !";
                    }
                }
                else
                {
                    $msg = "Please Provide a Title !";
                }
            }
            else
            {
                $msg = "Invalid Project Category !";
            }
        }
        else
        {
            $msg = "Please Select a Category !";
        }
    }
    elseif ($action == 'edit_bill_form')
    {
        if (!empty($_POST['billing_month']))
        {
            $bill_month = $_POST['billing_month'];
            if (preg_match("/^[a-zA-Z]{3}/", $bill_month))
            {
                if (!empty($_POST['office_rent']))
                {
                    $bill_office = $_POST['office_rent'];
                    if (preg_match("/^[0-9\.]*$/", $bill_office))
                    {
                        if (!empty($_POST['current_bill']))
                        {
                            $bill_current = $_POST['current_bill'];
                            if (preg_match("/^[0-9\.]*$/", $bill_current))
                            {
                                if (!empty($_POST['gas_bill']))
                                {
                                    $bill_gas = $_POST['gas_bill'];
                                    if (preg_match("/^[0-9\.]*$/", $bill_gas))
                                    {
                                        if (!empty($_POST['water_bill']))
                                        {
                                            $bill_water = $_POST['water_bill'];
                                            if (preg_match("/^[0-9\.]*$/", $bill_water))
                                            {
                                                if (!empty($_POST['net_bill']))
                                                {
                                                    $bill_net = $_POST['net_bill'];
                                                    if (preg_match("/^[0-9\.]*$/", $bill_net))
                                                    {
                                                        if (!empty($_POST['maintenance_bill']))
                                                        {
                                                            $bill_maintenance = $_POST['maintenance_bill'];
                                                            if (preg_match("/^[0-9\.]*$/", $bill_maintenance))
                                                            {
                                                                $bill_id = $_POST['bill_id'];
                                                                $oDB = new DB();
                                                                $res = $oDB->editBillData($bill_id, $bill_month, $bill_office, $bill_current, $bill_gas, $bill_water, $bill_net, $bill_maintenance);
                                                                if ($res)
                                                                {
                                                                    $ok = "Bills Updated Successfully !";
                                                                    $_POST = array();
                                                                }
                                                                else
                                                                {
                                                                    $msg = "Failed to Update Bills !";
                                                                }
                                                            }
                                                            else
                                                            {
                                                                $msg = "Invalid Maintenance Bill !";
                                                            }
                                                        }
                                                        else
                                                        {
                                                            $msg = "Please Provide Maintenance Bill !";
                                                        }
                                                    }
                                                    else
                                                    {
                                                        $msg = "Invalid Internet Bill !";
                                                    }
                                                }
                                                else
                                                {
                                                    $msg = "Please Provide Internet Bill !";
                                                }
                                            }
                                            else
                                            {
                                                $msg = "Invalid Water Bill !";
                                            }
                                        }
                                        else
                                        {
                                            $msg = "Please Provide Water Bill !";
                                        }
                                    }
                                    else
                                    {
                                        $msg = "Invalid Gas Bill !";
                                    }
                                }
                                else
                                {
                                    $msg = "Please Provide Gas Bill !";
                                }
                            }
                            else
                            {
                                $msg = "Invalid Current Bill !";
                            }
                        }
                        else
                        {
                            $msg = "Please Provide Current Bill !";
                        }
                    }
                    else
                    {
                        $msg = "Invalid Office Rent !";
                    }
                }
                else
                {
                    $msg = "Please Provide Office Rent !";
                }
            }
            else
            {
                $msg = "Invalid Month Type !";
            }
        }
        else
        {
            $msg = "Please Provide Billing Month !";
        }
    }
}
?>