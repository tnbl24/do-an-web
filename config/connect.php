<?php
$sever="localhost";
$username= "root";
$password= "";
$database= "doanweb";
$connect = mysqli_connect($sever,$username,$password,$database);

if($connect){
    mysqli_query($connect,"SET NAMES 'utf8'");
}
else{
    echo "ket noi that bai".mysqli_connect_error();
}
