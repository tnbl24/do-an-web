<?php
require_once("../config/connect.php");
?>
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

        .messagee {
            padding: 10px;
            border: 1px solid black;
            background: #7eaccb;
            text-align: center;
        }
    </style>
</head>

<body>

    <div id="wrapper">
        <?php
        session_start();
        $message = "";

        if (isset($_POST['maxacnhan'])) {
            $phone = $_POST['sodienthoai'];

            if (empty($phone)) {
                $message = 'Vui lòng nhập số điện thoại của bạn!';
            } else {
                $query = "SELECT * FROM khachhang WHERE sdtkh = '$phone'";
                $result = mysqli_query($connect, $query);

                if ($result && mysqli_num_rows($result) == 1) {
                    $_SESSION['maxacnhan'] = $phone;
                    header("location: matkhaumoi.php");
                    exit;
                } else {
                    $message = 'Số điện thoại không chính xác!';
                }
            }
        }
        ?>
        <form action="" id="form-login" method="POST">
            <h1 class="form-heading">NHẬP SỐ ĐIỆN THOẠI</h1>
            <p>Hệ thống sẽ gửi mã xác nhận về số điện thoại của bạn</p>
            <?php if (!empty($message)) : ?>
                <div class="messagee"><?php echo $message; ?></div>
            <?php endif; ?>

            <div class="form-group1">
                <input type="text" class="form-input" name="sodienthoai" placeholder="Nhập số điện thoại">
            </div>
            <div> <input type="submit" value="Gửi " name="maxacnhan" class="form-submit"> </div>
            <p> Trở về trang <a href="../views/dangnhap.php" class="form-forgot">đăng nhập</a></p>
        </form>
    </div>

</body>
<script src="../material/js/app.js"></script>

</html>