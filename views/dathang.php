<?php
require_once("../layout/header.php");
require_once("../controller/dathangcontroller.php");

?>
<form action="" method="POST">
<section class="dathang">
    <div class="dathang-content row">
        <div class="dathang-content-left">
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
                <?php
                        $count=0;
                        $tong=0;
                    if(isset($_POST['checkout']) && isset($_POST['selectedProducts'])){
                        foreach ($_POST['selectedProducts'] as $key ) {
                            $sql = "SELECT cho.* ,danhmuc.tendm FROM giohang 
                            INNER JOIN cho on giohang.mac=cho.mac
                            INNER JOIN danhmuc on danhmuc.madm=cho.madm
                            WHERE makh=$lmakh AND giohang.mac=$key";
                            $result = mysqli_query($connect,$sql);
                            if(mysqli_num_rows($result)){
                                while($c = mysqli_fetch_assoc($result)){
                                    $mac = $c['mac'];
                                    $tendm =$c['tendm'];
                                    $codec=$c['codec'];
                                    $gioitinhc=$c['gioitinhc'];
                                    $mausacc=$c['mausacc'];
                                    $giatienc=$c['giatienc'];
                                    $hinhanhc=$c['hinhanhc'];
                                    $tong=$tong+$giatienc;
                    echo'<input type="text" name="abc[]" value="'.$key.'" hidden>';
                            echo'
                            <tr>
                    <td>'.$tendm.' '.$mausacc.'</td>
                    <td>1</td>
                    <td>
                        <p>'.$giatienc.'<sup>đ</sup></p>
                    </td>
                </tr>
                            ';
                                }};
                                $count++;
                        }
                    }
                ?>
                <tr>
                    <td style="font-weight: bold;" >Tổng: </td>
                    <td style="font-weight: bold;"><?php echo $count;?></td>
                    <td style="font-weight: bold;">
                        <p><?php echo $tong;?><sup>đ</sup></p>
                    </td>
                </tr>
            </table>
            <div class="dathang-2">
                <div class="dathang-content-right-button">
                    <a href="../views/giohang.php"><button>Quay lại</button></a>
                    <button type="submit" name="order">Đặt hàng</button>
                </div>
            </div>
        </div>
        <?php
        include_once("../views/messenger.php");
        ?>
    </div>
</section>
</form>
<?php
require_once("../layout/footer.php");
?>