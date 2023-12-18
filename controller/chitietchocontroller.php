<?php
require_once("../config/connect.php");
$bmac = $_REQUEST['mac'];
$sql = "SELECT cho.*, danhmuc.tendm FROM `cho` INNER join danhmuc on cho.madm=danhmuc.madm WHERE mac=$bmac";
$result = mysqli_query($connect,$sql);
$bcho=[];
if(mysqli_num_rows($result)){
    while($c = mysqli_fetch_assoc($result)){
        $mac = $c['mac'];
        $tendm =$c['tendm'];
        $codec=$c['codec'];
        $ngaysinhc=$c['ngaysinhc'];
        $gioitinhc=$c['gioitinhc'];
        $mausacc=$c['mausacc'];
        $cannangc=$c['cannangc'];
        $tinhtrangtiemchungc=$c['tinhtrangtiemchungc'];
        $tinhtrangsuckhoec=$c['tinhtrangsuckhoec'];
        $giatienc=$c['giatienc'];
        $motac=$c['motac'];
        $hinhanhc=$c['hinhanhc'];
        $soluongc=$c['soluongc'];

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
            'soluongc'=>$soluongc
        ];
    }
}
mysqli_free_result($result);


$bsqlcho = "SELECT cho.mac, cho.codec,cho.giatienc,cho.mausacc,cho.hinhanhc,danhmuc.tendm from 
cho INNER join danhmuc on cho.madm = danhmuc.madm 
where soluongc=1
ORDER BY RAND() LIMIT 8 ";
$bresultcho = mysqli_query($connect, $bsqlcho) or die('cant get record');
$bdanhsachcho=[];

if (mysqli_num_rows($bresultcho)) {

    while($browcho = mysqli_fetch_assoc($bresultcho)){
        $bcodec=$browcho['codec'];
        $bgiatienc = $browcho['giatienc'];
        $bmausacc = $browcho['mausacc'];
        $bhinhanh = $browcho['hinhanhc'];
        $bmac=$browcho['mac'];
        $bdanhmuccho=$browcho['tendm'];

        $bcho2 = [
            'mac'=> $bmac,
            'codec' =>$bcodec,
            'giatienc' => $bgiatienc,
            'mausacc'=>$bmausacc,
            'hinhanhc'=>$bhinhanh,
            'danhmucc' => $bdanhmuccho
        ];

        $bdanhsachcho[$bcodec] = $bcho2;
    }
    }

mysqli_close($connect);
mysqli_free_result($bresultcho);
