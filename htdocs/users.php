<?php
error_reporting(E_ALL & ~E_NOTICE); 
session_start();

echo $_SESSION['use'];
echo $_SESSION['userid'];

?>