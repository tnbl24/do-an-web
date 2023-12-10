<?php
include("../layout/header.php");
require_once("../controller/danhmuccontroller.php");
?>


<div class="row dog-content">
    <div class="col-sm-2 dog-content-category ">
        <h3 class="dog-category">Danh mục</h3>
        <div class="list-group" id="list-tab" role="tablist">
            <ul class="list-group list-category">
                <?php
                foreach ($danhmucs as $danhmuc => $value) {
                ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a class="list-group-item list-group-item-action <?php if($danhmuc == array_key_first($danhmucs) )  echo "active" ?>" id="list-profile-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-profile"><?= $danhmuc  ?><span class="badge bg-primary rounded-pill"><?= $value  ?></span></a>

                    </li>
                <?php
                }
                ?>
                
            </ul>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="tab-content" id="nav-tabContent">
            <div class="dog-content-search-box">
                <form class="form-inline my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </button>
                </form>
            </div>
            <div class="tab-pane fade show " id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                <div class="home-content-1 dog-contant-2">
                    <div class="dog-content-search">
                    </div>
                    <div class="home-content-1-shop justify-content-evenly ">
                        <div class="container-home text-center home-row container-dog-list ">
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
                </div>

            </div>
            <div class="tab-pane fade show active" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                <h3>husky</h3>
            </div>
            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                <h3>gâu đần</h3>
            </div>
            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                <h3>shiba</h3>
            </div>
            <div class="pagination dog-list">
                <?php
                    include("../views/phantrang.php")
                ?>
            </div>
        </div>

    </div>

    <div class="home-content-2">
        <h2 style="padding-top: 50px;
            margin:0;">FEEDBACK </h2>

        <?php
        include_once("../views/binhluan.php");
        ?>

    </div>
    <div class="contact-share-button" onclick="sendMessage()">
        <img src="../material/img/fb-messenger.png" alt="Message Icon">
    </div>
</div>


<?php
include('../views/modal.php')
?>
<?php
include("../layout/footer.php");
?>