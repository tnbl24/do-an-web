<?php
require_once("../config/connect.php");

$sql = "SELECT COUNT(tinhtranghd) as soluong , tinhtranghd from hoadon GROUP by tinhtranghd";
$result = mysqli_query($connect, $sql);
$tinhtranghoadons=[];
if(mysqli_num_rows($result)>0){
    while($rows=mysqli_fetch_assoc($result)){
        $tinhtranghoadon = $rows['tinhtranghd'];
        $soluong = $rows['soluong'];

        $tinhtranghoadons[$tinhtranghoadon] = $soluong;
    }
}
mysqli_free_result($result);
mysqli_close($connect);
?>