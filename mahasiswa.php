<?php
include ('komponen/koneksi.php');
include ('komponen/header.php');
include ('komponen/topbar.php');
include ('komponen/sidebar.php');
?>

<div class="container">
    <h3 class="mb-3">Data Mahasiswa</h3>

    <table class="table table-bordered table-striped table-hover">
        <thead class="table-primary">
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Angkatan</th>
                <th>Email</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $data = mysqli_query($koneksi, "SELECT * FROM tbl_mahasiswa");
            while ($row = mysqli_fetch_array($data)) { ?>
                <tr>
                    <td><?= $row['nim']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['prodi']; ?></td>
                    <td><?= $row['angkatan']; ?></td>
                    <td><?= $row['email']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php
include ('komponen/footer.php');
?>
