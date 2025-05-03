
<?php include 'view/sidebar.php';?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include 'view/header.php'?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
    <?php 
    $query = $con->query("SELECT * FROM laporan");
    while($data = $query->fetch(PDO::FETCH_ASSOC)) { 
        $status = $data['disetujui'];
        $statusClass = $status == 1 ? 'bg-primary' : 'bg-danger';
    ?>
        <div class="card">
            <div class="card-header <?= $statusClass ?> text-white">
                Keluhan Dari <b><?= htmlspecialchars($data['nama_lengkap']); ?></b>
            </div>
            <div class="card-body">
                <h2><b><?= htmlspecialchars($data['judul_laporan']); ?></b></h2>
                <p><?= nl2br(htmlspecialchars($data['deskripsi_laporan'])); ?></p>
                <br><br>
                <p>Email: <?= htmlspecialchars($data['email_laporan']); ?></p>
                <p>No Telp: <?= htmlspecialchars($data['no_telp']); ?></p>
                <br>
            </div>
        </div>
        <br><br>
    <?php } ?>
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