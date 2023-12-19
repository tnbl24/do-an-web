<?php
session_start();
require_once("../config/connect.php");
if (isset($_SESSION['dangnhap'])) {
    $username = $_SESSION['dangnhap'];
    $query = "SELECT kh.* FROM `dangnhap` dn JOIN `khachhang` kh ON dn.madn = kh.madn WHERE dn.tendn = '$username'";
    $result = mysqli_query($connect, $query);

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
        die("Lỗi khi lấy dữ liệu người dùng.");
    }

    // sửa
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["saveButton"])) {
        $newProfilePicture = $_POST['profilePictureInput'];
        $newname = $_POST['name'];
        $newbirthdate = $_POST["birthdate"];
        $newgender = $_POST["gender"];
        $newphone = $_POST['phone'];
        $newemail = $_POST['email'];
        $newaddress = $_POST['address'];
        $newbankName = $_POST['bankName'];
        $newaccountNumber = $_POST['accountNumber'];

        $newProfilePicture = $user['hinhanhkh']; // Giữ nguyên ảnh cũ nếu không có ảnh mới
        if (isset($_FILES['profilePictureInput']) && $_FILES['profilePictureInput']['error'] == UPLOAD_ERR_OK) {
            $tmp_name = $_FILES["profilePictureInput"]["tmp_name"];
            $newProfilePicture = "../material/img/" . basename($_FILES["profilePictureInput"]["name"]);
            move_uploaded_file($tmp_name, $newProfilePicture);
        }
    
        $updateData = array();
        
        // Thêm điều kiện cập nhật nếu trường có giá trị
        if (!empty($newname)) {
            $updateData[] = "`tenkh`='$newname'";
        }
    
        if (!empty($newbirthdate)) {
            $updateData[] = "`ngaysinhkh`='$newbirthdate'";
        }
    
        if (!empty($newgender)) {
            $updateData[] = "`gioitinhkh`='$newgender'";
        }
    
        if (!empty($newphone)) {
            $updateData[] = "`sdtkh`='$newphone'";
        }
    
        if (!empty($newemail)) {
            $updateData[] = "`emailkh`='$newemail'";
        }
    
        if (!empty($newaddress)) {
            $updateData[] = "`diachikh`='$newaddress'";
        }
    
        if (!empty($newbankName)) {
            $updateData[] = "`tennganhang`='$newbankName'";
        }
    
        if (!empty($newaccountNumber)) {
            $updateData[] = "`sotaikhoan`='$newaccountNumber'";
        }
    
        if (!empty($updateData)) {
            $updateQuery = "UPDATE `khachhang` SET " . implode(', ', $updateData) . " WHERE `madn` = (SELECT `madn` FROM `dangnhap` WHERE `tendn` = '$username')";
            if (mysqli_query($connect, $updateQuery)) {
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

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["deleteAccount"])) {
        $deleteQuery = "DELETE FROM `khachhang` WHERE `madn` = (SELECT `madn` FROM `dangnhap` WHERE `tendn` = '$username')";
        if (mysqli_query($connect, $deleteQuery)) {
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
