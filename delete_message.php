<?php

include_once('functions/function.php');
$id = $_GET['dm'];
$oDB = new DB();
$res = $oDB->deleteMessageData($id);
if ($res)
{
    header('location: messages.php');
}
else
{
    echo 'Failed to Delete Data !';
}
?>

