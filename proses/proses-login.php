<?php
session_start();
include '../koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $username;
    $_SESSION['nama'] = $row['nama']; // menyimpan role dalam session
    $_SESSION['role'] = $row['role']; // menyimpan role dalam session

    if ($row['role'] == 'admin') {
        header("Location: ../admin/dashboard-admin.php");
    } else {
        header("Location: ../index.php");
    }
} else {
    echo "<script>alert('username atau Password salah!'); window.location='../index.php';</script>";
}
?>
