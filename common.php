<?php 
ob_start();
session_start();
include("includes/constants.inc.php");
include("includes/functions.php");
//include("includes/constants.php");
include("includes/messages.php");
include("classes/html_form.class.php");
include("classes/validator.class.php");
include("classes/Database.class.php");
$db = Database::getInstance('localhost', 'root', '','','erp2');




?>

