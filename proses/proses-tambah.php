<?php 
include "../koneksi.php";

$judul_laporan = $_POST['judul_laporan'];
$deskripsi_laporan = $_POST['deskripsi_laporan'];
$nama_lengkap = $_POST['nama_lengkap'];
$email_laporan = $_POST['email_laporan'];
$no_telp = $_POST['no_telp'];
$alamat_laporan = $_POST['alamat_laporan'];

$query = $conn->prepare("INSERT INTO laporan (judul_laporan, deskripsi_laporan, nama_lengkap, email_laporan, no_telp, alamat_laporan) 
                         VALUES (?, ?, ?, ?, ?, ?)");

$query->bind_param("ssssss", $judul_laporan, $deskripsi_laporan, $nama_lengkap, $email_laporan, $no_telp, $alamat_laporan);

if($query->execute()) {
    echo "<script>alert('Data berhasil ditambahkan'); window.location='../index.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}
?>
