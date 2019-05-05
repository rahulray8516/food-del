<?php
error_reporting(0);
session_start();
session_destroy();
session_unset();
echo "You Have Been LOgged Out";
echo "Redirecting.........................";
header( "refresh:1; url=intro.php" );
?>