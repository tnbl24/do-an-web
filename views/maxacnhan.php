<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login dog.vn</title>
    <style>
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

        .form-submit {
            display: flex;
            background: transparent;
            border: 1px solid #f5f5f5;
            color: #fff;
            text-transform: uppercase;
            padding: 2% 45%;
            transition: 0.25s ease-in-out;
            text-decoration: none;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <div id="wrapper">
        <?php
        session_start();

        // Kiểm tra xem form đã được gửi đi hay chưa
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Kiểm tra xem mã xác nhận có đúng không
            $maXacNhanDuocNhap = $_POST['maXacNhan']; // Tên của trường nhập mã xác nhận trong form
            $maXacNhanDung = "111"; // Mã xác nhận đúng

            if ($maXacNhanDuocNhap == $maXacNhanDung) {
                // Nếu mã xác nhận đúng, chuyển hướng đến trang matkhaumoi.php
                header("Location: ../views/matkhaumoi.php");
                exit;
            } else {
                // Nếu mã xác nhận không đúng, hiển thị thông báo lỗi
                $message = "Mã xác nhận không đúng. Vui lòng thử lại.";
            }
        }
        ?>
        <form action="" id="form-login" name="maXacNhan" method="POST">
            <h1 class="form-heading">NHẬP MÃ XÁC NHẬN</h1>
            <?php if (!empty($message)) : ?>
                <div class="messagee"><?php echo $message; ?></div>
            <?php endif; ?>
            <p>Nhập mã xác nhận vừa được gửi về email của bạn</p>
            <div class="form-group1">
                <input type="text" class="form-input" placeholder="Nhập mã xác nhận">
            </div>
            <div> <a href="../views/matkhaumoi.php" class="form-submit">Gửi</a> </div>
            <p> Trở về trang <a href="../views/dangnhap.php" class="form-forgot">đăng nhập</a></p>
        </form>
    </div>

</body>
<script src="../material/js/app.js"></script>

</html>