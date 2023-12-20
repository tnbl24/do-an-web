<?php
include_once("../layout/header.php");
require_once("../controller/chitietchocontroller.php");
?>
<div class="product-detail-container">
    <div class="product-detail">
        <div class="container sproduct my-6 pt-lg-5">
            <div class="chinhh">
                <h6>
                    <span onclick="redirectToHome()" style="cursor: pointer; color: #4189be;">Trang chủ</span> >
                    <span onclick="redirectToDog()" style="cursor: pointer; color: #4189be;">Chó</span> >
                    <?= $bcho['codec'] . " " . $bcho['tendm'] . " " . $bcho['mausacc'] ?>
                </h6>
            </div>

            <div class="row mt-5">
                <div class="col-lg-5 col-md-12 col-12">
                    <img class="img-fluid w-100" src="data:image/jpeg;base64, <?= base64_encode($bcho['hinhanhc']) ?>">
                </div>
                <div class="product-detail-1" style="width: fit-content;">
                    <div class="product-detail-name">
                        <h1 class="py-4" style="text-align:left;
                    padding:0;
                    margin:0;
                    font-size:50px;
                    margin-left: 45px;"><?= $bcho['codec'] . " " . $bcho['tendm'] . " " . $bcho['mausacc'] ?></h1>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">

                        <div class="product-detail-many" style="margin-left: 80px;align-items: baseline;margin-top: 25px;">
                        <h4> Giá tiền: </h4>
                            <h2 style="color:red;">
                                <?php
                                $bcho['giatienc'] = number_format($bcho['giatienc'], 0, ',', '.');
                                echo $bcho['giatienc'] . '<sup>đ</sup>' ?>

                            </h2>
                            <div class="product-detail-button">
                                <h4 style="color: #6c5d5d;text-align: left;">Số lượng : <?= $bcho['soluongc'] ?></h4>
                                <?php
                                if ($bcho['soluongc'] == 0) {
                                    echo '<button style="pointer-events: none;
                        opacity: 0.7;"> Hết hàng </button>';
                                } else {
                                    if (isset($_SESSION['dangnhap'])) {
                                        echo $themc;
                                    } else echo '<a  href="../views/dangnhap.php"><button class="submit">
                            + Thêm vào giỏ hàng 
                            </button>  </a>';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="product-detail-infor" style= "width: 425px;">
                            <h3 class="mt-4 mb-4" style="text-align:left;
                    padding:0;
                    margin:0;
                    font-size:26px;">Thông tin chi tiết của chó</h3>
                            <h4> Ngày sinh: <?= $bcho['ngaysinhc'] ?><br>
                                Giới tính: <?= $bcho['gioitinhc'] ?> <br>
                                Màu sắc: <?= $bcho['mausacc'] ?> <br>
                                Cân nặng: <?= $bcho['cannangc'] ?> <br>
                                Đặc điểm: <?= $bcho['motac'] ?><br>
                                <?= $bcho['tinhtrangtiemchungc'] ?> <br>
                                Tình trạng sức khỏe:<?= $bcho['tinhtrangsuckhoec'] ?> <br>
                            </h4>
                        </div>
                    </div>
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
                        <?php
                        $bcount = 0;
                        foreach ($bdanhsachcho as $bcode) {
                            foreach ($bcode as $bcho => $bvalue) {
                                if ($bcount % 4 == 0) {
                                    echo '</div><div class="row home-row">';
                                }
                        ?>
                                <div class="col home-col">
                                    <div class="hover01 column">
                                        <div>
                                            <figure><a href="./sanphamchitiet.php?mac=<?= $bcode['mac'] ?>">
                                                    <?php echo '<img class="home-img" src="data:image/jpeg;base64,' . base64_encode($bcode['hinhanhc']) . '">' ?>
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="home-text">
                                        <p class="home-dog-category"><?= $bcode['danhmucc'] ?></p>
                                        <p><a href="./sanphamchitiet.php?mac= <?= $bcode['mac'] ?>" class="home-dog-name">
                                                <?= $bcode['codec'] . " " . $bcode['danhmucc'] . " " . $bcode['mausacc'] ?>
                                            </a></p>
                                        <p class="home-dog-price">
                                            <?php
                                            $bcode['giatienc'] = number_format($bcode['giatienc'], 0, ',', '.');
                                            echo $bcode['giatienc'] . '<sup>đ</sup>' ?>
                                        </p>
                                    </div>
                                </div>
                        <?php
                                $bcount++;
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
        <?php
        include_once("../views/messenger.php");
        ?>
    </div>
</div>
<?php
include('../views/modal.php')
?>
<?php
include_once("../layout/footer.php");
?>