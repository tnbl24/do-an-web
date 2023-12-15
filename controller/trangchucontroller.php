<?php
require_once("../config/connect.php");

$sql = "SELECT cho.mac,cho.codec,cho.giatienc,cho.mausacc,cho.hinhanhc,danhmuc.tendm from 
cho INNER join danhmuc on cho.madm = danhmuc.madm group by mac DESC limit 8";
$result = mysqli_query($connect,$sql);
$bdanhsachcho = [];
if(mysqli_num_rows($result)>0){
    while($browcho = mysqli_fetch_assoc($result)){
        $bcodec=$browcho['codec'];
        $bgiatienc = $browcho['giatienc'];
        $bmausacc = $browcho['mausacc'];
        $bhinhanh = $browcho['hinhanhc'];
        $bdanhmuccho=$browcho['tendm'];
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
mysqli_free_result($result);

$totalrow=5;
$sql3 = "SELECT danhgia.*, khachhang.tenkh,khachhang.hinhanhkh FROM danhgia 
INNER JOIN khachhang on danhgia.makh=khachhang.makh GROUP by madg DESC";
$result3 = mysqli_query($connect,$sql3);
if(mysqli_num_rows($result3)>0){
    $totalpage = ceil(mysqli_num_rows($result3) / $totalrow);
}

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


$sql2 = "SELECT danhgia.*, khachhang.tenkh,khachhang.hinhanhkh FROM danhgia 
INNER JOIN khachhang on danhgia.makh=khachhang.makh GROUP by madg DESC
limit ". ($page -1)*$totalrow .",$totalrow";
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
mysqli_free_result($result2);
mysqli_free_result($result3);


mysqli_close($connect);