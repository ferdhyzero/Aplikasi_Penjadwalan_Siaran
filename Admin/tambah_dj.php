<?php
        include 'sidebar.php';
    ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Input</h1>
                </div>
                    <!-- Page Heading -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-1">

                <div class="card o-hidden border-0 shadow-lg my-5">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <!-- <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div> -->
                        <div class="col-lg-15">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Tambah Data</h1>
                                    </div>
                                        <form method="post" action="proses_tambah_dj.php">
                                        <div class="form-group">
                                            <label for="nama_lengkap">Nama Lengkap:</label>
                                            <input type="text" name="nama_lengkap" required class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Nama Lengkap...">
                                            </div>
                                        <div class="form-group">
                                            <br>
                                            <label for="nama_udara">Nama Udara:</label>
                                            <input type="text" name="nama_udara" required class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Nama Udara...">
                                            </div>
                                        <div class="form-group">
                                            <br>
                                            <label for="alamat">Alamat:</label>
                                            <input type="text" name="alamat" required class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Alamat...">
                                            </div>
                                        <div class="form-group">
                                            <br>
                                            <button type="submit" class="btn btn-primary btn-user btn-block">Tambah DJ</button>
                                            </div>
                                        </form>
                                </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>