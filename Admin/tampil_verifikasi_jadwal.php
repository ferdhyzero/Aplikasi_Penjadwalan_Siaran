<?php
        include 'sidebar.php';
    ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <!-- <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div> -->
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID Jadwal</th>
                                        <th>Tanggal Jadwal</th>
                                        <th>Jam Mulai Jadwal</th>
                                        <th>Jam Selesai Jadwal</th>
                                        <th>Nama Udara</th>
                                        <th>Keterangan</th>
                                        <th colspan="2">konfirmasi</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "koneksi.php";

                                    $no = 1;
                                    $ambildata = mysqli_query($conn, "SELECT * FROM keterangan_jadwal, tanggal, jam, dj
                                        WHERE keterangan_jadwal.id_tanggal = tanggal.id_tanggal
                                        AND keterangan_jadwal.id_jam = jam.id_jam
                                        AND keterangan_jadwal.id_dj = dj.id_dj") or die(mysqli_error($conn));

                                    while ($tampil = mysqli_fetch_array($ambildata)) {
                                        echo "
                                        <tr>
                                            <td align='center'>$no</td>
                                            <td align='center'>$tampil[tanggal]</td>
                                            <td align='center'>$tampil[jam_mulai]</td>
                                            <td align='center'>$tampil[jam_selesai]</td>
                                            <td align='center'>$tampil[nama_udara]</td>
                                            <td align='center'>$tampil[keterangan]</td>
                                            <td><a class='btn btn-primary' href='konfirmasi.php?id={$tampil['id_jadwal']}'>Konfirmasi</a></td>
                                        </tr>";
                                        $no++;
                                    }
                                    ?>
                                </tbody>
                            </table>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->

    </div>
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