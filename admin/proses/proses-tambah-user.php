<?php 
include(__DIR__ . '/../../koneksi.php');

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$query = $conn->prepare("INSERT INTO user (nama, username, password, role) 
                         VALUES (?, ?, ?, ?)");

$query->bind_param("ssss", $nama, $username, $password, $role);

if($query->execute()) {
    echo "<script>alert('Data berhasil ditambahkan'); window.location='../liat-user.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}
?>
