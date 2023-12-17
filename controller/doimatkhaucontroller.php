<?php
session_start();
require_once("connect.php");

if (isset($_POST['Doi_Mat_Khau'])) {
    
    $email = $_POST['email'];
    $old_password = $_POST['password'];
    $new_password = $_POST['password_new'];

    if (empty($email) || empty($old_password) || empty($new_password)) {
        $_SESSION['Account_error'] = "Please fill in all fields.";
        header("Location: taikhoankh.php"); 
        exit();
    }

    $query = "SELECT * FROM khachhang WHERE emailkh = ? AND khachhang = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $email, $old_password);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows == 1) {
       
        $update_query = "UPDATE khachhang SET matkhau = ? WHERE emailkh = ?";
        $update_stmt = $conn->prepare($update_query);
        $update_stmt->bind_param("ss", $new_password, $email);
        $update_stmt->execute();

        $_SESSION['Account_error'] = "Password changed successfully!";
        header("Location: taikhoankh.php"); 
        exit();
    } else {
        $_SESSION['Account_error'] = "Invalid email or old password.";
        header("Location: taikhoankh.php"); 
        exit();
    }
} else {
    
    header("Location: taikhoankh.php"); 
    exit();
}
?>
