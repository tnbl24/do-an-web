<?php
include_once("../layout/header.php");
require_once("../controller/trangchucontroller.php");
?>
<div class="home">
    <div class="slide-show-1">
        <div id="carouselExampleInterval" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                    <img src="../material/img/sl1.2.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="../material/img/sl1.4.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="../material/img/sl1.8.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="../material/img/sl1.7.webp" class="d-block w-100">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="../material/img/sl1.6.jpg" class="d-block w-100">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <div class="test-button">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </div>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="home-slide-content">
            <div class="text-home">
                <h1>welcome to gau gau store</h1>
                <p>shop chó đến từ nhóm 5</p>
            </div>
            <div class="button-home">
                <a href="../views/cho.php">
                    <div class="button-wrapper">
                        <div class="text">Shop Now</div>
                        <span class="icon">
                            <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"></path>
                            </svg>
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="home-content">

        <div class="home-content-1">
            <h2>LASTEST</h2>
            <div class="home-content-1-shop justify-content-evenly ">
                <div class="container-home text-center home-row ">
                    <div class="row home-row ">
                        <?php
                        $count = 0;
                        foreach ($bdanhsachcho as $bdanhsach) {
                            foreach ($bdanhsach as $bcho => $bvalue) {
                                if ($count % 4 == 0) {
                                    echo '</div><div class="row home-row">';
                                }
                        ?>
                                <div class="col home-col">
                                    <div class="hover01 column">
                                        <div>
                                            <figure><a href="./sanphamchitiet.php?mac=<?= $bdanhsach['mac'] ?>"><img class="home-img" src="data:image/jpeg;base64, <?= base64_encode($bdanhsach['hinhanhc']) ?>" /></a></figure>
                                        </div>
                                    </div>
                                    <div class="home-text">
                                        <p class="home-dog-category"><?= $bdanhsach['danhmucc'] ?></p>
                                        <p><a href="./sanphamchitiet.php?mac=<?= $bdanhsach['mac'] ?>" class="home-dog-name">
                                                <?= $bdanhsach['codec'] . " " . $bdanhsach['danhmucc'] . " " . $bdanhsach['mausacc'] ?></a></p>
                                        <p class="home-dog-price"><?= $bdanhsach['giatienc']."VND" ?></p>
                                    </div>
                                </div>
                        <?php
                                $count++;
                                break;
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <a href="../views/cho.php" style="text-decoration:none;">
                <button class="home-content-1-btn">Xem thêm</button>
            </a>
        </div>

        <div class="home-content-2">
            <h2 style="padding-top: 50px;
            margin:0;"> WHAT OUR CUSTOMER SAY</h2>

            <section class="gradient-custom">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-12 col-lg-10 col-xl-8">
                        <div class="card">
                            <div class="card-body p-4">

                                <div class="row">
                                    <?php
                                    foreach ($bdanhsachdg as $value) {
                                        foreach ($value  as $dg => $valuedg) {
                                    ?>
                                            <div class="d-flex flex-start mt-4">
                                                <a class="me-3" href="#">
                                                    <img class="rounded-circle shadow-1-strong" src="data:image/jpeg;base64, <?= base64_encode($value['hinhanhkh']) ?>" alt="avatar" width="65" height="65" />
                                                </a>
                                                <div class="flex-grow-1 flex-shrink-1">
                                                    <div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-1">
                                                                <span class="customer-name"><?= $value['tenkh'] ?></span><span class="small"> <?= $value['ngaydg'] ?></span>
                                                            </p>

                                                        </div>
                                                        <p class="small mb-0">
                                                            <?= $value['noidungdg'] ?>
                                                            <?php
                                                            if ($value['hinhanhdg'] != "") {
                                                                echo '<br> 
                                        <img style="margin-top: 10px;" width="200px" height="200px" src="data:image/jpeg;base64,' .  base64_encode($value["hinhanhdg"]) . '" />';
                                                            }
                                                            ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                            break;
                                        }
                                    }
                                    ?>
                                </div>

                                <div class="pagination">
                                    <!-- <a href="#">&laquo;</a> -->
                                    <?php
                                    for ($i = 1; $i <= $totalpage; $i++) {
                                        if ($i == $page) {
                                            echo "<a class ='active2'>$i</a>";
                                        } else {
                                            echo "<a href='trangchu.php?page=$i'>$i</a>";
                                        }
                                    }
                                    ?>

                                    <!-- <a href="#">&raquo;</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
            include_once("../views/messenger.php");
            ?>
        </div>

        <div class="quotes">
            <q><i>
                    Một chú chó không quan tâm bạn giàu hay nghèo, có học thức hay không có học thức, thông minh hay ngốc nghếch. Hãy trao cho nó trái tim của bạn, nó cũng sẽ trao lại cho bạn trái tim của mình.
                </i>
            </q>
        </div>
        <?php
        include_once("../layout/footer.php");
        ?>