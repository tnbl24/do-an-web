<?php
require_once("../config/connect.php");
if(isset($_POST['name'])&&($_POST['username']))
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $username = $_POST['uername'];
    $password = $_POST['password'];
    $ppassword = $_POST['ppassword'];
    $sql1 = "INSERT INTO khachhang(tenkh, sđtkh) VALUES ('$name', '$phone')";
    $result1 = mysqli_query($connect, $sql1);
    // $count_user = mysqli_num_rows($result);
    // $sql="select * from khachhang where sđtkh='$phone'";
    // $result = mysqli_query($connect,$sql);
    // $count_phone = mysqli_num_rows($result);
    // $sql="select * from dangnhap where tendn='$username'";
    // $result = mysqli_query($connect,$sql);
    // $count_username = mysqli_num_rows($result);
    // if($count_user == 0 & $count_username == 0){
    //     if($password==$ppassword){
    //         $hash = password_hash($password,PASSWORD_DEFAULT);
    //         $sql = "INSERT INTO khachhang(tenkh,sđtkh) VALUES('$name', '$phone')";
    //         $result = mysqli_query($connect, $sql);
    //         if($result){
    //             header("location: dangnhap.php");
    //         }
    //     }
    // }else{
    //     if($count_user > 0){
    //         echo '<script>
    //         window.location.href="dangnhap.php"; 
    //         alert("Tên đăng nhập đã có");
    //         </script>'
    //     }
    // }
}

?>