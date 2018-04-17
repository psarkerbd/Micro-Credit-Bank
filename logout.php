<?php
//session_start();
//unset($_SESSION);
//session_write_close();
$_SESSION['var'] = 0;
echo "logout ---- ";
echo var_dump($_SESSION['var']);
header('Refresh: 2; index.php');
die;
?>