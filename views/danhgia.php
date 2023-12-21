<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once("../config/connect.php");

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// Kiểm tra nếu có phiên đăng nhập
if (isset($_SESSION['dangnhap'])) {
    $username = $_SESSION['dangnhap'];

    // Truy vấn để lấy mã khách hàng
    $lquery1 = "SELECT khachhang.makh FROM khachhang INNER JOIN dangnhap ON khachhang.madn=dangnhap.madn
    WHERE dangnhap.tendn='$username'";
    $lresult1 = mysqli_query($connect, $lquery1);

    // Kiểm tra xem truy vấn có thành công không trước khi lấy dữ liệu
    if ($lresult1) {
        $lrow = mysqli_fetch_assoc($lresult1);
        $lmakh = $lrow['makh'];
        if (isset($_POST['rate-dg'])) {
            $noidungdg = $_POST['rate-dg'];
            $hinhanhdg = ""; // Bạn cần xử lý upload ảnh và lưu đường dẫn ảnh vào đây
            if (isset($_POST['product-dg'])) {
                $productDGValue = $_POST['product-dg'];
                echo "Giá trị của product-dg: $productDGValue";
            } else {
                echo "Không có giá trị product-dg được gửi lên.";
            }
            // Sử dụng regex để lấy mã sản phẩm từ chuỗi sản phẩm
            $pattern = '/^([A-Z0-9]+)/';
            if (preg_match($pattern, $_POST['product-dg'], $matches)) {
                $productCode = $matches[1];

                // Thực hiện truy vấn để lấy mã sản phẩm
                $getProductQuery = "SELECT mac FROM cho WHERE codec = '$productCode'";
                $getProductResult = mysqli_query($connect, $getProductQuery);

                if ($getProductResult) {
                    $productRow = mysqli_fetch_assoc($getProductResult);

                    if ($productRow) {
                        $mac = $productRow['mac'];
                        // Chèn đánh giá vào bảng danhgia
                        $insertQuery = "INSERT INTO danhgia (makh, ngaydg, hinhanhdg, noidungdg, mac) 
                                        VALUES ($lmakh, NOW(), '$hinhanhdg', '$noidungdg', $mac)";

                        $insertResult = mysqli_query($connect, $insertQuery);

                        if ($insertResult) {
                            echo "Đánh giá đã được thêm thành công.";
                        } else {
                            echo "Lỗi khi chèn đánh giá: " . mysqli_error($connect);
                        }
                    } else {
                        echo "Không có sản phẩm để đánh giá.";
                    }
                } else {
                    echo "Lỗi khi lấy mã sản phẩm: " . mysqli_error($connect);
                }
            } else {
                echo "Không khớp với mẫu.";
            }
        }
    } else {
        echo "Lỗi khi lấy mã khách hàng: " . mysqli_error($connect);
    }
} else {
    echo "Người dùng chưa đăng nhập.";
}

?>

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
            <input name="product-dg" id="product-dg" type="text" class="modal-input-dg" placeholder="Sản phẩm của bạn" style="margin-bottom: 24px;    padding-left: 90px;" value="" readonly>

            <label for="rate-dg" class="modal-label-dg">
                <i class="bi bi-chat-dots" style="margin-right: 10px;"></i>
                Nhập đánh giá của bạn
            </label>
            <textarea name="rate-dg" class="modal-input-dg" placeholder="Danh gia cua ban" rows="9"></textarea>
            <form action="" method="POST">

                <div class="mt-3 d-flex flex-row align-items-center p-3 form-color comment-1">
                    <div class="input-div">
                        <input class="input" name="file" type="file">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
                            <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                            <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z" />
                        </svg>
                    </div>
                </div>
            </form>

            <div class="btn-feedback">
                <!-- <a href="../web/order.php" style="text-decoration:none;"> -->
                <button id="submit-dg">
                    Return
                    <i class="bi bi-arrow-counterclockwise" style="margin-left: 10px;"></i>
                </button>
                <!-- </a> -->
                <!-- <a href="../web/order.php" style="text-decoration:none;"> -->
                <button id="submit-dg" class="js-submit">
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
<script>
    $(document).ready(function() {
        // Gắn sự kiện nhấp vào nút đánh giá
        $('.danhgia-modal').click(function(event) {
            event.preventDefault(); // Ngăn chặn hành vi mặc định của nút submit

            // Lấy thông tin sản phẩm từ phần tử cụ thể được nhấp
            var productElement = $(this).closest('.donhang-imgsp');
            var productTitle = productElement.find('a:last').text();

            // In thông tin sản phẩm ra console hoặc làm gì đó khác
            $('#product-dg').val(productTitle);

            // Tiếp tục xử lý hoặc gửi dữ liệu đánh giá tới máy chủ
            // ...
        });
    });
</script>


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