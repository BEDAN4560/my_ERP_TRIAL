<?php
include("includes/constants.inc.php");
// Connecting, selecting database
$link = mysql_connect('localhost','root','','') or die('Could not connect: ' . mysql_error());
mysql_select_db(DB_DATABASE) or die('Could not select database');
?>