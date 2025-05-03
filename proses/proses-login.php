<?php
include '../koneksi.php';
$user = $_POST['username'];
$pass = $_POST['password'];

$query = $con->prepare("SELECT * FROM user WHERE username = :user AND password = :pass");
$query->bindValue(':user', $user);
$query->bindValue(':pass', $pass);
$query->execute();
$cek = $query->rowCount();
if($cek > 0) {
    $data = $query->fetch();
    $_SESSION['id'] = $data['id'];
    $_SESSION['username'] = $data['username'];
    echo "<script>alert('Selamat. Login berhasil :)'); window.location='../dashboard.php';</script>";
} else {
    echo "<script>alert('Login gagal. Ulangi lagi!'); window.location='../index.php';</script>";
}

?>