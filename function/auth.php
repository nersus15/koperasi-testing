<?php
session_start();
if (!isset($_POST['email'])) {
    $_SESSION['isLoggin'] = false;
    header('Location: /koperasi-testing/admin/dashboard.php');
} else {
    $connect = mysqli_connect('localhost', 'root', '', 'koperasi-testing');
    if (!$connect) {
        die('Koneksi gagal: ' . mysqli_connect_error());
    }
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = mysqli_query($connect, "SELECT * FROM user WHERE user.email='$email'");

    $user = mysqli_fetch_assoc($user);
    if (isset($user)) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['userData'] = $user;
            $_SESSION['isLoggin'] = true;
            header('Location: /koperasi-testing/admin/dashboard.php');
        } else {
            $_SESSION['message'] = "Password Salah";
        }
    } else {
        $_SESSION['message'] = "User dengan email <b><i>$email</b></i> tidak ditemukan";
    }
    header('Location: /koperasi-testing/');
}
