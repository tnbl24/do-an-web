<?php
require_once("../layout/header.php");
require_once("../controller/dathangcontroller.php");

?>
<section class="dathang">
    <div class="dathang-content row">
        <form class="dathang-content-left">
            <p style="font-weight: bold;">THÔNG TIN ĐẶT HÀNG</p>
            <div class="dathang-content-left-field">
                <label for="ten" class="dathang-content-left-ten">Họ tên<span style="color: red;">*</span></label><br>
                <input type="text" class="dathang-content-left-input" name="name" value="<?php echo $name; ?>" readonly>
            </div>
            <div class="dathang-content-left-field">
                <label for="dt" class="dathang-content-left-dt">Điện thoại<span style="color: red;">*</span></label>
                <input type="text" class="dathang-content-left-input" name="phone" value="(+84) <?php echo $phone; ?>" readonly>
            </div>

            <div class="dathang-content-left-field">
                <label for="dc" class="dathang-content-left-dc">Địa chỉ<span style="color: red;">*</span></label>
                <input type="text" class="dathang-content-left-input" name="address" value="<?php echo $address; ?>" readonly>
            </div>
            <?php
            include_once("../views/thanhtoan.php");
            ?>
            <div class="dathang-content-left-ghichu">
                <label for="">Ghi chú</label><br>
                <textarea name="ghichu" placeholder="Ghi chú về đơn hàng, ví dụ: thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn."></textarea>
            </div>
        </form>
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
                <?php
                  $encodedProducts = $_GET['products'] ?? '';
                  $decodedProducts = json_decode(base64_decode($encodedProducts), true);
                  $tongsoluong = 0;
                  $tongtien = 0;

                  if (is_array($decodedProducts)) {
                    foreach ($decodedProducts as $product) {
                        echo "<tr>";
                        echo "<td>{$product['tendm']} - {$product['gioitinhc']} - {$product['mausacc']}</td>";
                        echo "<td>1</td>";
                        echo "<td><p>{$product['giatienc']}</p></td>";
                        echo "</tr>";
                
                        $tongsoluong += 1;
                        $tongtien += floatval(str_replace(',', '', $product['giatienc']));
                    }
                } else {
                    echo "<tr><td colspan='3'>Không có sản phẩm để hiển thị.</td></tr>";
                }
                
           
            ?>
            <tr>
                <td style="font-weight: bold;">Tổng: </td>
                <td style="font-weight: bold;"><?php echo $tongsoluong; ?></td>
                <td style="font-weight: bold;">
                    <p><?php echo number_format($tongtien, 0, ',', '.') ?></p>
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
        <?php
        include_once("../views/messenger.php");
        ?>
    </div>

</section>
<?php
require_once("../layout/footer.php");
?>