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
    padding: 2% 30%;
    transition: 0.25s ease-in-out;
    text-decoration: none;
    margin-top: 10px;
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
    background: rgba(0,0,0,0.8);
    flex-grow: 1;
    padding: 30px 30px 40px;
    box-shadow: 0px 0px 17px 2px rgba(255, 255, 255, 0.8);
}
#form-resign {
    margin-top: 200px;
    max-width: 450px;
    max-height: 600px;
    background: rgba(0,0,0,0.8);
    flex-grow: 1;
    padding: 30px 30px 40px;
    box-shadow: 0px 0px 17px 2px rgba(255, 255, 255, 0.8);
}
.form-heading{
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
.form-input::placeholder{
    color: rgba(255,255,255,0.4);
}
#eye i{
    cursor: pointer;
}
    </style>
</head>
<body>

    <div id="wrapper2">
        <form action="" id="form-resign">
            <h1 class="form-heading">NHẬP MẬT KHẨU MỚI</h1>
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
            <div><a href="../web/login.php" class="form-submit"  >XÁC NHẬN</a> </div>
            <p>Quay lại trang <a href="../web/login.php" class="form-forgot">đăng nhập</a></p>
        </form>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="../material/js/app.js"></script>
<script src="https://code.jquery.com/jquery-latest.js"></script>
</html>