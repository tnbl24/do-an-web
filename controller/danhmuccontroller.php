<?php
require_once("../config/connect.php");

$sqlsoluongdanhmuc = "SELECT COUNT(cho.madm) as soluong, danhmuc.TENDANHMUC FROM cho INNER JOIN danhmuc WHERE danhmuc.MADANHMUC = cho.madm GROUP by cho.madm;";
$resultsoluongdm = mysqli_query($connect, $sqlsoluongdanhmuc) or die("can't get record");
$danhmucs = [];
if (mysqli_num_rows($resultsoluongdm) > 0) {
    while ($row = mysqli_fetch_assoc($resultsoluongdm)) {
        $soluong = $row['soluong'];
        $tendanhmuc = $row['TENDANHMUC'];

        $danhmucs[$tendanhmuc] = $soluong;
    }
}

mysqli_free_result($resultsoluongdm);
mysqli_close($connect);
