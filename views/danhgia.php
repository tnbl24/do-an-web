<?php

require_once("../config/connect.php");

if (isset($_SESSION['dangnhap'])) {
    $username = $_SESSION['dangnhap'];

    // Truy vấn để lấy mã khách hàng
    $lquery1 = "SELECT khachhang.makh FROM khachhang INNER JOIN dangnhap ON khachhang.madn=dangnhap.madn
        WHERE dangnhap.tendn='$username'";
    $lresult1 = mysqli_query($connect, $lquery1);

    $productCode = isset($_POST['product-code']) ? $_POST['product-code'] : '';
    $parts = explode(' ', $productCode);
    $productCode = $parts[0];

    $lquery2 = "SELECT cho.mac FROM cho 
    WHERE cho.codec='$productCode'";
    $lresult2 = mysqli_query($connect, $lquery2);

    }

?>


<form action="" method="POST">

    <div class="modal-dg">
        <div class="modal-container-dg">
            <div class="modal-close-dg">
                <i class="bi bi-x-lg"></i>
            </div>

            <div class="modal-body-dg">
                <div class="modal-header-dg">
                    <i class="bi bi-clipboard2-pulse-fill" style="margin-right: 16px;"></i>
                    Đánh giá sản phẩm

                </div>
                <label for="product-dg" class="modal-label-dg">
                    <i class="bi bi-bag-heart" style="margin-right: 10px;"></i>
                    Sản phẩm bạn muốn đánh giá
                </label>
                
                
                <input id="product-dg" type="text" class="modal-input-dg" readonly name="product-code">
                <!-- <input id="product-dg" type="text" class="modal-input-dg" value="" style="margin-bottom: 24px; text-align: center;" readonly> -->

                <label for="rate-dg" class="modal-label-dg">
                    <i class="bi bi-chat-dots" style="margin-right: 10px;"></i>
                    Nhập đánh giá của bạn
                </label>
                <textarea name="rate-dg" class="modal-input-dg" placeholder="Đánh giá của bạn" rows="9"></textarea>

                <div class="mt-3 d-flex flex-row align-items-center p-3 form-color comment-1">
                    <div class="input-div">
                        <input class="input" name="file" type="file">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
                            <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                            <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z" />
                        </svg>
                    </div>
                </div>
                <div class="btn-feedback">
                    <!-- <a href="../web/order.php" style="text-decoration:none;"> -->
                    <a href="../views/donhang.php" class="new-a">
                        <button id="submit-dg-return">
                            Return
                            <i class="bi bi-arrow-counterclockwise" style="margin-left: 10px;"></i>
                        </button>
                    </a>

                    <!-- </a> -->
                    <!-- <a href="../web/order.php" style="text-decoration:none;"> -->
                    <button id="submit-dg" class="js-submit" name="themdg">
                        submit
                        <i class="bi bi-check" style="margin-left: 10px;"></i>
                    </button>
                    <!-- </a> -->
                    <!-- <footer class="modal-footer-dg">
                </footer> -->
                </div>
            </div>
        </div>
    </div>
</form>




<script>
    function uploadImage() {
        // Lấy phần tử input chứa tệp ảnh
        var input = document.getElementById('image-upload');

        // Kiểm tra xem người dùng đã chọn tệp ảnh hay chưa
        if (input.files && input.files[0]) {
            var file = input.files[0];

            // Tạo đối tượng FormData để gửi dữ liệu tệp lên máy chủ
            var formData = new FormData();
            formData.append('image', file);

            // Gửi yêu cầu tải lên tệp ảnh bằng AJAX hoặc fetch
            // ở đây chỉ là ví dụ, bạn cần thay đổi thành mã xử lý tải lên thực tế
            fetch('/upload-url', {
                    method: 'POST',
                    body: formData
                })
                .then(response => {
                    // Xử lý phản hồi từ máy chủ
                    console.log('Tải ảnh lên thành công');
                })
                .catch(error => {
                    // Xử lý lỗi
                    console.error('Lỗi khi tải ảnh lên:', error);
                });
        } else {
            console.log('Vui lòng chọn một tệp ảnh');
        }
    }
    document.getElementById('submit-dg').addEventListener('click', function() {
        // Gọi hàm uploadImage() để thực hiện tải lên
        uploadImage();
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    var btnDanhGia = document.querySelectorAll('.danhgia-modal.danhgia-dg');
    var modalDg = document.querySelector('.modal-dg');

    btnDanhGia.forEach(function (btn) {
        btn.addEventListener("click", function () {
            // Lấy ID sản phẩm từ nút được nhấp
            var productId = this.getAttribute('data-product-id');

            // Cập nhật trường nhập trên danhgia.php với ID sản phẩm
            document.getElementById('product-dg').value = productId;

            // Mở modal đánh giá
            modalDg.classList.add('open-account');
        });
    });

    // Đóng modal khi nhấn nút Đã nhận
    var btnDaNhan = document.querySelector('.dg-danhan');
    if (btnDaNhan) {
        btnDaNhan.addEventListener('click', function () {
            modalDg.classList.remove('open-account');
        });
    }

    // Đóng modal khi nhấn nút Submit
    var btnSubmitDg = document.getElementById('submit-dg');
    if (btnSubmitDg) {
        btnSubmitDg.addEventListener('click', function () {
            modalDg.classList.remove('open-account');
        });
    }
});

</script>