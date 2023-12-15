<?php
require_once('../config/connect.php');

// danh mục
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

// in chó theo danh mục
if (isset($_REQUEST['danhmuc'])) {
    $bdanhmuccho = $_REQUEST['danhmuc'];
} else {
    $bdanhmuccho = array_key_first($bdanhmucs);
}
$totalrowc=8;
$sql3c = "SELECT cho.mac, cho.codec,cho.giatienc,cho.mausacc,cho.hinhanhc,danhmuc.tendm from 
cho INNER join danhmuc on cho.madm = danhmuc.madm WHERE danhmuc.tendm='$bdanhmuccho'
";
$result3c = mysqli_query($connect,$sql3c);
if(mysqli_num_rows($result3c)>0){
    $totalpagec = ceil(mysqli_num_rows($result3c) / $totalrowc);
}
if(isset($_REQUEST['pagec'])){
    $pagec = $_REQUEST['pagec'];
    if ($pagec < 1) {
        $pagec = 1;
    }
    if ($pagec > $totalpagec) {
        $pagec = $totalpagec;
    }
}
else{
    $pagec = 1;
}


$bsqlcho = "SELECT cho.mac, cho.codec,cho.giatienc,cho.mausacc,cho.hinhanhc,danhmuc.tendm from 
cho INNER join danhmuc on cho.madm = danhmuc.madm WHERE danhmuc.tendm='$bdanhmuccho' limit ". ($pagec -1)*$totalrowc .",$totalrowc";
$bresultcho = mysqli_query($connect, $bsqlcho) or die('cant get record');
$bdanhsachcho=[];

if (mysqli_num_rows($bresultcho)) {
    while($browcho = mysqli_fetch_assoc($bresultcho)){
        $bcodec=$browcho['codec'];
        $bgiatienc = $browcho['giatienc'];
        $bmausacc = $browcho['mausacc'];
        $bhinhanh = $browcho['hinhanhc'];
        $bmac=$browcho['mac'];
        $bcho = [
            'mac'=> $bmac,
            'codec' =>$bcodec,
            'giatienc' => $bgiatienc,
            'mausacc'=>$bmausacc,
            'hinhanhc'=>$bhinhanh,
            'danhmucc' => $bdanhmuccho
        ];
        $bdanhsachcho[$bcodec] = $bcho;
    }
    }
mysqli_free_result($bresultcho);

//  đánh giá
$totalrow=5;
$sql3 = "SELECT danhgia.*, khachhang.tenkh,khachhang.hinhanhkh, danhmuc.tendm FROM danhgia 
INNER JOIN khachhang on danhgia.makh=khachhang.makh 
INNER JOIN cho on danhgia.mac = cho.mac
INNER join danhmuc on cho.madm = danhmuc.madm
where danhmuc.tendm='$bdanhmuccho' GROUP by madg DESC 
";
$result3 = mysqli_query($connect,$sql3);
$totalpage = ceil(mysqli_num_rows($result3) / $totalrow);
if(isset($_REQUEST['page'])){
    $page = $_REQUEST['page'];
    if ($page < 1) {
        $page = 1;
    }
    if ($page > $totalpage) {
        $page = $totalpage;
    }
}
else{
    $page = 1;
}

$sql2 = "SELECT danhgia.*, khachhang.tenkh,khachhang.hinhanhkh, danhmuc.tendm FROM danhgia 
INNER JOIN khachhang on danhgia.makh=khachhang.makh 
INNER JOIN cho on danhgia.mac = cho.mac
INNER join danhmuc on cho.madm = danhmuc.madm
where danhmuc.tendm='$bdanhmuccho' GROUP by madg DESC limit ". ($page -1)*$totalrow .",$totalrow";
$result2 = mysqli_query($connect,$sql2);
$bdanhsachdg=[];
if(mysqli_num_rows($result2)>0){
    while($row = mysqli_fetch_assoc($result2)){
        $bmadg = $row['madg'];
        $bmakh = $row['makh'];
        $bngaydg = $row['ngaydg'];
        $bhinhanhdg = $row['hinhanhdg'];
        $bnoidungdg = $row['noidungdg'];
        $bmac = $row['mac'];
        $btenkh = $row['tenkh'];
        $bhinhanhkh = $row['hinhanhkh'];
        $bdg= [
            'madg' => $bmadg,
            'makh' => $bmakh,
            'ngaydg' => $bngaydg,
            'hinhanhdg' => $bhinhanhdg,
            'noidungdg' => $bnoidungdg,
            'mac' => $bmac,
            'tenkh' => $btenkh,
            'hinhanhkh' => $bhinhanhkh
        ];
    $bdanhsachdg[$bmadg]=$bdg;
    }
}
mysqli_free_result($result3);
mysqli_free_result($result2);

mysqli_close($connect);

$search = $_REQUEST['search'];

// tìm kiếm
if(isset($_REQUEST['submit'])){
    echo $search;
}else{
    echo "không nhận được dữ liệu";
}
echo $search;