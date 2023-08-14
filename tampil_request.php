<?php
        include 'sidebar_request.php';
    ?>
        <section class="page-section" id="contact">
            <div class="container mt-5 text-center">
                <h1 class="section-heading text-uppercase">Tabel</h1>          
                <div class="card shadow mb-4">
                        <!-- <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div> -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <!-- tabel request jadwal -->
                            <h2>tabel request</h2>
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Jam Mulai</th>
                                        <th>Jam Selesai</th>
                                        <th>Nama Udara</th>
                                        <th>Keterangan</th>
                                        <th>konfirmasi</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "Admin/koneksi.php";

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
                                            <td align='center'>
                                                <a href='hapus_keterangan.php?id={$tampil['id_jadwal']}' class='btn btn-danger btn-sm'>Batal</a>
                                            </td>

                                        </tr>";
                                        $no++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                            <!-- tabel hapus jadwal -->

                            <div class="card-body">
                            <div class="table-responsive">
                            <h2>tabel jadwal</h2>
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Jam Mulai</th>
                                    <th>Jam Selesai</th>
                                    <th>Penyiar</th>
                                    <th>Keterangan</th>
                                    <th>konfirmasi</th> 
                            
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include "Admin/koneksi.php";

                                $no = 1;
                                // $ambildata1 = mysqli_query($conn, "SELECT * FROM keterangan_jadwal kj
                                //     INNER JOIN tanggal t ON kj.id_tanggal = t.id_tanggal
                                //     INNER JOIN jam j ON kj.id_jam = j.id_jam
                                //     INNER JOIN dj d ON kj.id_dj = d.id_dj
                                //     LEFT JOIN konfirmasi k ON kj.id_jadwal = k.id_jadwal") or die(mysqli_error($conn));

                                // $ambildata1 = mysqli_query($conn, "SELECT * FROM konfirmasi, keterangan_jadwal, tanggal, jam, dj
                                // WHERE konfirmasi.id_jadwal = keterangan_jadwal.id_jadwal 
                                // AND keterangan_jadwal.id_tanggal = tanggal.id_tanggal 
                                // AND keterangan_jadwal.id_jam = jam.id_jam 
                                // AND keterangan_jadwal.id_dj = dj.id_dj") or die(mysqli_error($conn));

                                $ambildata1 = mysqli_query($conn, "SELECT * FROM konfirmasi, tanggal, jam, dj
                                WHERE konfirmasi.id_tanggal = tanggal.id_tanggal 
                                AND konfirmasi.id_jam = jam.id_jam 
                                AND konfirmasi.id_dj = dj.id_dj") or die(mysqli_error($conn));

                                while ($tampil1 = mysqli_fetch_array($ambildata1)) {
                                    echo "
                                    <tr>
                                        <td align='center'>$no</td>
                                        <td align='center'>$tampil1[tanggal]</td>
                                        <td align='center'>$tampil1[jam_mulai]</td>
                                        <td align='center'>$tampil1[jam_selesai]</td>
                                        <td align='center'>$tampil1[nama_udara]</td>
                                        <td align='center'>$tampil1[keterangan]</td>
                                        <td align='center'>
                                            <a href='hapus_jadwal.php?id={$tampil1['id_konfirmasi']}' class='btn btn-danger btn-sm'>Hapus</a>
                                        </td>
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
</section>