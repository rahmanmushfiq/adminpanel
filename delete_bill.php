<?php

include_once('functions/function.php');
$id = $_GET['db'];
$oDB = new DB();
$res = $oDB->deleteBillData($id);
if ($res)
{
    header('location: manage_bills.php');
}
else
{
    echo 'Failed to Delete Data !';
}
?>

