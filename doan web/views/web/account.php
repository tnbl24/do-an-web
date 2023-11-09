<?php
include_once("../layout/header.php");
?>

<div class="profile-container">
        <h1>Tài Khoản Của Tôi</h1>
        <form>
            <div class="profile-info">
                <label for="name">Tên:</label>
                <input type="text" id="name" name="name">

                <label for="address">Địa Chỉ:</label>
                <input type="text" id="address" name="address">

                <label for="email">Email:</label>
                <input type="email" id="email" name="email">

                <label for="phone">Số Điện Thoại:</label>
                <input type="tel" id="phone" name="phone">

                <label>Giới Tính:</label>
                <div class="profile-gender-input">
                    <label for="male"><input type="radio" id="male" name="gender" value="male"> Nam</label>
                    <label for="female"><input type="radio" id="female" name="gender" value="female"> Nữ</label>
                </div>

                <label for="profile-birthdate">Ngày Sinh:</label>
                <input type="date" id="birthdate" name="birthdate">
            </div>

            <div class="profile-submit-button">
                <button type="submit">Lưu </button>
            </div>
        </form>
    </div>

<?php
include_once("../layout/footer.php");
?>