<?php
include("../layout/header.php");
require_once("../controller/chocontroller.php");
?>

<div class="row dog-content">
    <div class="col-sm-2 dog-content-category ">
        <h3 class="dog-category">Danh mục</h3>
        <div class="list-group" id="list-tab" role="tablist">
            <ul class="list-group list-category">
                <?php
                foreach ($bdanhmucs as $bdanhmuc => $bvalue) {
                    if (!isset($_REQUEST['danhmuc'])) {
                        if ($bdanhmuc == array_key_first($bdanhmucs)) {
                            $activeClass = "active";
                        } else $activeClass = "";
                    } else {
                        $activeClass =  ($bdanhmuc == $_GET['danhmuc']) ? "active" : "";
                    }
                ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a class="list-group-item list-group-item-action <?= $activeClass ?>" href="cho.php?danhmuc=<?= $bdanhmuc; ?>" role="tab" aria-controls="list-profile">
                            <?= $bdanhmuc ?><span class="badge bg-primary rounded-pill"><?= $bvalue ?></span></a>
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
                <form class="form-inline my-lg-0" method="POST">
                    <input class="form-control mr-sm-2 search" type="search" placeholder="Search" aria-label="Search" name="search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </button>
                </form>
            </div>
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                <div class="home-content-1 dog-contant-2">
                    <div class="dog-content-search">
                    </div>
                    <div class="home-content-1-shop justify-content-evenly ">
                        <div class=" home-row container-dog-list ">
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
                                                    <figure><a href="./sanphamchitiet.php?mac=<?= $bcode['mac'] ?>"> <?php echo '<img class="home-img" src="data:image/jpeg;base64,' . base64_encode($bcode['hinhanhc']) . '">' ?> </a></figure>
                                                </div>
                                            </div>
                                            <div class="home-text">
                                                <p class="home-dog-category"><?= $bcode['danhmucc'] ?></p>
                                                <p><a href="./sanphamchitiet.php?mac=<?= $bcode['mac'] ?>" class="home-dog-name">
                                                        <?= $bcode['codec'] . " " . $bcode['danhmucc'] . " " . $bcode['mausacc'] ?>
                                                    </a></p>
                                                <p class="home-dog-price"><?= $bcode['giatienc'] ?></p>
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
                    <div class="pagination">
                        <!-- <a href="#">&laquo;</a> -->
                        <?php
                        for ($j = 1; $j <= $totalpagec; $j++) {
                            if ($j == $pagec) {
                                echo "<a class ='active2'>$j</a>";
                            } else {
                                echo "<a href='cho.php?danhmuc=" . $_REQUEST['danhmuc'] . "&pagec=$j'>$j</a>";
                            }
                        }
                        ?>
                        <!-- <a href="#">&raquo;</a> -->
                    </div>
                </div>
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
    <?php
    include_once("../views/messenger.php");
    ?>
</div>
<script>
    $(document).ready(function() {
        $(".search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(".home-col").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });
    });
</script>

<?php
include("../layout/footer.php");
?>