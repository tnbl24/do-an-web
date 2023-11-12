<?php
include_once("../layout/header.php");
?>
    <section class="thanhtoan">
        <div class="thanhtoan-content row">
            <div class="thanhtoan-content-left">
                <div class="phuongthucthanhtoan">
                    <p style="font-weight: bold;">PHƯƠNG THỨC THANH TOÁN</p>
                    <div class="thanhtoanvnpay">
                        <input checked name="method-payment" type="radio">
                        <label for="">Thanh toán qua Vnpay</label> <img src="../material/img/vnpay.png" alt="" width="35px" height="35px"><br>
                    </div>
                    <div class="thanhtoan-stk">
                        <div for=""><p>Số tài khoản: 0123456789</p></div>
                    </div>
                   
                    <div class="thanhtoantienmat">
                        <input name="method-payment" type="radio">
                        <label for="">Tiền mặt</label>
                    </div>
                </div>
            </div>
            <div class="dathang-content-right">
            <h3 style="font-weight: bold;
            text-align:center;
            margin:0;
            padding-top: 30px">ĐƠN HÀNG</h3>
            <table>
                <tr>
                    <th>Sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                </tr>
                <tr>
                    <td>Alaska hồng phấn</td>
                    <td>1</td>
                    <td>
                        <p>20.000.000<sup>đ</sup></p>
                    </td>
                </tr>
                <tr>
                    <td>Alaska nâu đỏ</td>
                    <td>1</td>
                    <td>
                        <p>18.000.000<sup>đ</sup></p>
                    </td>
                </tr>
                <tr>
                    <td style="font-weight: bold;" colspan="2">Tổng tiền</td>
                    <td style="font-weight: bold;">
                        <p>38.000.000<sup>đ</sup></p>
                    </td>
                </tr>
            </table>
            <div class="dathang-2">
                <div class="dathang-content-right-button">
                    <a href="payment.php"><button>Quay lại</button></a>
                    <a href="order-detail.php"><button>Thanh toán</button></a>
                </div>
            </div>
        </div>

    </div>
    
</section>
<?php
include_once("../layout/footer.php");
?>