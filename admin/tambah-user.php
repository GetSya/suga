
<?php include 'view/sidebar.php';?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include 'view/header.php'?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="card">
                        <div class="card-header bg-dark text-white">Tambah User <i class="fas fa-user-plus"></i></div>
                        <div class="card-body">
                            <form action="proses/proses-tambah-user.php" method="POST">
                                <div class="form-group">
                                    <label for="">Masukan Nama Lengkap User</label>
                                    <input type="text" class="form-control" required name="nama" placeholder="Udin">
                                    <br>
                                    <label for="">NIK</label>
                                    <input type="text" class="form-control" required name="username" placeholder="36019100001920">
                                    <br>
                                    <label for="">Password</label>
                                    <input type="password" required name="password" class="form-control">
                                    <br>
                                    <label for="">Role Yang Dipilih</label>
                                    <select required name="role" id="" class="form-control">
                                        <option value="" default disabled>Pilih</option>
                                        <option value="user">User</option>
                                        <option value="user">Admin</option>
                                    </select>
                                    <br>
                                    <button type="submit" class="btn btn-dark"><i class="fas fa-user-plus"></i> Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>

</body>

</html>