<?php
require_once("../config/connect.php");
if(isset($_SESSION['dangnhap'])){
    $username= $_SESSION['dangnhap'] ;
    $lquery1 ="SELECT khachhang.makh FROM khachhang INNER JOIN dangnhap ON khachhang.madn=dangnhap.madn
    WHERE dangnhap.tendn='$username'";
    $lresult1 =mysqli_query($connect,$lquery1);
    $lrow = mysqli_fetch_assoc($lresult1);
    $lmakh=$lrow['makh'];

    $ghh="SELECT COUNT(giohang.mac) as soluong FROM giohang  
WHERE makh =$lmakh";
$result = mysqli_query($connect,$ghh);
if(mysqli_num_rows($result)>0)
{
    $rgh=mysqli_fetch_assoc($result);
    $rghh = $rgh['soluong'];
}
else $rghh=0;
}



