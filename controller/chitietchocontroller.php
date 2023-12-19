<?php
require_once("../config/connect.php");
if (isset($_SESSION['dangnhap'])) {
    $username = $_SESSION['dangnhap'];
    $lquery1 = "SELECT khachhang.makh FROM khachhang INNER JOIN dangnhap ON khachhang.madn=dangnhap.madn
    WHERE dangnhap.tendn='$username'";
    $lresult1 = mysqli_query($connect, $lquery1);
    $lrow = mysqli_fetch_assoc($lresult1);
    $lmakh = $lrow['makh'];
}

$bmac = $_REQUEST['mac'];
$sql = "SELECT cho.*, danhmuc.tendm FROM `cho` INNER join danhmuc on cho.madm=danhmuc.madm WHERE mac=$bmac";
$result = mysqli_query($connect, $sql);
$bcho = [];
if (mysqli_num_rows($result) > 0) {
    while ($c = mysqli_fetch_assoc($result)) {
        $mac = $c['mac'];
        $tendm = $c['tendm'];
        $codec = $c['codec'];
        $ngaysinhc = $c['ngaysinhc'];
        $gioitinhc = $c['gioitinhc'];
        $mausacc = $c['mausacc'];
        $cannangc = $c['cannangc'];
        $tinhtrangtiemchungc = $c['tinhtrangtiemchungc'];
        $tinhtrangsuckhoec = $c['tinhtrangsuckhoec'];
        $giatienc = $c['giatienc'];
        $motac = $c['motac'];
        $hinhanhc = $c['hinhanhc'];
        $soluongc = $c['soluongc'];

        $bcho = [
            'mac' => $mac,
            'tendm' => $tendm,
            'codec' => $codec,
            'ngaysinhc' => $ngaysinhc,
            'gioitinhc' => $gioitinhc,
            'mausacc' => $mausacc,
            'cannangc' => $cannangc,
            'tinhtrangtiemchungc' => $tinhtrangtiemchungc,
            'tinhtrangsuckhoec' => $tinhtrangsuckhoec,
            'giatienc' => $giatienc,
            'motac' => $motac,
            'hinhanhc' => $hinhanhc,
            'soluongc' => $soluongc
        ];
    }
}
mysqli_free_result($result);

$bsqlcho = "SELECT cho.mac, cho.codec,cho.giatienc,cho.mausacc,cho.hinhanhc,danhmuc.tendm from 
cho INNER join danhmuc on cho.madm = danhmuc.madm 
where soluongc=1
ORDER BY RAND() LIMIT 8 ";
$bresultcho = mysqli_query($connect, $bsqlcho) or die('cant get record');
$bdanhsachcho = [];

if (mysqli_num_rows($bresultcho)) {
    while ($browcho = mysqli_fetch_assoc($bresultcho)) {
        $bcodec = $browcho['codec'];
        $bgiatienc = $browcho['giatienc'];
        $bmausacc = $browcho['mausacc'];
        $bhinhanh = $browcho['hinhanhc'];
        $bmacho = $browcho['mac'];
        $bdanhmuccho = $browcho['tendm'];

        $bcho2 = [
            'mac' => $bmacho,
            'codec' => $bcodec,
            'giatienc' => $bgiatienc,
            'mausacc' => $bmausacc,
            'hinhanhc' => $bhinhanh,
            'danhmucc' => $bdanhmuccho
        ];

        $bdanhsachcho[$bcodec] = $bcho2;
    }
}
mysqli_free_result($bresultcho);

if (isset($_SESSION['dangnhap'])) {
    $sql1 = "SELECT mac FROM giohang WHERE mac=$bmac and makh =$lmakh";
    $result = mysqli_query($connect, $sql1);
    if (mysqli_num_rows($result) > 0) {
        $themc = '<button class="submit " style="pointer-events: none;
        opacity: 0.7;"> Đã có trong giỏ hàng </button>';
    } else {
        $themc = '<form action="sanphamchitiet.php?mac=' . $bmac . '" method="post">
        <button type="submit" name="addToCart" class="submit " onclick="addToCart()">+ Thêm vào giỏ hàng</button>
        </form>';
    }
    mysqli_free_result($result);

    if (isset($_REQUEST['addToCart'])) {
        $sql2 = "INSERT INTO giohang (makh, mac) VALUES ($lmakh, $bmac)";
        $result2 = mysqli_query($connect, $sql2);
        if ($result2) {
            $themc = '<button class="submit" style="pointer-events: none; opacity: 0.7;">Đã thêm vào giỏ hàng</button>';
        } else {
            die('Lỗi truy vấn MySQLi: ' . mysqli_error($connect));
        }
        echo '<script>window.location.replace(document.referrer);</script>';
    exit;
    }
}
mysqli_close($connect);
