<?php

include_once('functions/function.php');
$id = $_GET['d'];
$oDB = new DB();
$res = $oDB->deleteProjectData($id);
if ($res)
{
    header('location: manage_projects.php');
}
else
{
    echo 'Failed to Delete Data !';
}
?>
