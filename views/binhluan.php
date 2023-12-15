<?php
require_once("../controller/chocontroller.php");
?>
<section class="gradient-custom">
    <div class="row d-flex justify-content-center">
        <div class="col-md-12 col-lg-10 col-xl-8">
            <div class="card">
                <div class="card-body p-4">
                    <div class="row">
                        <?php
                        if ($bdanhsachdg != NULL) {
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
                        } else {
                            echo '<p style="text-align:center;">
                            Chưa có đánh giá</p>';
                        }
                        ?>
                    </div>
                </div>
                <div>
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
    </div>
</section>