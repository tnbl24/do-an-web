<?php
$sever="localhost";
$username= "root";
$password= "";
$database= "doanweb";
$connect = mysqli_connect($sever,$username,$password,$database);

if($connect){
    mysqli_query($connect,"SET NAMES 'utf8'");
}
else{
    echo "ket noi that bai".mysqli_connect_error();
}

?>
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
        <?php
       if (isset($_POST['dangky'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $rpassword = $_POST['rpassword'];
    
        if (empty($name) || empty($phone) || empty($username) || empty($password) || empty($rpassword)) {
            echo "<script>alert('Tên đăng nhập và mật khẩu không được để trống!');</script>";
        } else {
            // Kiểm tra xem username đã tồn tại hay chưa
            $checkUsernameQuery = "SELECT * FROM dangnhap WHERE tendn = '$username'";
            $checkUsernameResult = mysqli_query($connect, $checkUsernameQuery);
    
            if (mysqli_num_rows($checkUsernameResult) > 0) {
                echo "<script>alert('Tên đăng nhập đã tồn tại!');</script>";
            } else {
                // Thực hiện INSERT vào bảng khachhang
                $sql1 = "INSERT INTO khachhang(tenkh, sdtkh) VALUES ('$name', '$phone')";
                $result1 = mysqli_query($connect, $sql1);
    
                // Lấy ID của bản ghi vừa được thêm vào bảng khachhang
                $id_khachhang = mysqli_insert_id($connect);
    
                // Thực hiện INSERT vào bảng dangnhap với ID của bảng khachhang
                $sql2 = "INSERT INTO dangnhap(madn,tendn,matkhau) VALUES ('$id_khachhang','$username','$password')";
                $result2 = mysqli_query($connect, $sql2);
    
                if ($result1 && $result2) {
                    // Redirect đến trang đăng nhập
                    header("location: dangnhap.php");
                    exit;
                } else {
                    echo "<script>alert('Có lỗi khi đăng ký!');</script>";
                }
            }
        }
    }
    ?>
        <form action="" id="form-resign" method="POST">
            <h1 class="form-heading">ĐĂNG KÝ</h1>
            <p>Đăng ký tài khoản để truy cập vào trang web của chúng tôi</p>
            <div class="form-group1">
                <input type="text" class="form-input" placeholder="Nhập họ và tên của bạn" name="name" minlength="3" maxlength="100">
            </div>
            <div class="form-group1">
                <input type="text" class="form-input" placeholder="Nhập số điện thoại của bạn" name="phone"/>
            </div>
            <div class="form-group1">
                <input type="text" class="form-input" placeholder="Tên đăng nhập" name="username">
            </div>
            <div class="form-group1">
                <input type="password" class="form-input" placeholder="Tạo mật khẩu mới" name="password">
                <div id="eye">
                    <i class="bi bi-eye"></i>
                </div>
            </div>
            <div class="form-group1">
                <input type="password" class="form-input" placeholder="Nhập lại mật khẩu" name="rpassword">
                <div id="eye2">
                    <i class="bi bi-eye"></i>
                </div>
            </div>
            <div><input type="submit" value="ĐĂNG KÝ " name="dangky" class="form-submit"></div>
            <p> Bạn đã có tài khoản? Quay lại trang <a href="../views/dangnhap.php" class="form-forgot">đăng nhập</a></p>
        </form>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="../material/js/app.js"></script>
<script src="https://code.jquery.com/jquery-latest.js"></script>

</html>