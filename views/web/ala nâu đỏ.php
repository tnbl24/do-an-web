<?php
include_once("../layout/header.php");
?>
<div class="product-detail-container">
    <div class="product-detail">
        <div class="container sproduct my-6 pt-lg-5">
            <div class="chinhh">
            <h6>
            <span onclick="redirectToHome()" style="cursor: pointer; color: #4189be;" >Trang chủ</span> >
            <span onclick="redirectToDog()" style="cursor: pointer; color: #4189be;">Chó</span> > Alaska Nâu Đỏ
            </h6>
            </div>
            
            <div class="row mt-5">
            <div class="col-sm-2 dog-content-category ">
        <h3 class="dog-category">Danh mục</h3>
        <div class="list-group" id="list-tab" role="tablist">
            <ul class="list-group list-category">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a class="list-group-item list-group-item-action active " id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">alaska <span class="badge bg-primary rounded-pill">14</span></a>


                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">husky<span class="badge bg-primary rounded-pill">2</span></a>


                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">gâu đần<span class="badge bg-primary rounded-pill">1</span></a>


                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">shiba <span class="badge bg-primary rounded-pill">1</span></a>

                </li>
            </ul>
        </div>
    </div>
                <div class="col-lg-5 col-md-12 col-12">
                    <img class="img-fluid w-100" src="../material/img/ala nâu đỏ.jpg">
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <h3 class="py-4" style="text-align:left;
                    padding:0;
                    margin:0;
                    font-size:26px;">Chó Alaska nâu đỏ</h3>
                    <h2 style="color:red;">15.000.000 VND</h2>
                    <div class="product-detail-button">
                        <button class="submit"> + Thêm vào giỏ hàng</button>
                    </div>
                    <h3 class="mt-4 mb-4" style="text-align:left;
                    padding:0;
                    margin:0;
                    font-size:26px;">Thông tin chi tiết</h3>
                    <h4 > Ngày sinh: 04/09/2023 <br>
                        Giới tính: Đực <br>
                        Màu sắc: Nâu Đỏ <br>
                        Cân nặng: 13kg <br>
                        Đặc điểm: Thuần Chủng <br>
                        Đã tiêm một mũi <br>
                        Tình trạng sức khỏe: Tốt <br>
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <div class="home-content">
        <div class="home-content-1">
            <h2>Những sản phẩm khác </h2>
            <div class="home-content-1-shop justify-content-evenly ">
                <div class="container-home text-center home-row ">
                    <div class="row home-row ">
                        <div class="col home-col">
                            <div class="hover01 column">
                                <div>
                                    <figure><a href="#"><img class="home-img" src="../material/img/2.jpg" /></a></figure>
                                </div>
                            </div>
                            <div class="home-text">
                                <p class="home-dog-category">alaska</p>
                                <p><a href="#" class="home-dog-name">alaska trắng thuần chủng</a></p>
                                <p class="home-dog-price">10 tỷ bery</p>
                            </div>
                        </div>

                        <div class="col home-col">
                            <div class="hover01 column">
                                <div>
                                    <figure><a href="#"><img class="home-img" src="../material/img/2.jpg" /></a></figure>
                                </div>
                            </div>
                            <div class="home-text">
                                <p class="home-dog-category">alaska</p>
                                <p><a href="#" class="home-dog-name">alaska trắng thuần chủng</a></p>
                                <p class="home-dog-price">10 tỷ bery</p>
                            </div>
                        </div>
            
                        <div class="col home-col">
                            <div class="hover01 column">
                                <div>
                                    <figure><a href="#"><img class="home-img" src="../material/img/2.jpg" /></a></figure>
                                </div>
                            </div>
                            <div class="home-text">
                                <p class="home-dog-category">alaska</p>
                                <p><a href="#" class="home-dog-name">alaska trắng thuần chủng</a></p>
                                <p class="home-dog-price">10 tỷ bery</p>
                            </div>
                        </div>

                        <div class="col home-col">
                            <div class="hover01 column">
                                <div>
                                    <figure><a href="#"><img class="home-img" src="../material/img/2.jpg" /></a></figure>
                                </div>
                            </div>
                            <div class="home-text">
                                <p class="home-dog-category">alaska</p>
                                <p><a href="#" class="home-dog-name">alaska trắng thuần chủng</a></p>
                                <p class="home-dog-price">10 tỷ bery</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="../web/dog.php" style="text-decoration:none;">
            <button class="home-content-1-btn">Xem thêm</button>
            </a>
        </div>
       <div class="contact-share-button" onclick="sendMessage()">
                <img src="../material/img/fb-messenger.png" alt="Message Icon">   
                </div>
    </div>
    </div>


<script>
    function redirectToHome() {
        window.location.href = "../web/home.php"; 
    }

    function redirectToDog() {
        window.location.href = "../web/dog.php"; 
    }
</script>

<?php
    include_once("../layout/footer.php");
    ?>