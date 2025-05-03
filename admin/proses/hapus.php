<?php
include(__DIR__ . '/../../koneksi.php'); // sesuaikan dengan path koneksi.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_laporan = intval($_POST['id_laporan']);

    // Cek apakah data ada sebelum menghapus (opsional tapi aman)
    $cek = $conn->query("SELECT * FROM laporan WHERE id_laporan = $id_laporan");
    if ($cek->num_rows > 0) {
        $conn->query("DELETE FROM laporan WHERE id_laporan = $id_laporan");
    }

    // Kembali ke halaman utama setelah hapus
    header("Location: ../laporan-masuk-admin.php"); // kembali ke halaman utama
    exit();
}
?>
