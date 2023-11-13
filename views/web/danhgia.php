<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Document</title>
    <link rel="stylesheet" href="../material/css/comment.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #F0F8FF;

            position: fixed;
        }

        .modal-dg.open {
            display: flex;
        }

        .modal-dg {
            position: fixed;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal-container-dg {
            background: white;
            width: 900px;
            max-width: calc(100% - 32px);
            min-height: 200px;
            position: relative;
        }

        header.modal-header-dg {
            background: rgba(17, 162, 252, 0.9);
            height: 130px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            color: white;
        }

        .modal-close-dg {
            position: absolute;
            right: 0;
            top: 0;
            color: #fff;
            padding: 12px;
            cursor: pointer;
            opacity: 0.5;
        }

        .modal-close-dg:hover {
            opacity: 1;
        }

        .modal-body-dg {
            padding-top: 16px;
            padding-left: 16px;
            padding-right: 16px;
        }

        .modal-label-dg {
            display: block;
            font-size: 15px;
            color: #009688;
            margin-bottom: 10px;
        }

        .modal-input-dg {
            border: 1px solid #ccc;
            width: 95%;
            font-size: 15px;
            padding: 10px;
        }

        #submit-dg {
            background: rgba(17, 162, 252, 0.9);

            border: none;
            color: #fff;
            width: 150px;
            font-size: 15px;
            text-transform: uppercase;
            padding: 12px;
            opacity: 1;
            cursor: pointer;
            margin-right: 10px;
            margin-left: 25px;
            padding-left: 45px;
        }

        #submit-dg:hover {
            opacity: 0.8;
        }

        .modal-footer-dg {
            padding-top: 16px;
            padding-right: 16px;
            text-align: right;

        }

        .modal-footer-dg a {
            color: #009688;
        }

        .mt-3.d-flex.flex-row.align-items-center.p-3.form-color.comment-1 {
            display: flex;
            margin-left: 20px;
            margin-top: 15px;
        }
        .btn-feedback {
    margin: auto;
    display: flex;
    justify-content: flex-end;
    padding-bottom: 30px;}
    </style>
</head>

<body>
    <div class="modal-dg">
        <div class="modal-container-dg">
            <div class="modal-close-dg">
                <i class="bi bi-x-lg"></i>
            </div>

            <header class="modal-header-dg">
                <i class="bi bi-clipboard2-pulse-fill" style="margin-right: 16px;"></i>
                Đánh giá sản phẩm
            </header>

            <div class="modal-body-dg">
                <label for="product-dg" class="modal-label-dg">
                    <i class="bi bi-bag-heart" style="margin-right: 10px;"></i>
                    Sản phẩm bạn muốn đánh giá
                </label>
                <input id="product-dg" type="text" class="modal-input-dg" placeholder="San pham cua ban" style="margin-bottom: 24px;">
                <label for="rate-dg" class="modal-label-dg">
                    <i class="bi bi-chat-dots" style="margin-right: 10px;"></i>
                    Nhập đánh giá của bạn
                </label>
                <textarea id="rate-dg" class="modal-input-dg" placeholder="Danh gia cua ban" rows="9"></textarea>
            </div>
            <form action="" methor="">
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
                <button id="submit-dg">
                    Return
                    <i class="bi bi-arrow-counterclockwise"></i>
                </button>
                <button id="submit-dg">
                    submit
                    <i class="bi bi-check" style="margin-left: 10px;"></i>
                </button>
                <footer class="modal-footer-dg">


                </footer>
            </div>
        </div>
    </div>
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
    </script>
</body>

</html>