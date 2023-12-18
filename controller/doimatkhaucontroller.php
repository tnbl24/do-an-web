<?php
session_start();
require_once("../config/connect.php");

if (isset($_SESSION['dangnhap'])) {
    $username = $_SESSION['dangnhap'];
    $oldPassword = $_POST['password'];
    $newPassword = $_POST['passwordnew'];
    $confirmPassword = $_POST['confirmpassword'];

    // Kiểm tra xem có trường nào trống không
    if (empty($oldPassword) || empty($newPassword) || empty($confirmPassword)) {
        $changePasswordMessage = "Vui lòng điền đầy đủ thông tin.";
    } else {
        // Kiểm tra mật khẩu cũ có đúng không
        $checkPasswordQuery = "SELECT matkhau FROM dangnhap WHERE tendn = ?";
        $stmt = mysqli_prepare($connect, $checkPasswordQuery);
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && $row = mysqli_fetch_assoc($result)) {
            $hashedPassword = $row['matkhau'];

            if (password_verify($oldPassword, $hashedPassword)) {
                // Mật khẩu cũ đúng, kiểm tra mật khẩu mới và xác nhận mật khẩu mới
                if ($newPassword === $confirmPassword) {
                    // Cập nhật mật khẩu mới vào cơ sở dữ liệu
                    $newHashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                    $updatePasswordQuery = "UPDATE dangnhap SET matkhau=? WHERE tendn = ?";
                    $stmt = mysqli_prepare($connect, $updatePasswordQuery);
                    mysqli_stmt_bind_param($stmt, "ss", $newHashedPassword, $username);
                    mysqli_stmt_execute($stmt);

                    $changePasswordMessage = "Đổi mật khẩu thành công.";

                    // Chuyển hướng về trang taikhoankh.php sau khi đổi mật khẩu thành công
                    header("Location: ../views/taikhoankh.php");
                    exit();
                } else {
                    $changePasswordMessage = "Mật khẩu mới không khớp.";
                }
            } else {
                $changePasswordMessage = "Mật khẩu cũ không đúng.";
            }
        } else {
            $changePasswordMessage = "Đã xảy ra lỗi khi kiểm tra mật khẩu.";
        }
    }
} else {
    header("location: ../views/dangnhap.php");
    exit;
}
?>
