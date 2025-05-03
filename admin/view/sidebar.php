<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    // Jika belum login atau bukan admin, redirect ke halaman utama
    header("Location: ../login.php");
    exit();
}

include '../koneksi.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laporan Suga</title>

    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    
    <!-- Custom styles for this page -->
    <link href="../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="./dashboard-admin.php">
                <div class="sidebar-brand-icon">
                <i class="fas fa-people-arrows"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Suga Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="./dashboard-admin.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="./laporan-masuk-admin.php">
                <i class="fas fa-comments-dollar"></i>
                    <span>Laporan Masuk Admin</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./tambah-user.php">
                <i class="fas fa-user-plus"></i>
                    <span>Tambahkan User</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./liat-user.php">
                <i class="fas fa-users"></i>
                    <span>List User</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../proses/logout.php">
                <i class="fas fa-arrow-right-from-bracket"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Nav Item - Tables  
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->