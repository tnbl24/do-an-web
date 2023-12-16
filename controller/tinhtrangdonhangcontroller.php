<?php
require_once("../config/connect.php");

$sql = "SELECT count(donhang.mattdh) as soluong, tinhtrangdonhang.tenttdh FROM donhang 
INNER JOIN tinhtrangdonhang on donhang.mattdh = tinhtrangdonhang.mattdh 
WHERE donhang.makh=1
GROUP by donhang.mattdh;";
$result = mysqli_query($connect, $sql);
$tinhtranghoadons=[];
if(mysqli_num_rows($result)>0){
    while($rows=mysqli_fetch_assoc($result)){
        $tinhtranghoadon = $rows['tenttdh'];
        $soluong = $rows['soluong'];

        $tinhtranghoadons[$tinhtranghoadon] = $soluong;
    }
}
mysqli_free_result($result);
mysqli_close($connect);
?>