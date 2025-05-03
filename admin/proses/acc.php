<?php
include('../../koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_laporan = intval($_POST['id_laporan']);
    $conn->query("UPDATE laporan SET disetujui = 1 WHERE id_laporan = $id_laporan");
    header("Location: ../laporan-masuk-admin.php"); // kembali ke halaman utama
    exit();
}
