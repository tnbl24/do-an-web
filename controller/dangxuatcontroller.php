<?php
session_start();
unset($_SESSION['dangnhap']);
session_destroy(); // Hủy bỏ tất cả các phiên
header("Location: ../views/trangchu.php"); // Chuyển hướng về trang chủ
exit();
?>
