<?php
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
        <div class="card">
            <h4 class="card-title">Login</h4>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <small id="emailHelp" class="form-text text-muted">Buat akun <a href="register.php">disini</a></small>
                </form>
            </div>
        </div>
    </div>
</body>

</html>