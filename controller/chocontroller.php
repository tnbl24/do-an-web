<?php
require_once('../config/connect.php');

$bsqlsoluongdanhmuc = "SELECT COUNT(cho.madm) as soluong, danhmuc.tendm FROM cho INNER JOIN danhmuc WHERE danhmuc.madm = cho.madm GROUP by cho.madm;";
$bresultsoluongdm = mysqli_query($connect, $bsqlsoluongdanhmuc) or die("can't get record");
$bdanhmucs = [];
if (mysqli_num_rows($bresultsoluongdm) > 0) {
    while ($brow = mysqli_fetch_assoc($bresultsoluongdm)) {
        $bsoluong = $brow['soluong'];
        $btendanhmuc = $brow['tendm'];

        $bdanhmucs[$btendanhmuc] = $bsoluong;
    }
}
mysqli_free_result($bresultsoluongdm);


if (isset($_REQUEST['bdanhmuccho'])) {
    $bdanhmuccho = $_REQUEST['bdanhmuccho'];
} else {
    $bdanhmuccho = array_key_first($bdanhmucs);
}
$bsqlcho = "SELECT cho.codec,cho.giatienc,cho.mausacc,cho.hinhanhc,danhmuc.tendm from 
cho INNER join danhmuc on cho.madm = danhmuc.madm WHERE danhmuc.tendm='$bdanhmuccho'";
$bresultcho = mysqli_query($connect, $bsqlcho) or die('cant get record');
$bdanhsachcho=[];

if (mysqli_num_rows($bresultcho)) {

    while($browcho = mysqli_fetch_assoc($bresultcho)){
        $bcodec=$browcho['codec'];
        $bgiatienc = $browcho['giatienc'];
        $bmausacc = $browcho['mausacc'];
        $bhinhanh = $browcho['hinhanhc'];

        $bcho = [
            'codec' =>$bcodec,
            'giatienc' => $bgiatienc,
            'mausacc'=>$bmausacc,
            'hinhanhc'=>$bhinhanh,
            'danhmucc' => $bdanhmuccho
        ];

        $bdanhsachcho[$bcodec] = $bcho;
    }
    }

// print_r($bdanhsachcho);

mysqli_close($connect);
mysqli_free_result($bresultcho);