<?php
session_start();
if (!isset($_SESSION['isLoggin']) || $_SESSION['isLoggin'] == false) {
    header('Location: /koperasi-testing/index.php');
}
if ($_SESSION['userData']['role'] == 1) {
    header('Location: /koperasi-testing/admin/dashboard.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Halaman Memeber</h1>
    <a href="/koperasi-testing/function/auth.php">Logout</a>
</body>

</html>