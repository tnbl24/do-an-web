<?php
session_start();
require_once("../config/connect.php");

$message = "";

if (isset($_POST['matkhau'])) {
    $verificationCode = $_POST['maxacnhan'];
    $newPassword = $_POST['matkhaumoi'];
    $confirmedPassword = $_POST['nhaplaimatkhau'];

    if ($verificationCode != '111') {
        $message = 'Mã xác nhận không chính xác!';
    } elseif ($newPassword != $confirmedPassword) {
        $message = 'Mật khẩu không khớp!';
    } else {
        // Lấy thông tin khách hàng từ bảng 'khachhang' dựa trên số điện thoại
        $phone = $_SESSION['maxacnhan'];
        $customerQuery = "SELECT * FROM khachhang WHERE sdtkh = '$phone'";
        $customerResult = mysqli_query($connect, $customerQuery);

        if ($customerResult && mysqli_num_rows($customerResult) == 1) {
            $customerData = mysqli_fetch_assoc($customerResult);
            $madn = $customerData['madn'];

            // Cập nhật mật khẩu trong bảng 'dangnhap'
            $updatePasswordQuery = "UPDATE dangnhap SET matkhau='$newPassword' WHERE madn = '$madn'";

            $updatePasswordResult = mysqli_query($connect, $updatePasswordQuery);

            if ($updatePasswordResult) {
                $message = 'Đổi mật khẩu thành công!';
            } else {
                $message = 'Đổi mật khẩu thất bại!';
            }
        } else {
            $message = 'Số điện thoại không chính xác!';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Form Login dog.vn</title>
    <style>
        .form-submit {
            display: flex;
            background: transparent;
            border: 1px solid #f5f5f5;
            color: #fff;
            text-transform: uppercase;
            padding: 10px 120px;
            transition: 0.25s ease-in-out;
            text-decoration: none;
            margin-top: 10px;
            font-size: 14px;
            font-family: initial;
        }

        body {
            background: linear-gradient(to bottom, #2980b9, #2c3e50);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            height: 70vh;
            font-size: 16px;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }

        #wrapper2 {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #form-login {
            margin-top: 200px;
            max-width: 400px;
            background: rgba(0, 0, 0, 0.8);
            flex-grow: 1;
            padding: 30px 30px 40px;
            box-shadow: 0px 0px 17px 2px rgba(255, 255, 255, 0.8);
        }

        #form-resign {
            margin-top: 200px;
            max-width: 450px;
            max-height: 600px;
            background: rgba(0, 0, 0, 0.8);
            flex-grow: 1;
            padding: 30px 30px 40px;
            box-shadow: 0px 0px 17px 2px rgba(255, 255, 255, 0.8);
        }

        .form-heading {
            font-size: 25px;
            color: #fff;
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group1 {
            border: 1px solid #fff;
            border-radius: 5px;
            padding: 5px 5px;
            margin-top: 10px;
            margin-bottom: 20px;
            display: flex;
        }

        .form-group1 i {
            color: #fff;
            font-size: 16px;
            padding-right: 8px;

        }

        .form-input {
            background: transparent;
            border: 0;
            outline: 0;
            color: #fff;
            flex-grow: 1;
        }

        .form-input::placeholder {
            color: rgba(255, 255, 255, 0.4);
        }

        #eye i {
            cursor: pointer;
        }

        .messagee {
            padding: 10px;
            border: 1px solid black;
            background: #7eaccb;
            text-align: center;
        }
    </style>
</head>

<body>

    <div id="wrapper2">
        <form action="" id="form-resign" method="POST">
            <h1 class="form-heading">NHẬP MẬT KHẨU MỚI</h1>
            <?php if (!empty($message)) : ?>
                <div class="messagee"><?php echo $message; ?></div>
            <?php endif; ?>
            <div class="form-group1">
                <input type="text" class="form-input" name="maxacnhan" placeholder="Nhập mã xác nhận">
            </div>
            <div class="form-group1">
                <input type="password" class="form-input" name="matkhaumoi" placeholder="Tạo mật khẩu mới">
                <div id="eye">
                    <i class="bi bi-eye"></i>
                </div>
            </div>
            <div class="form-group1">
                <input type="password" class="form-input" name="nhaplaimatkhau" placeholder="Nhập lại mật khẩu">
                <div id="eye2">
                    <i class="bi bi-eye"></i>
                </div>
            </div>
            <div>
                <input type="submit" value="XÁC NHẬN" name="matkhau" class="form-submit"></input>
            </div>
            <p>Quay lại trang <a href="../views/dangnhap.php" class="form-forgot">đăng nhập</a></p>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="../material/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
</body>

</html>