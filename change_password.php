<?php

require_once("functions/function.php");
$oParts = new Parts();
$oParts->addHeader();
$oParts->addSidebar();
$oParts->addPage("changePass.php");
$oParts->addFooter();
?>