<?php
require_once("../config/connect.php");
if(isset($_SESSION['dangnhap'])){
    $username = $_SESSION['dangnhap'];
    $query = "SELECT kh.* FROM `dangnhap` dn JOIN `khachhang` kh ON dn.madn = kh.madn WHERE dn.tendn = '$username'";
    $result = mysqli_query($connect, $query);
    if ($result && $user = mysqli_fetch_assoc($result)) {
        $name = $user['tenkh'];
        $phone = $user['sdtkh'];
        $address = $user['diachikh'];
        $payment = $user['sotaikhoan'];
        $lmakh=$user['makh'];
    } else {
        die("Lỗi khi lấy dữ liệu người dùng.");
    }

    
        
}
?>
