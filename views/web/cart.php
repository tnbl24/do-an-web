<?php
include_once("../layout/header.php");
?>

 <section class="cart">
                <div class="cart-container">
                    <div class="cart-content-left">
                        <table>
                            <tr>
                             <th>
                        <input type="checkbox" id="selectAll"> 
                    </th>
                                <th>Hình ảnh</th>
                                <th>Tên danh mục</th>
                                <th>Màu sắc</th>
                                <th>Giá</th>
                                <th>Xóa</th>
                               
                        
                            </tr>
                         
                            <tr>
                                <td><input type="checkbox" class="productCheckbox"></td>
                                <td><img src="../material/img/ala hồng phấn.jpg" alt=""></td>
                                <td>
                                    <p>Alaska hồng phấn</p>
                                </td>
                                <td>
                                    <p>hồng phấn</p>
                                </td>
                                <td>
                                    <p>20.000.000 VND</p>
                                </td>
                                <td> <span>X</span> </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="productCheckbox"></td>
                                <td><img src="../material/img/ala nâu đỏ.jpg" alt=""></td>
                                <td>
                                    <p>Alaska nâu đỏ</p>
                                </td>
                                <td>
                                    <p>nâu đỏ</p>
                                </td>
                                <td>
                                    <p>18.000.000 VND</p>
                                </td>
                                <td> <span>X</span> </td>
                            </tr>
                      
                        </table>
                    </div>
                    <div class="cart-content-right">
                        <table>
                            <tr>
                                <th colspan="2">TỔNG TIỀN</th>
                            </tr>
                            <tr>
                                <td style="color: black; font-weight: bold">Tổng sản phẩm</td>
                                <td style=""></td>
                            </tr>
                            <tr>
                                <td style="color: black; font-weight: bold">Tổng thanh toán</td>
                                <td>
                                   <p></p>
                                </td>
                            </tr>
                            
                        </table>
                        <div class="cart-content-right-button">
                            <a href="../web/home.php"><button> Quay lại trang chủ</button></a>
                            <a href="../web/delivery.php"><button> Mua hàng</button></a>
                        </div>
                        
                    </div>
                    <div class="contact-share-button" onclick="sendMessage()">
                <img src="../material/img/fb-messenger.png" alt="Message Icon">   
                </div>
                </div>
            </section>
<script>
    document.getElementById('selectAll').addEventListener('change', function () {
        var checkboxes = document.querySelectorAll('.productCheckbox');
        for (var checkbox of checkboxes) {
            checkbox.checked = this.checked;
        }
    });


 


document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('selectAll').addEventListener('change', function () {
        toggleAllCheckboxes(this.checked);
        calculateSelectedProducts();
    });


    var productCheckboxes = document.querySelectorAll('.productCheckbox');
    productCheckboxes.forEach(function (checkbox) {
        checkbox.addEventListener('change', function () {
            calculateSelectedProducts();
        });
    });


    var deleteButtons = document.querySelectorAll('.cart-content-left table tr:not(:first-child) td:last-child span');
    deleteButtons.forEach(function (deleteButton) {
        deleteButton.addEventListener('click', function () {
            var row = this.closest('tr');
            row.remove();
            calculateTotalPrice();
            calculateSelectedProducts(); 
        });
    });
});


function toggleAllCheckboxes(checked) {
    var productCheckboxes = document.querySelectorAll('.productCheckbox');
    productCheckboxes.forEach(function (checkbox) {
        checkbox.checked = checked;
    });
}


function calculateSelectedProducts() {
    var selectedCheckboxes = document.querySelectorAll('.productCheckbox:checked');
    var selectedProductsCount = selectedCheckboxes.length;

    var totalPrice = 0;
    selectedCheckboxes.forEach(function (checkbox) {
        var row = checkbox.closest('tr');
        var priceElement = row.querySelector('td:nth-child(5) p');
        var price = parseFloat(priceElement.innerText.replace(' VND', '').replace('.', '').replace('.', ''));
        totalPrice += price;
    });


    var selectedProductsCountElement = document.querySelector('.cart-content-right table tr:nth-child(2) td:last-child');
    selectedProductsCountElement.innerText = selectedProductsCount;


    var totalPriceElement = document.querySelector('.cart-content-right table tr:nth-child(3) td p');
    totalPriceElement.innerText = formatCurrency(totalPrice) + ' VND';

    var tempTotalElement = document.querySelector('.cart-content-right table tr:nth-child(4) td p');
    tempTotalElement.innerText = formatCurrency(totalPrice) + ' VND';
}


function calculateTotalPrice() {
    var totalPrice = 0;

    // Iterate through all product rows
    var productRows = document.querySelectorAll('.cart-content-left table tr:not(:first-child)');
    productRows.forEach(function (row) {
        var checkbox = row.querySelector('.productCheckbox:checked');
        if (checkbox) {
            var priceElement = row.querySelector('td:nth-child(5) p');
            var price = parseFloat(priceElement.innerText.replace(' VND', '').replace('.', '').replace('.', ''));
            totalPrice += price;
        }
    });

    var totalPriceElement = document.querySelector('.cart-content-right table tr:nth-child(3) td p');
    totalPriceElement.innerText = formatCurrency(totalPrice) + ' VND';

 
    var tempTotalElement = document.querySelector('.cart-content-right table tr:nth-child(4) td p');
    tempTotalElement.innerText = formatCurrency(totalPrice) + ' VND';
}


function formatCurrency(amount) {
    return amount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}


function sendMessage() {
    // Add your logic for opening Facebook Messenger or sending a message here
    alert('Sending a message...');
}

</script>

<?php
include_once("../layout/footer.php");
?>