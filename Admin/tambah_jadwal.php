<?php
        include 'sidebar.php';
    ?>

                <!-- Begin Page Content -->
    <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-center mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Input</h1>
                </div>
        <div class="row justify-content-center">

            <!-- Tambah Data Tanggal -->
            <div class="col-xl-5 col-md-6 mb-4">
                <div class="card shadow my-2">
                    <div class="card-body">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Tambah Data Tanggal</h1>
                        </div>
                        <form action="proses_tambah_tgl.php" method="POST">
                            <label for="tanggal">Tanggal:</label>
                            <input type="date" name="tanggal" required class="form-control form-control-user"><br><br>
                            <button type="submit_tanggal" class="btn btn-primary btn-user btn-block">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Tambah Data Jam -->
            <div class="col-xl-5 col-md-6 mb-4">
                <div class="card shadow my-2">
                    <div class="card-body">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Tambah Data Jam</h1>
                        </div>
                        <form action="proses_tambah_jam.php" method="POST">
                            <label for="jam_mulai">Jam Mulai:</label>
                            <input type="time" name="jam_mulai" required class="form-control form-control-user"><br><br>

                            <label for="jam_selesai">Jam Selesai:</label>
                            <input type="time" name="jam_selesai" required class="form-control form-control-user"><br><br>

                            <button type="submit_jam" class="btn btn-primary btn-user btn-block">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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