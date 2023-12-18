<?php
require_once("../controller/taikhoankhcontroller.php");
require_once("../layout/header.php");
?>
<div class="profile-bg">
    <div class="profile-container">
        <h1>Tài Khoản Của Tôi</h1>

        <form id="profile-form" method="POST" >
            <div class="profile-info">
                <div class="profile-picture-container">
                    <!-- <label for="profilePicture">Ảnh Đại Diện</label> -->
                    <div class="profile-picture-frame" id="profilePictureFrame">
                        <div class="overlay">
                            <label for="profilePictureInput" class="choose-image-button">Chọn Ảnh</label>
                            <input type="file" id="profilePictureInput" name="profilePictureInput" accept="image/*" style="display: none;">
                        </div>
                        <img src="data:image/jpeg;base64, <?= base64_encode($user['hinhanhkh']) ?>" alt="" id="profilePicture">
                    </div>
                </div>
                <label for="name">Tên:</label>
                <input type="text" id="name" name="name" value="<?php echo $name; ?>" readonly>

                <label for="birthdate">Ngày Sinh:</label>
                <input type="date" id="birthdate" name="birthdate" value="<?php echo $birthdate; ?>">

                <div class="profile-gender-input">
                    <label>Giới Tính:</label>
                    <label for="Nam">
                        <input type="radio" id="Nam" name="gender" value="Nam" <?php echo ($gender === 'Nam') ? 'checked' : ''; ?>>
                        Nam
                    </label>
                    <label for="Nữ">
                        <input type="radio" id="Nữ" name="gender" value="Nữ" <?php echo ($gender === 'Nữ') ? 'checked' : ''; ?>>
                        Nữ
                    </label>
                </div>

                <label for="phone">Số Điện Thoại:</label>
                <input type="tel" id="phone" name="phone" value="(+84) <?php echo $phone; ?>" readonly>

                <label for="mail">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>" readonly>

                <label for="address">Địa Chỉ:</label>
                <input type="text" id="address" name="address" value="<?php echo $address; ?>" readonly>

                <label for="bankName">Tên Ngân Hàng:</label>
                <input type="text" id="bankName" name="bankName" value="<?php echo $bankName; ?>" readonly>

                <label for="accountNumber">Số Tài Khoản:</label>
                <input type="text" id="accountNumber" name="accountNumber" value="<?php echo $accountNumber; ?>" readonly>
            </div>

            <div class="profile-button-container">
                <button type="button" id="editButton">Sửa</button>

                <button type="button" id="changePasswordButton">Đổi Mật Khẩu</button>

                <button type="button" id="deleteButton" onclick="confirmDelete()">Xóa Tài Khoản</button>
            </div>
            <div class="profile-button-2-container">
                <button type="submit" id="saveButton" name="saveButton">Lưu</button>
                <button type="button" id="goBackButton">Quay Lại</button>
            </div>
        </form>
    </div>
    <?php
    include_once("../views/messenger.php");
    ?>
</div>

<script>
    const editButton = document.getElementById("editButton");
    const saveButton = document.getElementById("saveButton");
    const goBackButton = document.getElementById("goBackButton");
    const deleteButton = document.getElementById("deleteButton");
    const changePasswordButton = document.getElementById("changePasswordButton");

    const editableInputs = document.querySelectorAll(".profile-info input[readonly]");


    saveButton.style.display = "none";
    goBackButton.style.display = "none";

    editButton.addEventListener("click", function() {
        editableInputs.forEach(input => input.removeAttribute("readonly"));
        editButton.style.display = "none";
        saveButton.style.display = "block";
        goBackButton.style.display = "block";
        changePasswordButton.style.display = "none";
        deleteButton.style.display = "none";
    });

    saveButton.addEventListener("click", function() {
        editableInputs.forEach(input => input.setAttribute("readonly", "readonly"));
        editButton.style.display = "block";
        saveButton.style.display = "none";
        goBackButton.style.display = "none";
        changePasswordButton.style.display = "block";
        deleteButton.style.display = "block";
    });

    goBackButton.addEventListener("click", function() {
        editableInputs.forEach(input => input.setAttribute("readonly", "readonly"));
        editButton.style.display = "block";
        saveButton.style.display = "none";
        goBackButton.style.display = "none";
        changePasswordButton.style.display = "block";
        deleteButton.style.display = "block";
    });
</script>
<?php
include_once("../views/doimatkhau.php");
?>

<?php
include_once("../layout/footer.php");
?>