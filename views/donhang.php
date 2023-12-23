<?php
include_once("../layout/header.php");
require_once("../controller/tinhtrangdonhangcontroller.php");
// Kiểm tra xem có đánh giá đã submit hay chưa
?>
<div class="row donmua-content">
    <div class="col-sm-2 donmua-content-category">
        <div class="donmua-list-group" id="list-tab" role="tablist">
            <h2 style="text-align: center;">Trạng thái</h2>
            <ul class="list-group list-category">
                <?php
                foreach ($btinhtrangdonhang as $tinhtrang) {
                    $activedh = "";
                    if (!isset($_REQUEST['ttdh'])) {
                        if ($tinhtrang == $btinhtrangdonhang[0]) {
                            $activedh = "active";
                        }
                    } else {
                        if ($tinhtrang == $_REQUEST['ttdh']) {
                            $activedh = "active";
                        }
                    }
                ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a class="list-group-item list-group-item-action <?= $activedh ?>" href="../views/donhang.php?ttdh=<?= $tinhtrang ?>">
                            <?= $tinhtrang ?>
                            <span class="badge bg-primary rounded-pill">
                                <?php
                                foreach ($soluongdh as $tinhtrangdh => $soluong) {
                                    if ($tinhtrangdh == $tinhtrang) {
                                        echo $soluong;
                                        break;
                                    }
                                }
                                if (!isset($soluongdh[$tinhtrang])) {
                                    echo 0;
                                }
                                ?>
                            </span>
                        </a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>

    <div class="col-sm-10 donmua-content-tab">
        <div class="tab-content" id="nav-tabContent">
            <?php
            if (empty($tenvama)) {
            ?>
                <!--  -->
                <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="list-messages-list">
                    <div class="donmua-chuacodonhang-img">
                        <img src="../material/img/donmua.png" width="100px" height="100px">
                    </div>
                    <div class="donmua-chuacodonhang">
                        <p>Chưa có đơn hàng</p>
                    </div>
                </div>
                <!--  -->
                <?php
            } else {
                foreach ($tenvama as $ktenvama => $vtenvama) {
                ?>
                    <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="list-settings-list">
                        <div class="donmua-donhang">
                            <div class="donmua-trangthai">
                                <div><a class="donmua-mdh" href="../views/donhangchitiet.php?madhct=<?= $ktenvama ?>">Mã đơn hàng: <?= $ktenvama ?></a></div>
                                <div class="donmua-trangthai-1"><a href=""><?= $vtenvama ?></a></div>
                            </div>
                            <?php
                            $countdh = 0;
                            $tongtiendh = 0;
                            foreach ($bchodh as $bcode) {
                                foreach ($bcode as $bcho => $bvalue) {
                                    if ($bcode['madh'] == $ktenvama) {
                                        $countdh++;
                                        $bcode['giatienc'] = str_replace([".", "VND"], "", $bcode['giatienc']);
                                        $tongtiendh += intval($bcode['giatienc']);
                            ?>
                                        <div class="donhang-imgsp order">
                                            <div class="alaska-naudo-order">
                                                <a class="new-a" href="./sanphamchitiet.php?mac=<?= $bcode['mac'] ?>">
                                                    <img src="data:image/jpeg;base64, <?= base64_encode($bcode['hinhanhc']) ?>">
                                                </a>
                                                <span>
                                                    <a class="new-a" href="./sanphamchitiet.php?mac=<?= $bcode['mac'] ?>">
                                                        <?= $bcode['codec'] . " " . $bcode['tendm'] . " " . $bcode['mausacc'] ?>
                                                    </a>
                                                </span>
                                                <span class="small"> x1</span><br>
                                            </div>
                                            <div class="tienhang order dhtc"><span>
                                                    <?php
                                                    $bcode['giatienc'] = number_format($bcode['giatienc'], 0, ',', '.');
                                                    echo $bcode['giatienc'] . '<sup>đ</sup>' ?>
                                                </span>
                                                <?php
                                                if ($vtenvama == end($btinhtrangdonhang)) {
                                                ?>
                                                    <button class="danhgia-modal danhgia-dg btn-danh-gia reviewed" data-product-id="<?=
                                                     $bcode['codec'] . " " . $bcode['tendm'] . " " . $bcode['mausacc'] ?>"
                                                      onclick="openReviewModal('<?= $bcode['codec'] ?>')">Đánh giá</button>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                            <?php
                                    }
                                    break;
                                }
                            }
                            $tongtiendh = number_format($tongtiendh, 0, ',', '.');
                            ?>

                            <div class="donmua-thanhtien">
                                <div class="donmua-soluong">
                                    <p>số lượng :<?= $countdh ?></p>
                                    <p>Thành tiền: <?= $tongtiendh ?><sup>đ</sup>
                                </div>
                            </div>
                            <?php
                            if ($vtenvama == end($btinhtrangdonhang)) {
                            ?>
                                <div class="dathang-2 order">
                                    <div class="dathang-content-right-button">
                                        <button class="dg-danhan">Đã nhận</button>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
        
    </div>
    <?php
    include_once("../views/messenger.php");
    ?>
</div>
<script>
        function openReviewModal(productCode) {
    $('.modal-dg').addClass('open-account');
    document.getElementById('product-code').value = productCode;
}
    document.addEventListener("DOMContentLoaded", function() {
        // ktra donmua-donhang có rỗng hay ko
        function checkDonHangEmpty(tabId) {
            var donHangElement = document.querySelector(tabId + ' .donmua-donhang');
            var donHangTrongElement = document.querySelector(tabId + ' .donmua-donhangtrong');

            if (donHangElement.children.length === 0) {
                // rỗng
                donHangTrongElement.style.display = 'block';
            } else {
                // khác rỗng
                donHangTrongElement.style.display = 'none';
            }
        }

        // gọi hàm cho từng tab
        checkDonHangEmpty('#list-profile');
        checkDonHangEmpty('#list-messages');
        checkDonHangEmpty('#list-settings');

        var tabs = document.querySelectorAll('[data-bs-toggle="list"]');
        tabs.forEach(function(tab) {
            tab.addEventListener('click', function() {
                setTimeout(function() {
                    checkDonHangEmpty(tab.getAttribute('href'));
                }, 100);
            });
        });
    });
</script>


<?php
include_once("../views/danhgia.php")
?>
<?php
include('../views/modal.php')
?>
<?php
include_once("../layout/footer.php");
?>