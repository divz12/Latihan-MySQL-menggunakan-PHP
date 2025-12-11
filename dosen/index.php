<?php
include ('../komponen/koneksi.php');
include ('../komponen/header.php');
include ('../komponen/topbar.php');
include ('../komponen/sidebar.php');
?>


<div class="container">
    <h3 class="mb-3 mt-3">Data Dosen</h3>

    <div class="d-flex justify-content-end mb-3 me-4">
        <a href="tambah.php" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Data
        </a>
    </div>

    <div class="mt-4 ms-4 me-4">

    <table class="table table-bordered table-striped">
        <thead class="table-success">
            <tr>
                <th>No</th>
                <th>NIDN</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $i = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM tbl_dosen");
            while ($row = mysqli_fetch_array($data)) { ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row['nidn']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['prodi']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td>
                        <a href="edit.php?nidn=<?= $row['nidn']; ?>" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i>
                        </a>

                        <a href="hapus.php?nidn=<?= $row['nidn']; ?>" onclick="return confirm('Yakin hapus data ini?')" class="btn btn-danger btn-sm">
                           <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php 
             $i++; 
        } ?>
        </tbody>
    </table>
</div>
<?php
include ('../komponen/footer.php');
?>

