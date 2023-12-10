<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <style>
            .pagination {
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 10px;
            }

            .pagination ul {
                width: 100%;
                display: flex;
                flex-wrap: wrap;
                padding: 8px;
            }

            .pagination ul li {
                display: flex;
                align-items: center;
                color: #b8bcbc;
                list-style: none;
                line-height: 45px;
                text-align: center;
                font-size: 18px;
                font-weight: 500;
                cursor: pointer;
                user-select: none;
                transition: all 0.3s ease;
            }

            .pagination ul li.numb {
                list-style: none;
                height: 45px;
                margin: 0 3px;
                line-height: 45px;
                border-radius: 18px;
                padding: 20px;
            }

            .pagination ul li.numb.first {
                margin: 0px 3px 0 -5px;
            }

            .pagination ul li.numb.last {
                margin: 0px -5px 0 3px;
            }

            .pagination ul li.dots {
                font-size: 22px;
                cursor: default;
            }

            .pagination ul li.btn {
                padding: 0 20px;
                border-radius: 50px;
            }

            .pagination li.active,
            .pagination ul li.numb:hover,
            .pagination ul li:first-child:hover,
            .pagination ul li:last-child:hover {
                color: #565050;
                background: rgb(151 220 243 / 52%);
            }
        </style>
</head>

<body>
    <div class="pagination">
        <ul>  </ul>
    </div>
    <script>
        const element = document.querySelector(".pagination ul");
        let totalPages = 5;
        let page = 1;
        //gọi hàm truyền tham số và thêm phần tử vào ul
        element.innerHTML = createPagination(totalPages, page);

        function createPagination(totalPages, page) {
            let liTag = '';
            let active;
            let beforePage = page - 1;
            let afterPage = page + 1;
            if (page > 1) { //hiển thị nút tiếp theo nếu giá trị trang lớn hơn 1
                liTag += `<li class="btn prev" onclick="createPagination(totalPages, ${page - 1})"><span><i class="fas fa-angle-left"></i> Prev</span></li>`;
            }
            if (page > 2) { 
                liTag += `<li class="first numb" onclick="createPagination(totalPages, 1)"><span>1</span></li>`;
                // if (page > 3) { 
                //     liTag += `<li class="dots"><span>...</span></li>`;
                // }
            } // Số trang hoặc li hiển thị trước li hiện tại
            if (page == totalPages) {
                beforePage = beforePage - 2;
            } else if (page == totalPages - 1) {
                beforePage = beforePage - 1;
            } // Số trang hoặc li hiển thị sau li hiện tại
            if (page == 1) {
                afterPage = afterPage + 2;
            } else if (page == 2) {
                afterPage = afterPage + 1;
            }
            for (var plength = beforePage; plength <= afterPage; plength++) {
                if (plength > totalPages) { 
                    continue;
                }
                if (plength == 0) { 
                    plength = plength + 1;
                }
                if (page == plength) { // Nếu trang hiện tại bằng plength thì gán chuỗi "active" vào biến active
                    active = "active";
                } else { 
                    active = "";
                }
                liTag += `<li class="numb ${active}" onclick="createPagination(totalPages, ${plength})"><span>${plength}</span></li>`;
            }
            if (page < totalPages - 1) { // Nếu giá trị trang nhỏ hơn totalPages - 1 thì hiển thị trang cuối cùng
                // if (page < totalPages - 2) { // Nếu giá trị trang nhỏ hơn totalPages - 2 thì thêm (...) trước trang cuối cùng
                //     liTag += `<li class="dots"><span>...</span></li>`;
                // }
                liTag += `<li class="last numb" onclick="createPagination(totalPages, ${totalPages})"><span>${totalPages}</span></li>`;
            }
            if (page < totalPages) { // Hiển thị nút trang tiếp theo nếu giá trị trang nhỏ hơn totalPages
                liTag += `<li class="btn next" onclick="createPagination(totalPages, ${page + 1})"><span>Next <i class="fas fa-angle-right"></i></span></li>`;
            }
            element.innerHTML = liTag; // Thêm thẻ li vào trong thẻ ul
            return liTag; 
        }
    </script>
</body>

</html>