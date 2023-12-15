<?php
include_once("../layout/header.php");
require_once("../controller/tinhtrangdonhangcontroller.php");
?>
<div class="row donmua-content">
    <div class="col-sm-2 donmua-content-category ">
        <div class="donmua-list-group" id="list-tab" role="tablist">
            <h2 style="text-align: center;"> Trạng thái</h2>
            <ul class="list-group list-category">
                <?php
                foreach ($tinhtranghoadons as $tinhtrang => $soluong) {
                ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a class="list-group-item list-group-item-action <?php if ($tinhtrang == array_key_first($tinhtranghoadons)) echo "active" ?>" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings"><?= $tinhtrang ?><span class="badge bg-primary rounded-pill"><?= $soluong ?></span></a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="col-sm-10 donmua-content-tab">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                <div class="donmua-donhang">
                    <div class="donmua-trangthai">
                        <div class="donmua-mdh">Mã đơn hàng .2ng3nybn</div>
                        <div class="donmua-trangthai-1"><a href="">Đơn hàng đang được chuẩn bị</a></div>
                    </div>

                    <!--  -->
                    <div class="donhang-imgsp order">
                        <div class="alaska-naudo-order">
                            <img src="../material/img/ala nâu đỏ.jpg">
                            <span>Alaska nâu đỏ</span>
                            <span class="small"> x1</span><br>
                        </div>
                        <div class="tienhang order"><span>18.000.000<sup>đ</sup></span></div>
                    </div>

                    <!--  -->
                    <div class="donhang-imgsp order">
                        <div class="alaska-naudo-order">
                            <img src="../material/img/ala nâu đỏ.jpg">
                            <span>Alaska nâu đỏ</span>
                            <span class="small"> x1</span><br>
                        </div>
                        <div class="tienhang order"><span>18.000.000<sup>đ</sup></span></div>
                    </div>
                    <!--  -->
                    <div class="donmua-thanhtien">
                        <div class="donmua-soluong">
                            <p>số lượng :2</p>
                            <p>Thành tiền: 38.000.000<sup>đ</sup>
                        </div>
                    </div>
                </div>
            </div>

            <!--  -->
            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                <div class="donmua-chuacodonhang-img">
                    <img src="../material/img/donmua.png" width="100px" height="100px">
                </div>
                <div class="donmua-chuacodonhang">
                    <p>Chưa có đơn hàng</p>
                </div>
            </div>

            <!--  -->
            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                <div class="donmua-donhang">
                    <div class="donmua-trangthai">
                        <div class="donmua-mdh">Mã đơn hàng .2ng3nybn6</div>
                        <div class="donmua-trangthai-1"><a href="">Đơn hàng giao thành công</a></div>
                    </div>

                    <div class="donhang-imgsp order">
                        <div class="alaska-naudo-order">
                            <img src="../material/img/ala nâu đỏ.jpg">
                            <span>Alaska nâu đỏ</span>
                            <span class="small"> x1</span><br>
                        </div>
                        <div class="tienhang order dhtc"><span>18.000.000<sup>đ</sup></span>
                            <button class="danhgia-modal danhgia-dg">Đánh giá</button>
                        </div>
                    </div>
                    <div class="donhang-imgsp order">
                        <div class="alaska-naudo-order">
                            <img src="../material/img/ala nâu đỏ.jpg">
                            <span>Alaska nâu đỏ</span>
                            <span class="small"> x1</span><br>
                        </div>
                        <div class="tienhang order dhtc"><span>18.000.000<sup>đ</sup></span>
                            <button class="danhgia-modal danhgia-dg">Đánh giá</button>
                        </div>
                    </div>
                    <div class="donmua-thanhtien">
                        <div class="donmua-soluong">
                            <p>số lượng :2</p>
                            <p>Thành tiền: 38.000.000<sup>đ</sup>
                        </div>
                    </div>
                    <div class="dathang-2 order">
                        <div class="dathang-content-right-button">
                            <button class="dg-danhan">Đã nhận</button>
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
<script>
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