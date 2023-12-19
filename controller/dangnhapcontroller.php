<?php
session_start();
$message = "";
if (isset($_POST['dangnhap'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        $message = 'Tên đăng nhập và mật khẩu không được để trống!';
    } else {
        //kiểm tra đăng nhập
        $query = "SELECT * FROM `dangnhap` WHERE `tendn` = '$username' AND `matkhau` = '$password'";
        $result = mysqli_query($connect, $query);

        if ($result && mysqli_num_rows($result) == 1) {
            // Nếu đăng nhập thành công, lưu tên đăng nhập vào session và chuyển hướng đến trang chủ
            $_SESSION['dangnhap'] = $username;
            header("location: trangchu.php");
            exit; // Đảm bảo không có mã PHP tiếp theo được thực thi sau khi chuyển hướng
        } else {
            $message = 'Tên đăng nhập hoặc mật khẩu không chính xác!';
        }
    }
}
?>
