<?php 
include"sidebar_request.php";
?>
    <section class="page-section" id="contact">
    <div class="container mt-5">
        <h1 class="section-heading text-uppercase">Input Jadwal</h1>
        <form action="proses_request.php" method="POST">
            <div class="form-group">
            <label class="section-heading text-uppercase">Tanggal:</label>
                <div>
                    <select name="id_tanggal" class="form-control">
                        <option value="">-------</option>
                        <?php 
                        include "Admin/koneksi.php";
                        $query = mysqli_query($conn, "SELECT * FROM tanggal") or die(mysqli_error($conn));
                        while ($data = mysqli_fetch_array($query)) {
                            echo "<option value='{$data['id_tanggal']}'>{$data['tanggal']}</option>";
                        }
                        mysqli_close($conn);
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="section-heading text-uppercase">Jam Mulai:</label>
                <div>
                    <select name="id_jam" class="form-control">
                        <option value="">-------</option>
                        <?php 
                        include "Admin/koneksi.php";
                        $query = mysqli_query($conn, "SELECT * FROM jam") or die(mysqli_error($conn));
                        while ($data = mysqli_fetch_array($query)) {
                            echo "<option value='{$data['id_jam']}'>{$data['jam_mulai']}</option>";
                        }
                        mysqli_close($conn);
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="section-heading text-uppercase">Jam Selesai:</label>
                <div>
                    <select name="id_jam" class="form-control">
                        <option value="">-------</option>
                        <?php 
                        include "Admin/koneksi.php";
                        $query = mysqli_query($conn, "SELECT * FROM jam") or die(mysqli_error($conn));
                        while ($data = mysqli_fetch_array($query)) {
                            echo "<option value='{$data['id_jam']}'>{$data['jam_selesai']}</option>";
                        }
                        mysqli_close($conn);
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="section-heading text-uppercase">Nama Udara:</label>
                <select name="id_dj" class="form-control" required>
                <option value="">-------</option>
                    <?php
                    include 'Admin/koneksi.php';
                    $query = mysqli_query($conn, "SELECT * FROM dj") or die(mysqli_error($conn));
                        while ($data = mysqli_fetch_array($query)) {
                            echo "<option value='{$data['id_dj']}'>{$data['nama_udara']}</option>";
                        }
                        mysqli_close($conn);
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label class="section-heading text-uppercase" for="id_jadwal">Keterangan :</label>
                <select name="keterangan" class="form-control" required>
                    <option value="">-----</option>
                    <option value="libur">Libur</option>
                    <option value="masuk">Masuk</option>
                </select>
            </div>
            <input type="submit" class="btn btn-primary" value="Simpan" name="proses">
                    </form>
    </div>
</div>
</section>
