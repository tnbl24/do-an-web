<?php
include_once("../layout/header.php");
?>
<section class="dathang">
    <div class="dathang-content row">
        <div class="dathang-content-left">
            <p style="font-weight: bold;">THÔNG TIN ĐẶT HÀNG</p>
            <div class="dathang-content-left-field">
                <label for="ten" class="dathang-content-left-ten">Họ tên<span style="color: red;">*</span></label><br>
                <input type="text" class="dathang-content-left-input" value="" readonly>
            </div>
            <div class="dathang-content-left-field">
                <label for="dt" class="dathang-content-left-dt">Điện thoại<span style="color: red;">*</span></label>
                <input type="text" class="dathang-content-left-input">
            </div>

            <div class="dathang-content-left-field">
                <label for="dc" class="dathang-content-left-dc">Địa chỉ<span style="color: red;">*</span></label>
                <input type="text" class="dathang-content-left-input">
            </div>
            <?php
            include_once("../views/thanhtoan.php");
            ?>
            <div class="dathang-content-left-ghichu">
                <label for="">Ghi chú</label><br>
                <textarea name="ghichu" placeholder="Ghi chú về đơn hàng, ví dụ: thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn."></textarea>
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
                    <a href="../views/giohang.php"><button>Quay lại</button></a>
                    <a href="../views/donhangchitiet.php"><button>Đặt hàng</button></a>
                </div>
            </div>
        </div>
        <div class="contact-share-button" onclick="sendMessage()">
            <img src="../material/img/fb-messenger.png" alt="Message Icon">
        </div>
    </div>

</section>
<?php
include_once("../layout/footer.php");
?>