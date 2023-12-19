<?php
require_once("../controller/dathangcontroller.php");
?>
<section class="thanhtoan">
    <div class="thanhtoan-content-left">
        <div class="phuongthucthanhtoan">
            <label class="pttt" >Phương thức thanh toán<span style="color: red;">*</span></label>
            <div class="thanhtoan-vnp">
                <div class="thanhtoanvnpay " >
                    <input checked name="method-payment" value="Ví VNPAY" type="radio" id="payment-vnpay">
                    <label for="payment-vnpay">Thanh toán qua Vnpay</label> <img src="../material/img/vnpay.png" alt="" width="35px" height="35px"><br>
                    <p style="padding-left:20px;">Số tài khoản: <?=$payment?> </p>
                </div>
                <div class="thanhtoantienmat">
                    <input name="method-payment" type="radio" value="Tiền mặt" id="payment-tm">
                    <label for="payment-tm">Thanh toán bằng tiền mặt</label>
                </div>
            </div>
            
        </div>
    </div>
</section>