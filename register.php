<?php
$conn = mysqli_connect('localhost', 'root', '', 'koperasi-testing');

if (!$conn) {
    echo ('Koneksi ke database gagal: ' . mysqli_connect_error());
}
// cek apakah ada data dikirim atau tidak
if (isset($_POST['save'])) {
    // Data yang akan dikirm ke database simpan ke dalam variable
    $id = uniqid();
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $photoProfile = 'default.jpg';

    // cek apakah password sama dengan konfirmasi password/password2
    if ($password != $password2) {
        header('Location: register.php');
    }

    // Melakukan enkripsi atau hashing password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Syntax sql untuk menambah data ke tabel user
    $query = "INSERT INTO user VALUES('$id', '$username','$email', '$password', '$photoProfile' )";

    // cek apakah query berhasil (apakah berhasil menambakan data atau tidak)
    if (mysqli_query($conn, $query)) {
        echo ('data berhasil ditambahkan');
    } else {
        echo "gagal menambahkan data: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="asset/css/sb-admin-2.css">
    <title>Daftar</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="card col-md-4 col-sm-4" style="margin-top:10% ">
                <h4 class="card-title">Daftar</h4>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input class="form-control" type="text" name="username" id="username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Konfirmasi Password</label>
                            <input name="password2" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button name="save" type="submit" class="btn btn-primary">Daftar</button>
                        <small id="emailHelp" class="form-text text-muted">Apakah sudah punya akun? <a href="index.php">login disini</a></small>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>