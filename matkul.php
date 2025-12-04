<?php
include ('komponen/koneksi.php');
include ('komponen/header.php');
include ('komponen/topbar.php');
include ('komponen/sidebar.php');
?>

<div class="container">
    <h3 class="mb-3 mt-3">Data Mata Kuliah</h3>

    <table class="table table-bordered table-striped">
        <thead class="table-warning">
            <tr>
                <th>Kode Matkul</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>NIDN Pengajar</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $data = mysqli_query($koneksi, "SELECT * FROM tbl_matkul");
            while ($row = mysqli_fetch_array($data)) { ?>
                <tr>
                    <td><?= $row['kodeMatkul']; ?></td>
                    <td><?= $row['namaMatkul']; ?></td>
                    <td><?= $row['sks']; ?></td>
                    <td><?= $row['nidn']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php
include ('komponen/footer.php');
?>
