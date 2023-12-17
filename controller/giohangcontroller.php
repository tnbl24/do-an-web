<?php
require_once("../config/connect.php");
if(isset($_SESSION['dangnhap'])){
    $username= $_SESSION['dangnhap'] ;
    $lquery1 ="SELECT khachhang.makh FROM khachhang INNER JOIN dangnhap ON khachhang.madn=dangnhap.madn
    WHERE dangnhap.tendn='$username'";
    $lresult1 =mysqli_query($connect,$lquery1);
    $lrow = mysqli_fetch_assoc($lresult1);
    $lmakh=$lrow['makh'];
}

$sql = "SELECT cho.* ,danhmuc.tendm FROM giohang 
INNER JOIN cho on giohang.mac=cho.mac
INNER JOIN danhmuc on danhmuc.madm=cho.madm
WHERE makh=$lmakh";
$result = mysqli_query($connect,$sql);
$bchogh = [];
if(mysqli_num_rows($result)){
    while($c = mysqli_fetch_assoc($result)){
        $mac = $c['mac'];
        $tendm =$c['tendm'];
        $codec=$c['codec'];
        $gioitinhc=$c['gioitinhc'];
        $mausacc=$c['mausacc'];
        $giatienc=$c['giatienc'];
        $hinhanhc=$c['hinhanhc'];

        $bcho = [
            'mac' => $mac,
            'tendm' => $tendm,
            'codec' => $codec,
            'gioitinhc' => $gioitinhc,
            'mausacc' => $mausacc,
            'giatienc' => $giatienc,
            'hinhanhc' => $hinhanhc
        ];
        $bchogh[$mac] = $bcho;
    }
}
mysqli_free_result($result);