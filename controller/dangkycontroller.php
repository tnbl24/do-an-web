<?php
require_once("../config/connect.php");

$message = ""; // Tạo biến để lưu thông điệp

if (isset($_POST['dangky'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $rpassword = $_POST['rpassword'];

    // Kiểm tra xem tên đăng nhập đã tồn tại trong bảng dangnhap hay chưa
    $checkUsernameQuery = "SELECT * FROM dangnhap WHERE tendn = '$username'";
    $checkUsernameResult = mysqli_query($connect, $checkUsernameQuery);

    // Kiểm tra xem tên khách hàng và số điện thoại đã tồn tại trong bảng khachhang hay chưa
    $checkKhachHangQuery = "SELECT * FROM khachhang WHERE tenkh = '$name' AND sdtkh = '$phone'";
    $checkKhachHangResult = mysqli_query($connect, $checkKhachHangQuery);

    if (mysqli_num_rows($checkUsernameResult) > 0) {
        $message = 'Tên đăng nhập đã tồn tại!';
    } elseif (mysqli_num_rows($checkKhachHangResult) > 0) {
        $message = 'Khách hàng đã đăng ký!';
    } elseif (empty($name) || empty($phone) || empty($username) || empty($password) || empty($rpassword)) {
        $message = 'Vui lòng điền đủ thông tin!';
    } elseif ($password !== $rpassword) {
        $message = 'Mật khẩu nhập lại không khớp!';
    } else {
        // Thực hiện INSERT vào bảng dangnhap
        $sql1 = "INSERT INTO dangnhap(tendn, matkhau) VALUES ('$username','$password')";
        $result1 = mysqli_query($connect, $sql1);

        if ($result1) {
            // Lấy ID của bản ghi vừa được thêm vào bảng dangnhap
            $madn = mysqli_insert_id($connect);

            // Thực hiện INSERT vào bảng khachhang
            $sql2 = "INSERT INTO khachhang(tenkh, sdtkh, madn) VALUES ('$name','$phone',$madn)";
            $result2 = mysqli_query($connect, $sql2);

            if ($result2) {
                // Redirect đến trang đăng nhập
                header("location: dangnhap.php");
                exit;
            } else {
                $message = 'Đăng ký không thành công!';
            }
        } else {
            $message = 'Đăng ký không thành công!';
        }
    }
}
?>
