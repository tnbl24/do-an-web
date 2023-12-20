<?php
require_once("../config/connect.php");
if (isset($_SESSION['dangnhap'])) {
    $username = $_SESSION['dangnhap'];
    $lquery1 = "SELECT khachhang.makh FROM khachhang INNER JOIN dangnhap ON khachhang.madn=dangnhap.madn
    WHERE dangnhap.tendn='$username'";
    $lresult1 = mysqli_query($connect, $lquery1);
    $lrow = mysqli_fetch_assoc($lresult1);
    $lmakh = $lrow['makh'];

    $ghh = "SELECT COUNT(giohang.mac) as soluong FROM giohang WHERE makh =$lmakh";
    $result = mysqli_query($connect, $ghh);
    if (mysqli_num_rows($result) > 0) {
        $rgh = mysqli_fetch_assoc($result);
        $rghh = $rgh['soluong'];
    } else $rghh = 0;
}
if (isset($_POST['order'])) {
    $method_payment = $_POST['method-payment'];
    $sql = "INSERT INTO donhang(makh,ptthanhtoan) VALUES($lmakh,'$method_payment');";
    $result = mysqli_query($connect, $sql);
    $sql = "SELECT * FROM donhang ORDER BY madh DESC LIMIT 1;";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
    $madh = $row['madh'];
    foreach ($_POST['abc'] as $key) {
        echo $key;
        $sql = "INSERT INTO donhangchitiet(madh,mac) VALUES($madh,$key);";
        $result = mysqli_query($connect, $sql);
        $sql2 = "DELETE giohang FROM giohang WHERE makh=$lmakh AND mac=$key";
        $result2 = mysqli_query($connect, $sql2);
        $sql3 = "UPDATE cho set cho.soluongc =0 WHERE cho.mac =$key";
        $result3 = mysqli_query($connect, $sql3);
        $sql4 = "INSERT INTO lichsucapnhatdonhang (mattdh, madh, ngaycapnhat) VALUES (1, $madh, CURRENT_TIMESTAMP())";
        $result4 = mysqli_query($connect, $sql4);
    }
    header('Location: donhangchitiet.php?madhct=' . $madh . '');
}

if (isset($_REQUEST['checkout'])) {
    $selectedcount = empty($_REQUEST['selectedProducts']);
    if ($selectedcount) {
        header('location:giohang.php');
        $_SESSION['error'] ="Vui lòng chọn ít nhất 1 sản phẩm để thanh toán!";
    }
} 
