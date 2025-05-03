
<?php include 'view/sidebar.php';?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include 'view/header.php'?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="card">
                        <div class="card-header bg-dark text-white">Hallo Keluhan Apa Yang Ingin Anda Sampaikan?</div>
                        <div class="card-body">
                            <form action="proses/proses-tambah.php" method="POST">
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label for="">Judul Laporan</label>
                                        <input type="text" class="form-control" required name="judul_laporan" placeholder="tetangga aku berisik banget">
                                        <br>
                                        <label for="">Apa Yang Ingin Anda Sampaikan?</label>
                                        <textarea name="deskripsi_laporan" required placeholder="gak enak bet dha kata gua mah" class="form-control" id=""></textarea>
                                        <br>
                                        <label for="">Nama Kamu</label>
                                        <input type="text" name="nama_lengkap" required class="form-control" placeholder="Ucok">
                                        <br>
                                        <label for="">Masukan Email Kamu</label>
                                        <input type="email" name="email_laporan" required class="form-control" placeholder="ucoku@gmail.com">
                                        <br>
                                        <label for="">No Wa Yang Tertera</label>
                                        <input type="number" class="form-control" required name="no_telp" placeholder="088213292929">
                                        <br>
                                        <label for="">Alamat Lengkap</label>
                                        <textarea class="form-control" name="alamat_laporan" required placeholder="Karsamenak, Kec. Kawalu, Kab. Tasikmalaya, Jawa Barat 46182"></textarea> 
                                        <br>
                                        <button type="submit" class="btn btn-success"><i class="fas fa-user-plus"></i> Laporinnnn</button>
                                    </div>
                            </form>
                            </div>
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
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>