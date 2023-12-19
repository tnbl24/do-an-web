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

$sql1 = "SELECT tenttdh from tinhtrangdonhang;";
$result = mysqli_query($connect, $sql1);
$btinhtrangdonhang = [];
while ($row = mysqli_fetch_assoc($result)) {
    $tinhtrang = $row['tenttdh'];
    $btinhtrangdonhang[] = $tinhtrang;
}
mysqli_free_result($result);

$sql2 = "SELECT count(donhang.mattdh) as soluong, tinhtrangdonhang.tenttdh FROM donhang 
INNER JOIN tinhtrangdonhang on donhang.mattdh = tinhtrangdonhang.mattdh 
WHERE donhang.makh=$lmakh
GROUP by donhang.mattdh;";
$result = mysqli_query($connect, $sql2);
$soluongdh = [];
if (mysqli_num_rows($result) > 0) {
    while ($rows = mysqli_fetch_assoc($result)) {
        $tinhtrangdonhang = $rows['tenttdh'];
        $soluong = $rows['soluong'];
        $soluongdh[$tinhtrangdonhang] = $soluong;
    }
}
mysqli_free_result($result);

if(isset($_REQUEST['ttdh']))
{
    $ttdh =$_REQUEST['ttdh'];
}else {
    $ttdh = $btinhtrangdonhang[0];
}
$sql3="SELECT donhang.madh,tinhtrangdonhang.tenttdh FROM donhang 
INNER JOIN tinhtrangdonhang on donhang.mattdh=tinhtrangdonhang.mattdh
WHERE donhang.makh=$lmakh and tinhtrangdonhang.tenttdh='$ttdh'";
$result = mysqli_query($connect,$sql3);
$tenvama=[];
if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
        $madh = $row['madh'];
        $tenttdh=$row['tenttdh'];
        $tenvama[$madh] =$tenttdh;
    }
}
mysqli_free_result($result);

$sql4="SELECT danhmuc.tendm,cho.codec,cho.mausacc, cho.giatienc, cho.hinhanhc,donhang.madh,cho.mac
FROM donhang 
INNER JOIN tinhtrangdonhang on donhang.mattdh=tinhtrangdonhang.mattdh
INNER JOIN donhangchitiet on donhang.madh=donhangchitiet.madh
INNER JOIN cho on donhangchitiet.mac = cho.mac
INNER JOIN danhmuc on danhmuc.madm=cho.madm
WHERE donhang.makh=$lmakh 
and tinhtrangdonhang.tenttdh='$ttdh'";
$result=mysqli_query($connect,$sql4);
$bchodh=[];
if(mysqli_num_rows($result)){
    while($c = mysqli_fetch_assoc($result)){
        $mac=$c['mac'];
        $madh=$c['madh'];
        $tendm =$c['tendm'];
        $codec=$c['codec'];
        $mausacc=$c['mausacc'];
        $giatienc=$c['giatienc'];
        $hinhanhc=$c['hinhanhc'];

        $bcho = [
            'mac'=>$mac,
            'madh'=>$madh,
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

mysqli_close($connect);
?>