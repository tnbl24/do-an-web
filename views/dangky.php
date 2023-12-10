<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../material/css/reset.css"> 
    <link rel="stylesheet" href="../material/css/dangnhap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Form Login dog.vn</title>
</head>
<body>

    <div id="wrapper2">
        <form action="" id="form-resign">
            <h1 class="form-heading">ĐĂNG KÝ</h1>
            <p>Đăng ký tài khoản để truy cập vào trang web của chúng tôi</p>
            <div class="form-group1">
                <input type="text" class="form-input" placeholder="Nhập họ và tên của bạn" name="name" minlength="3" maxlength="100">
            </div>
            <div class="form-group1">
                <input type="text" class="form-input" placeholder="Nhập số điện thoại của bạn" name="phone" required
                pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" />
            </div>
            <div class="form-group1">
                <input type="text" class="form-input" placeholder="Tên đăng nhập">
            </div>
            <div class="form-group1">
                <input type="password" class="form-input" placeholder="Tạo mật khẩu mới">
                <div id="eye">
                    <i class="bi bi-eye"></i>
                </div>
            </div>
            <div class="form-group1">
                <input type="password" class="form-input" placeholder="Nhập lại mật khẩu">
                <div id="eye2">
                    <i class="bi bi-eye"></i>
                </div>
            </div>
            <div><a href="../views/dangky.php" class="form-submit" >Đăng ký</a> </div>
            <p> Bạn đã có tài khoản? Quay lại trang <a href="../views/dangnhap.php" class="form-forgot">đăng nhập</a></p>
        </form>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="../material/js/app.js"></script>
<script src="https://code.jquery.com/jquery-latest.js"></script>
</html>