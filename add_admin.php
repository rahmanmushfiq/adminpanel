<?php

require_once("functions/function.php");
require_once("manage.php");
$oParts = new Parts();
$oParts->addHeader();
$oParts->addSidebar();
$oParts->addPage("addAdmin.php");
$oParts->addFooter();
?>