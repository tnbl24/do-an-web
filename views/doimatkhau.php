<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once("../config/connect.php");

$message = "";

if (isset($_SESSION['dangnhap'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_SESSION['dangnhap'];
        $oldPassword = $_POST['password'];
        $newPassword = $_POST['passwordnew'];
        $confirmPassword = $_POST['confirmpassword'];

        if (empty($oldPassword) || empty($newPassword) || empty($confirmPassword)) {
            $message = "Vui lòng điền đầy đủ thông tin.";
        } else {
            // Kiểm tra mật khẩu cũ
            $checkPasswordQuery = "SELECT matkhau FROM dangnhap WHERE madn = '$username'";
            $checkPasswordResult = mysqli_query($connect, $checkPasswordQuery);

            if ($checkPasswordResult && $row = mysqli_fetch_assoc($checkPasswordResult)) {
                $storedPassword = $row['matkhau'];

                // Kiểm tra mật khẩu cũ
                if ($oldPassword === $storedPassword) {
                    // Mật khẩu cũ đúng, kiểm tra mật khẩu mới và xác nhận mật khẩu mới
                    if ($newPassword === $confirmPassword) {
                        // Cập nhật mật khẩu mới vào cơ sở dữ liệu
                        $updatePasswordQuery = "UPDATE dangnhap SET matkhau='$newPassword' WHERE madn = '$username'";
                        $updatePasswordResult = mysqli_query($connect, $updatePasswordQuery);

                        if ($updatePasswordResult) {
                            $message = "Đổi mật khẩu thành công.";
                        } else {
                            $message = "Đã xảy ra lỗi khi cập nhật mật khẩu mới.";
                        }
                    } else {
                        $message = "Mật khẩu mới không khớp.";
                    }
                } else {
                    $message = "Mật khẩu cũ không đúng.";
                }
            } else {
                $message = "Đã xảy ra lỗi khi kiểm tra mật khẩu.";
            }
        }
    }
} else {
    header("location: ../views/dangnhap.php");
    exit;
}
?>

    <div id="wrapper2">
        <form id="form-resign" method="POST">
            <h1 class="form-heading">ĐỔI MẬT KHẨU</h1>
            <?php if (!empty($message)) : ?>
                <div class="messagee"><?php echo $message; ?></div>
            <?php endif; ?>
            <div class="form-group1">
                <input type="password" class="form-input" name="password" placeholder="Nhập mật khẩu cũ">
                <div id="eye">
                    <i class="bi bi-eye"></i>
                </div>
            </div>
            <div class="form-group1">
                <input type="password" class="form-input" name="passwordnew" placeholder="Nhập mật khẩu mới">
                <div id="eye2">
                    <i class="bi bi-eye"></i>
                </div>
            </div>
            <div class="form-group1">
                <input type="password" class="form-input" name="confirmpassword" placeholder="Nhập lại mật khẩu mới">
                <div id="eye3">
                    <i class="bi bi-eye"></i>
                </div>
            </div>
            <div>
                <button type="submit" class="form-submit" style="width: 105px;"> XÁC NHẬN </button>
            </div>
            <p style="margin-top:25px;">
                <a href="../views/taikhoankh.php" class="form-forgot" style="color: #5296c9;">Quay lại</a>
            </p>
        </form>
    </div>

</body>

</html>