<?php
include_once("../layout/header.php");
?>
<div class="row donmua-content">
    <div class="col-sm-2 donmua-content-category ">
        <div class="donmua-list-group" id="list-tab" role="tablist">
            <ul class="list-group list-category">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a class="list-group-item list-group-item-action active " id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Tất cả<span class="badge bg-primary rounded-pill">3</span></a>


                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Chờ giao hàng<span class="badge bg-primary rounded-pill">2</span></a>


                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Đang giao<span class="badge bg-primary rounded-pill">0</span></a>


                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Hoàn thành<span class="badge bg-primary rounded-pill">1</span></a>

                </li>
            </ul>
        </div>
    </div>
    <div class="col-sm-10 donmua-content-tab">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                <!-- tất cả đơn hàng-->
                <!-- đơn 1 -->
                <div class="donmua-donhang">
                    <div class="donmua-trangthai">
                        <div class="donmua-mdh">Mã đơn hàng .2ng3nybn</div>
                        <div class="donmua-trangthai-1"><a href="">Đơn hàng đang được chuẩn bị</a></div>
                    </div>
                    <!-- sản phẩm 1 -->
                    <div class="donhang-imgsp order">
                        <div class="alaska-naudo-order">
                            <img src="../material/img/ala nâu đỏ.jpg">
                            <span>Alaska nâu đỏ</span>
                            <span class="small"> x1</span><br>
                        </div>
                        <div class="tienhang order"><span>18.000.000<sup>đ</sup></span></div>
                    </div>
                    <!-- sản phẩm 2 -->
                    <div class="donhang-imgsp order">
                        <div class="alaska-naudo-order">
                            <img src="../material/img/ala nâu đỏ.jpg">
                            <span>Alaska nâu đỏ</span>
                            <span class="small"> x1</span><br>
                        </div>
                        <div class="tienhang order"><span>18.000.000<sup>đ</sup></span></div>
                    </div>
                    <!-- tổng tiền đơn hàng -->
                    <div class="donmua-thanhtien">
                        <div class="donmua-soluong">
                            <p>số lượng :2</p>
                            <p>Thành tiền: 38.000.000<sup>đ</sup>
                        </div>
                    </div>
                </div>
                <!-- đơn 2 -->
                <div class="donmua-donhang">
                    <div class="donmua-trangthai">
                        <div class="donmua-mdh">Mã đơn hàng .2ng3nybn6</div>
                        <div class="donmua-trangthai-1"><a href="">Đơn hàng giao thành công</a></div>
                    </div>
                    <!-- sản phẩm -->
                    <div class="donhang-imgsp order">
                        <div class="alaska-naudo-order">
                            <img src="../material/img/ala nâu đỏ.jpg">
                            <span>Alaska nâu đỏ</span>
                            <span class="small"> x1</span><br>
                        </div>
                        <div class="tienhang order"><span>18.000.000<sup>đ</sup></span></div>
                    </div>

                    <div class="donmua-thanhtien">
                        <div class="donmua-soluong">
                            <p>số lượng :2</p>
                            <p>Thành tiền: 38.000.000<sup>đ</sup>
                        </div>
                    </div>
                    <!-- button -->
                    <div class="dathang-2 order">
                        <div class="dathang-content-right-button">
                            <a href="#"><button>Đã nhận</button></a>
                            <a href="danhgia.php"><button>Đánh giá</button></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
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
                        <div class="tienhang order"><span>18.000.000<sup>đ</sup></span>
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
                            <a href="#"><button>Đã nhận</button></a>
                            <a href="danhgia.php"><button>Đánh giá</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-share-button" onclick="sendMessage()">
        <img src="../material/img/fb-messenger.png" alt="Message Icon">
    </div>
</div>
<?php
include_once("../layout/footer.php");
?>