<?php
session_start();
unset($_SESSION['dangnhap']);
header("Location: ../views/trangchu.php"); 
exit();
?>
