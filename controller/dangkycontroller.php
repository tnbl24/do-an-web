<?php
require_once("../config/connect.php");
if(isset($POST['dangky']))
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $username = $_POST['uername'];
    $password = $_POST['password'];
    $ppassword = $_POST['ppassword'];
    $sql="select * from khachhang where tenkh='$name'";
    $result = mysqli_query($connect,$sql);
    $count_user = mysqli_num_rows($result);
    $sql="select * from khachhang where sđtkh='$phone'";
    $result = mysqli_query($connect,$sql);
    $count_phone = mysqli_num_rows($result);
    $sql="select * from dangnhap where tendn='$username'";
    $result = mysqli_query($connect,$sql);
    $count_username = mysqli_num_rows($result);
    if($count_user == 0 & $count_username == 0){
    }else{
        if($count_user > 0){
            echo '<script>
            window.location.hrefa="dangnhap.php"; 
            alert("Tên đăng nhập đã có");</script>
    $sql="select * from dangnhap where  matkhau='$passwork'";
    $result = mysqli_query($connect,$sql);
    $count_user = mysqli_num_rows($result);
    $sql="select * from khachhang where name='$name'";
    $result = mysqli_query($connect,$sql);
    $count_user = mysqli_num_rows($result);
}

?>