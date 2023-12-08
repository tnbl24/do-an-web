<?php
include_once("../layout/header.php");
?>
<div class="profile-bg">


<div class="profile-container">
        <h1>Tài Khoản Của Tôi</h1>
        <form id="profile-form">
            <div class="profile-info">
                <label for="name">Tên:</label>
                <input type="text" id="name" name="name" value="" readonly>

                <label for="birthdate">Ngày Sinh:</label> 
                <input type="date" id="birthdate" name="birthdate" value="" >

                
                <div class="profile-gender-input">
                <label>Giới Tính:</label>
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

                <button type="button" id="changePasswordButton">Đổi Mật Khẩu</button>
             
                <button type="button" id="deleteButton">Xóa Tài Khoản</button>    
            </div>
            <div class="profile-button-2-container" >
                <button type="submit" id="saveButton">Lưu</button>
                <button type="button" id="goBackButton">Quay Lại</button>
            </div>
        </form>
    </div>
    <div class="contact-share-button" onclick="sendMessage()">
        <img src="../material/img/fb-messenger.png" alt="Message Icon">   
    </div>
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

        editButton.addEventListener("click", function () {
            editableInputs.forEach(input => input.removeAttribute("readonly"));
            editButton.style.display = "none";
            saveButton.style.display = "block";
            goBackButton.style.display = "block";
            changePasswordButton.style.display = "none";
            deleteButton.style.display = "none";
        });

        saveButton.addEventListener("click", function () {
            editableInputs.forEach(input => input.setAttribute("readonly", "readonly"));
            editButton.style.display = "block";
            saveButton.style.display = "none";
            goBackButton.style.display = "none";
            changePasswordButton.style.display = "block";
            deleteButton.style.display = "block";
        });

        goBackButton.addEventListener("click", function () {
            editableInputs.forEach(input => input.setAttribute("readonly", "readonly"));
            editButton.style.display = "block";
            saveButton.style.display = "none";
            goBackButton.style.display = "none";
            changePasswordButton.style.display = "block";
            deleteButton.style.display = "block";
        });

    </script>
<?php
include_once("../views/forgot.php");
?>

<?php
include_once("../layout/footer.php");
?>

 