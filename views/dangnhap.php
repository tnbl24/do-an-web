<?php
require_once("../config/connect.php");
require_once("../controller/dangnhapcontroller.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../material/css/dangnhap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Form Login dog.vn</title>
</head>

<body>

    <div id="wrapper">
        <div id="baophu">
            <form name="form" id="form-login" method="POST">
                <h1 class="form-heading">ĐĂNG NHẬP</h1>
                <?php if (!empty($message)) : ?>
                    <div class="messagee"><?php echo $message; ?></div>
                <?php endif; ?>
                <div class="form-group">
                    <i class="bi bi-person-circle"></i>
                    <input type="text" name="username" class="form-input" placeholder="Tên đăng nhậpzz">
                </div>
                <div class="form-group">
                    <i class="bi bi-key-fill"></i>
                    <input type="password" name="password" class="form-input" placeholder="Mật khẩu">
                    <div id="eye">
                        <i class="bi bi-eye"></i>
                    </div>
                </div>
                <div>
                    <input type="submit" value="ĐĂNG NHẬP " name="dangnhap" class="form-submit">
                </div>
                <div><a href="../views/dangky.php" class="form-submit">Đăng ký</a> </div>
                <p> Nếu bạn quên mật khẩu, bạn có thể sử dụng tính năng <a href="../views/maxacnhan.php" class="form-forgot">Lấy mật khẩu</a> để lấy lại mật khẩu của mình. </p>
            </form>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="../material/js/app.js"></script>

</html>