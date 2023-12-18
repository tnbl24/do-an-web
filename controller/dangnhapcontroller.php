<?php
session_start();
// Khai báo biến để lưu trữ thông điệp
$message = "";

// Kiểm tra xem người dùng đã nhấn nút đăng nhập chưa
if (isset($_POST['dangnhap'])) {
    // Lấy dữ liệu từ form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kiểm tra xem tên đăng nhập và mật khẩu có được nhập không
    if (empty($username) || empty($password)) {
        // Nếu một trong các trường đều trống, gán thông điệp lỗi
        $message = 'Tên đăng nhập và mật khẩu không được để trống!';
    } else {
        // Nếu tên đăng nhập và mật khẩu đã được nhập, tiến hành kiểm tra đăng nhập
        $query = "SELECT * FROM `dangnhap` WHERE `tendn` = '$username' AND `matkhau` = '$password'";
        $result = mysqli_query($connect, $query);

        if ($result && mysqli_num_rows($result) == 1) {
            // Nếu đăng nhập thành công, lưu tên đăng nhập vào session và chuyển hướng đến trang chủ
            $_SESSION['dangnhap'] = $username;
            header("location: trangchu.php");
            exit; // Đảm bảo không có mã PHP tiếp theo được thực thi sau khi chuyển hướng
        } else {
            // Nếu đăng nhập không thành công, gán thông điệp lỗi
            $message = 'Tên đăng nhập hoặc mật khẩu không chính xác!';
        }
    }
}
?>
