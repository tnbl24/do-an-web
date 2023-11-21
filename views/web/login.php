<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../material/css/reset.css"> 
    <link rel="stylesheet" href="../material/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Form Login dog.vn</title>
</head>
<body>

    <div id="wrapper">
        <div id="baophu">
        <form action="" id="form-login">
            <h1 class="form-heading">ĐĂNG NHẬP</h1>
            <p>Đăng nhập để không bỏ lỡ bất kì khuyến mãi nào từ trang web của chúng tôi</p>
            <div class="form-group">
                <i class="bi bi-person-circle"></i>
                <input type="text" class="form-input" placeholder="Tên đăng nhập">
            </div>
            <div class="form-group">
                <i class="bi bi-key-fill"></i>
                <input type="password" class="form-input" placeholder="Mật khẩu">
                <div id="eye">
                    <i class="bi bi-eye"></i>
                </div>
            </div>
            <div> <a href="#" class="form-submit" >Đăng nhập</a> </div>
            <div><a href="../web/Resign.php" class="form-submit" >Đăng ký</a> </div>
            <p> Nếu bạn quên mật khẩu, bạn có thể sử dụng tính năng <a href="../web/forgot.php" class="form-forgot">Lấy mật khẩu</a> để lấy lại mật khẩu của mình. </p>
        </form>
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="../material/js/app.js"></script>
</html>