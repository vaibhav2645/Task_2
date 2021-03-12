<?php
session_start();
session_unset(); 
setcookie("username", '', time() - (60*60*24) );
header('Location: index.php?p=logout');exit;
?>
