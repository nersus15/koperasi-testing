<?php
// Start Session
session_start();
if (!isset($_SESSION['isLoggin']) || $_SESSION['isLoggin'] == true) {
    header('Location: /koperasi-testing/admin/dashboard.php');
}

$connect = mysqli_connect('localhost', 'root', '', 'koperasi-testing');
if (!$connect) {
    die('Koneksi gagal: ' . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="asset/css/sb-admin-2.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="card col-sm-4 col-md-4" style="margin-top:10% ">
                <div>
                    <?php if (isset($_SESSION['message'])) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $_SESSION['message']; ?>
                        </div>
                        <?php unset($_SESSION['message']); ?>
                    <?php endif ?>
                </div>
                <h4 class="card-title">Login</h4>
                <div class="card-body">
                    <form method="POST" action="function/auth.php">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input required name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                        <small id="emailHelp" class="form-text text-muted">Buat akun <a href="register.php">disini</a></small>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>