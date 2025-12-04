<?php
include ('komponen/koneksi.php');
include ('komponen/header.php');
include ('komponen/topbar.php');
include ('komponen/sidebar.php');
?>


<div class="container">
    <h3 class="mb-3 mt-3">Data Dosen</h3>

    <table class="table table-bordered table-striped">
        <thead class="table-success">
            <tr>
                <th>NIDN</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Email</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $data = mysqli_query($koneksi, "SELECT * FROM tbl_dosen");
            while ($row = mysqli_fetch_array($data)) { ?>
                <tr>
                    <td><?= $row['nidn']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['prodi']; ?></td>
                    <td><?= $row['email']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php
include ('komponen/footer.php');
?>

