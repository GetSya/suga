<?php 
include "../koneksi.php";

$judul_laporan = $_POST['judul_laporan'];
$deskripsi_laporan = $_POST['deskripsi_laporan'];
$nama_lengkap = $_POST['nama_lengkap'];
$email_laporan = $_POST['email_laporan'];
$no_telp = $_POST['no_telp'];

$query = $con->prepare("INSERT INTO laporan (judul_laporan, deskripsi_laporan, nama_lengkap, email_laporan, no_telp) 
                        VALUES (:judul_laporan, :deskripsi_laporan, :nama_lengkap, :email_laporan, :no_telp)");

$query->bindparam(':judul_laporan', $judul_laporan); // menggunakan bindparam
$query->bindparam(':deskripsi_laporan', $deskripsi_laporan);
$query->bindparam(':nama_lengkap', $nama_lengkap);
$query->bindparam(':email_laporan', $email_laporan);
$query->bindparam(':no_telp', $no_telp);

if($query->execute()) {
    echo "<script>alert('Data berhasil ditambahkan'); window.location='../dashboard.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}

/*
Code by YukCoding Tutor
www.yukcoding.id
*/
?>