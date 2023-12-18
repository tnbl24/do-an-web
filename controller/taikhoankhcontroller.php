<?php
session_start();
require_once("../config/connect.php");
if(isset($_SESSION['dangnhap'])){
    $username = $_SESSION['dangnhap'];
    $query = "SELECT kh.* FROM `dangnhap` dn JOIN `khachhang` kh ON dn.madn = kh.madn WHERE dn.tendn = '$username'";
    $result = mysqli_query($connect, $query);

    // Kiểm tra xem truy vấn và lấy dữ liệu người dùng
    if ($result && $user = mysqli_fetch_assoc($result)) {
        $profilePictureInput = $user['hinhanhkh'];
        $name = $user['tenkh'];
        $birthdate = $user['ngaysinhkh'];
        $gender = $user['gioitinhkh'];
        $phone = $user['sdtkh'];
        $email = $user['emailkh'];
        $address = $user['diachikh'];
        $bankName = $user['tennganhang'];
        $accountNumber = $user['sotaikhoan'];
    } else {
        // Xử lý trường hợp không lấy được dữ liệu người dùng
        die("Lỗi khi lấy dữ liệu người dùng.");
    }

    // sửa
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["saveButton"])) {
        // Lấy thông tin từ form
        $newProfilePicture = $_POST['profilePictureInput'];
        $newname = $_POST['name'];
        $newbirthdate = $_POST["birthdate"];
        $newgender = $_POST["gender"];
        $newphone = $_POST['phone'];
        $newemail = $_POST['email'];
        $newaddress = $_POST['address'];
        $newbankName = $_POST['bankName'];
        $newaccountNumber = $_POST['accountNumber'];
        // Xử lý tải lên ảnh đại diện
        if (isset($_FILES['profilePictureInput']) && $_FILES['profilePictureInput']['error'] == UPLOAD_ERR_OK) {
            $tmp_name = $_FILES["profilePictureInput"]["tmp_name"];
            $newProfilePicture = "uploads/" . basename($_FILES["profilePictureInput"]["name"]);
            move_uploaded_file($tmp_name, $newProfilePicture);

            // Cập nhật đường dẫn mới vào cơ sở dữ liệu
            $updatePictureQuery = "UPDATE `khachhang` SET `hinhanhkh`='$newProfilePicture' WHERE `madn` = (SELECT `madn` FROM `dangnhap` WHERE `tendn` = '$username')";
            mysqli_query($connect, $updatePictureQuery);
        }
        // Cập nhật thông tin trong cơ sở dữ liệu
        $updateQuery = "UPDATE `khachhang` SET `hinhanhkh`='$newProfilePicture',`tenkh`='$newname',`ngaysinhkh`='$newbirthdate', `gioitinhkh`='$newgender',`sdtkh`='$newphone',`emailkh`='$newemail',`diachikh`='$newaddress',`tennganhang`='$newbankName',`sotaikhoan`='$newaccountNumber' WHERE `madn` = (SELECT `madn` FROM `dangnhap` WHERE `tendn` = '$username')";

        if (mysqli_query($connect, $updateQuery)) {
            // Cập nhật lại biến hiển thị
            $name = $newname;
            $birthdate = $newbirthdate;
            $gender = $newgender;
            $phone = $newphone;
            $email = $newemail;
            $address = $newaddress;
            $bankName = $newbankName;
            $accountNumber = $newaccountNumber;
        } else {
            echo "Lỗi khi cập nhật thông tin: " . mysqli_error($connect);
        }
    }

    // xóa
    // Thêm một biểu mẫu xác nhận xóa tài khoản
    echo "<form method='post' id='deleteForm' action='" . $_SERVER['PHP_SELF'] . "'>";
    echo "<input type='hidden' name='deleteAccount' value='true'>";
    echo "</form>";

    // JavaScript để xác nhận và gửi biểu mẫu
    echo "<script>
    function confirmDelete() {
        var result = confirm('Bạn có chắc chắn muốn xóa tài khoản không?');
        if (result) {
            document.getElementById('deleteForm').submit();
        }
    }
</script>";

    // Thêm kiểm tra và xử lý xóa tài khoản trong PHP
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["deleteAccount"])) {
        $deleteQuery = "DELETE FROM `khachhang` WHERE `madn` = (SELECT `madn` FROM `dangnhap` WHERE `tendn` = '$username')";
        if (mysqli_query($connect, $deleteQuery)) {
            // Xóa session và chuyển hướng người dùng về trang chủ
            session_destroy();
            header("location: ../views/trangchu.php");
            exit;
        } else {
            echo "Lỗi khi xóa tài khoản: " . mysqli_error($connect);
        }
    }
    
} else {
    header("location: ../views/dangnhap.php");
    exit;
}