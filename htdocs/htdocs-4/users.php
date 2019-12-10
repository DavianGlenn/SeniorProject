<?php
error_reporting(E_ALL & ~E_NOTICE); 
session_start();
echo $_SESSION['logged_in'];
echo $_SESSION['use'];
echo $_SESSION['userid'];
echo $_SESSION['First'];
echo $_SESSION['Last'];


?>