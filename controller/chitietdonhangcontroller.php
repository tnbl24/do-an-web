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

$madhct=$_REQUEST['madhct'];
$sql ="SELECT khachhang.tenkh,khachhang.diachikh,khachhang.sdtkh from khachhang WHERE khachhang.makh=$lmakh;";
$result = mysqli_query($connect,$sql);
$kh=[];
if(mysqli_num_rows($result)>0){
    while($r=mysqli_fetch_assoc($result)){
        $tenkh = $r['tenkh'];
        $diachikh = $r['diachikh'];
        $sdtkh = $r['sdtkh'];

        $kh=[
            'tenkh' => $tenkh,
            'diachikh' => $diachikh,
            'sdtkh' => $sdtkh
        ];
    }
}
mysqli_free_result($result);

$sql1="SELECT donhang.* ,tinhtrangdonhang.tenttdh,tinhtrangdonhang.mattdh from donhang 
INNER JOIN donhangchitiet on donhang.madh = donhangchitiet.madh 
INNER JOIN tinhtrangdonhang on donhang.mattdh = tinhtrangdonhang.mattdh
WHERE donhang.madh=$madhct";
$result=mysqli_query($connect,$sql1);
$dh1=[];
if(mysqli_num_rows($result)>0){
    while($r=mysqli_fetch_assoc($result)){
        $mattdh=$r['mattdh'];
        $tenttdh = $r['tenttdh'];
        $pttt = $r['ptthanhtoan'];
        $ghichu =$r['ghichu'];

        $dh1=[
            'mattdh' => $mattdh,
            'tenttdh' => $tenttdh,
            'pttt' => $pttt,
            'ghichu'=> $ghichu
        ];
    }
}
mysqli_free_result($result);

$sql2="SELECT cho.* ,danhmuc.tendm FROM donhangchitiet  INNER JOIN 
cho on cho.mac = donhangchitiet.mac
INNER JOIN danhmuc on cho.madm=danhmuc.madm
WHERE madh =$madhct;";
$result=mysqli_query($connect,$sql2);
$bchodh=[];
if(mysqli_num_rows($result)){
    while($c = mysqli_fetch_assoc($result)){
        $mac=$c['mac'];
        $tendm =$c['tendm'];
        $codec=$c['codec'];
        $mausacc=$c['mausacc'];
        $giatienc=$c['giatienc'];
        $hinhanhc=$c['hinhanhc'];

        $bcho = [
            'mac'=>$mac,
            'tendm' => $tendm,
            'codec' => $codec,
            'mausacc' => $mausacc,
            'giatienc' => $giatienc,
            'hinhanhc' => $hinhanhc
        ];
        $bchodh[$codec] = $bcho;
    }
}
mysqli_free_result($result);

$sql3="SELECT lichsucapnhatdonhang.ngaycapnhat,tinhtrangdonhang.tenttdh 
FROM lichsucapnhatdonhang 
INNER JOIN tinhtrangdonhang on tinhtrangdonhang.mattdh=lichsucapnhatdonhang.mattdh 
WHERE lichsucapnhatdonhang.madh=$madhct;";
$result=mysqli_query($connect,$sql3);
$lichsucapnhat=[];
if(mysqli_num_rows($result)){
    while($r=mysqli_fetch_assoc($result)){
        $lichsucapnhat[$r['tenttdh']] = $r['ngaycapnhat'];
    }
}
mysqli_free_result($result);