<?php
// Kiểm tra xem người dùng đã nhấn nút đăng nhập chưa
if (isset($_POST['dangnhap'])) {
    // Lấy dữ liệu từ form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kiểm tra xem tên đăng nhập và mật khẩu có được nhập không
    if (empty($username) || empty($password)) {
        // Nếu một trong các trường đều trống, hiển thị thông báo
        echo "<script>alert('Tên đăng nhập và mật khẩu không được để trống!');</script>";
    } else {
        // Nếu tên đăng nhập và mật khẩu đã được nhập, tiến hành kiểm tra đăng nhập
        $query = "SELECT * FROM `dangnhap` WHERE `tendn` = '$username' AND `matkhau` = '$password'";
        $result = mysqli_query($connect, $query);

        if ($result && mysqli_num_rows($result) == 1) {
            // Nếu đăng nhập thành công, bắt đầu session và chuyển hướng đến trang chủ
            session_start();
            $_SESSION['Dangnhap'] = $username;
            header("location: trangchu.php");
        } else {
            // Nếu đăng nhập không thành công, hiển thị thông báo
            echo "<script>alert('Tên đăng nhập hoặc mật khẩu không chính xác!');</script>";
        }
    }
}
?>