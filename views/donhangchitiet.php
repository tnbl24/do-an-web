<?php
include_once("../layout/header.php");
require_once("../controller/chitietdonhangcontroller.php");
?>
<section class="donhang">
    <div class="donhang-container">
        <div class="madonhang">
            <div class="madh">
                <span>MÃ ĐƠN HÀNG: <?= $madhct ?></span>
                <span class="">|</span>
                <span style="color: red;"><?= $dh1['tenttdh'] ?></span>
            </div>
        </div>
        <div class="donhang-top-wrap">
            <div class="donhang-top">
                <?php
                $xacnhan = "xacnhan";
                ?>
                <div class="donhang-xacnhan donhang-item">
                    <i class="fa-solid fa-box-archive"></i>
                </div>
                <div class="
                <?php
                if ($dh1['mattdh'] == 1 || $dh1['mattdh'] == 2 || $dh1['mattdh'] == 3)
                    echo $xacnhan;
                ?> 
                text-dh">
                    <p>Đang chuẩn bị hàng</p>
                </div>

                <div class="donhang-vanchuyen donhang-item">
                    <i class="fa-solid fa-truck-fast"></i>
                </div>
                <div class=" vanchuyen text-dh
                <?php
                if ($dh1['mattdh'] == 2 || $dh1['mattdh'] == 3)
                    echo $xacnhan;
                ?> ">
                    <p>Đang giao</p>
                </div>

                <div class="donhang-danggiao donhang-item">
                    <i class="fa-solid fa-boxes-packing"></i>
                </div>
                <div class="dagiao text-dh
                <?php
                if ($dh1['mattdh'] == 3)
                    echo $xacnhan;
                ?>">
                    <p>Đã giao</p>
                </div>
                <div class="donhang-danhgia donhang-item">
                    <i class="fa-solid fa-star"></i>
                </div>

            </div>
        </div>
    </div>
    <div class="donhang-container">
        <div class="donhang-content">
            <div class="donhang-trangthai">
                <div class="donhang-diachi">
                    <p style="font-weight: bold;"><i class="fa-solid fa-location-dot" style="color: red;"></i> Địa chỉ nhận hàng</p>
                    <div class="tenkh" tabindex="0"><?= $kh['tenkh'] ?>
                        <div class="ttkh">
                            <span tabindex="0">(+84) <?= $kh['sdtkh'] ?></span><br>
                            <span tabindex="0"><?= $kh['diachikh'] ?></span>
                        </div>
                    </div>
                </div>
                <div class="donhang-quatrinh">
                    <div>
                        <div class="rqUx-N">
                            <div class="_4yfsbS"></div>
                            <div class="JNurwA">
                                <div class="rVemEI">
                                    <img class="AXDO-g" title="image" alt="Đặt hàng thành công" src="../material/img/chuanbihang.png">
                                </div>
                                <div class="B3MLEe"></div>
                                <div class="u4VSsO">
                                    <p class="_0P1byN">Đặt hàng thành công</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    foreach ($lichsucapnhat as $tinhtrang => $ngaycapnhat) {
                    ?>
                        <div>
                            <div class="rqUx-N">
                                <div class="_4yfsbS"></div>
                                <div class="JNurwA">
                                    <div class="rVemEI">
                                        <img class="AXDO-g" title="image" alt="Đặt hàng thành công" src="../material/img/chuanbihang.png">
                                    </div>
                                    <div class="B3MLEe"><?= $ngaycapnhat ?></div>
                                    <div class="u4VSsO">
                                        <p class="_0P1byN"><?= $tinhtrang ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div>

            </div>
            <div class="donhang-sanpham">
                <div style="width: 70%;">
                    <div style="width: 95%;">
                        <?php
                        $countdh = 0;
                        $tongtiendh = 0;
                        foreach ($bchodh as $bcode) {
                            foreach ($bcode as $bcho => $bvalue) {

                                $countdh++;
                                $bcode['giatienc'] = str_replace([".", "VND"], "", $bcode['giatienc']);
                                $tongtiendh += intval($bcode['giatienc']);
                        ?>
                                <div class="donhang-imgsp">
                                    <div class="alaska-naudo-dh">
                                        <a href="./sanphamchitiet.php?mac=<?= $bcode['mac'] ?>">
                                            <img src="data:image/jpeg;base64, <?= base64_encode($bcode['hinhanhc']) ?>">
                                        </a>
                                        <span><a href="./sanphamchitiet.php?mac=<?= $bcode['mac'] ?>">
                                                <?= $bcode['codec'] . " " . $bcode['tendm'] . " " . $bcode['mausacc'] ?>
                                            </a></span>
                                        <span class="small"> x1</span><br>
                                    </div>
                                    <div class="tienhang">
                                        <span><?php
                                                $bcode['giatienc'] = number_format($bcode['giatienc'], 0, ',', '.');
                                                echo $bcode['giatienc'] ?><sup>đ</sup></span>
                                    </div>
                                </div>
                                <hr>
                        <?php

                                break;
                            }
                        }
                        $tongtiendh = number_format($tongtiendh, 0, ',', '.');
                        ?>
                    </div>
                </div>

                <div class="donhang-hoadon">

                    <table>
                        <tr>
                            <td>Số lượng: </td>
                            <td>
                                <p style="margin-left: 100px; margin-bottom: 0px;"><?= $countdh ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>Tổng tiền hàng</td>
                            <td>
                                <p style="margin-left: 100px;margin-bottom: 0px;"><?= $tongtiendh ?><sup>đ</sup></p>
                            </td>
                        </tr>
                        <tr>
                            <td>Phương thức thanh toán</td>
                            <td>
                                <p style="margin-left: 100px;margin-bottom: 0px;"><?= $dh1['pttt'] ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>Ghi chú:</td>
                            <td><?= $dh1['ghichu'] ?></td>
                        </tr>
                    </table>
                    <div class="dathang-2">
                        <div class="donhang-button">
                            <a href="trangchu.php"><button>Quay lại trang chủ</button></a>

                            <a href="lienhe.php"><button>Liên hệ người bán</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php
    include_once("../views/messenger.php");
    ?>
    </div>
</section>
<?php
include_once("../layout/footer.php");
?>