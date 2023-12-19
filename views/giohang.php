<?php
include_once("../layout/header.php");
require_once("../controller/giohangcontroller.php");
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
                    <th>Mã chó</th>
                    <th>Chủng loại</th>
                    <th>Giới tính</th>
                    <th>Màu sắc</th>
                    <th>Giá</th>
                    <th>Xóa</th>
                </tr>
                <?php
                $count =0;
                foreach ($bchogh as $bcode) {
                    foreach ($bcode as $bcho => $bvalue) {
                ?>
                        <tr>
                            <td><input type="checkbox" class="productCheckbox"></td>
                            <td>
                                <a href="./sanphamchitiet.php?mac=<?= $bcode['mac'] ?>">
                                <img class="home-img" src="data:image/jpeg;base64, <?= base64_encode($bcode['hinhanhc']) ?>">
                                </a>
                            </td>
                            <td><?=$bcode['codec']?></td>
                            <td>
                                <p><?=$bcode['tendm']?></p>
                            </td>
                            <td>
                            <?=$bcode['gioitinhc']?>
                            </td>
                            <td>
                                <p><?=$bcode['mausacc']?></p>
                            </td>
                            <td>
                                <p><?=$bcode['giatienc']?></p>
                            </td>
                            <td> <span>X</span> </td>
                        </tr>
                <?php
                $count ++;
                break;
                    }
                    
                }
                ?>
                <h4>Tổng số lượng : <?=$count?></h4>
            </table>
        </div>
        <div class="cart-content-right">
            <table>
                <tr>
                    <th colspan="2"> TẠO ĐƠN HÀNG</th>
                </tr>
                <tr>
                    <td style="color: black; font-weight: bold">Tổng sản phẩm</td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td style="color: black; font-weight: bold">Tổng thanh toán</td>
                    <td>
                        <p></p>
                    </td>

                </tr>
            </table>
            <div class="cart-content-right-button">
                <a href="../views/trangchu.php"><button> Quay lại trang chủ</button></a>
                <a href="../views/dathang.php?products=<?= base64_encode(json_encode($bchogh)) ?>"><button>Mua hàng</button></a>

            </div>

        </div>
        <?php
        include_once("../views/messenger.php");
        ?>
    </div>
</section>

<script>
    document.getElementById('selectAll').addEventListener('change', function() {
        var checkboxes = document.querySelectorAll('.productCheckbox');
        for (var checkbox of checkboxes) {
            checkbox.checked = this.checked;
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('selectAll').addEventListener('change', function() {
            toggleAllCheckboxes(this.checked);
            calculateSelectedProducts();
        });

        var productCheckboxes = document.querySelectorAll('.productCheckbox');
        productCheckboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                calculateSelectedProducts();
            });
        });

        var deleteButtons = document.querySelectorAll('.cart-content-left table tr:not(:first-child) td:last-child span');
        deleteButtons.forEach(function(deleteButton) {
            deleteButton.addEventListener('click', function() {
                var row = this.closest('tr');
                row.remove();
                calculateTotalPrice();
                calculateSelectedProducts();
            });
        });
    });

    function toggleAllCheckboxes(checked) {
        var productCheckboxes = document.querySelectorAll('.productCheckbox');
        productCheckboxes.forEach(function(checkbox) {
            checkbox.checked = checked;
        });
    }

    function calculateSelectedProducts() {
        var selectedCheckboxes = document.querySelectorAll('.productCheckbox:checked');
        var selectedProductsCount = selectedCheckboxes.length;
        var totalPrice = 0;
        selectedCheckboxes.forEach(function(checkbox) {
            var row = checkbox.closest('tr');
            var priceElement = row.querySelector('td:nth-child(7) p');
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
        productRows.forEach(function(row) {
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