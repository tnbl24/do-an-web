<?php
include_once("../layout/header.php");
?>

<div class="profile-container">
        <h1>Tài Khoản Của Tôi</h1>
        <form id="profile-form">
            <div class="profile-info">
                <label for="name">Tên:</label>
                <input type="text" id="name" name="name" value="" readonly>

                <label for="birthdate">Ngày Sinh:</label> 
                <input type="date" id="birthdate" name="birthdate" value="" >

                <label>Giới Tính:</label>
                <div class="profile-gender-input">
                    <label for="male"><input type="radio" id="male" name="gender" value="male" checked> Nam</label>
                    <label for="female"><input type="radio" id="female" name="gender" value="female"> Nữ</label>
                </div>

                <label for="phone">Số Điện Thoại:</label>
                <input type="tel" id="phone" name="phone" value="" readonly>

                <label for="mail">Email:</label>
                <input type="email" id="email" name="email" value="" readonly>

                <label for="address">Địa Chỉ:</label>
                <input type="text" id="address" name="address" value="" readonly>

                <label for="bankName">Tên Ngân Hàng:</label>
                <input type="text" id="bankName" name="bankName" value="" readonly>

                <label for="accountNumber">Số Tài Khoản:</label>
                <input type="text" id="accountNumber" name="accountNumber" value="" readonly>
            </div>

            <div class="profile-button-container">
                <button type="button" id="editButton">Sửa</button>
                <button type="submit" id="saveButton">Lưu</button>
                <button type="button" id="deleteButton">Xóa Tài Khoản</button>
                <button type="button" id="changePasswordButton">Đổi Mật Khẩu</button>
            </div>
        </form>
    </div>

<?php
include_once("../layout/footer.php");
?>