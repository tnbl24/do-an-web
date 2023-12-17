<?php
    session_start();
    require_once("connect.php");
    if(!isset($_SESSION['Account_error'])){
        $_SESSION['Account_error']="";
    }
?>

<html>
    <head>
        <meta charset="UTF_8">
    </head>
    <BOdy>
       
            <form action="account_action.php" autocomplete="off" method="POST">
        <table border="0" cellspacing=5 cellpadding=5 align="center">
            <tr>
                <td colspan="2"><h3>Đổi mật khẩu</h3></td>

            </tr>
            <tr>
                <td>Tài Khoản</td>
                <td><input type="text" name="email" ></td>
            </tr>

            <tr>
                <td>Mật khẩu cũ </td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td>Mật khẩu mới</td>
                <td><input type="text" name="password_new"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="Doi_Mat_Khau"></td>
            </tr>
            
            </form>
        </table>
    </BOdy>
</html>