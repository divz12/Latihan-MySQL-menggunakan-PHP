<?php
include ('../komponen/blok.php');
include ('../komponen/koneksi.php');
include ('../komponen/header.php');
include ('../komponen/topbar.php');
include ('../komponen/sidebar.php');
?>

<div class="container">
    <h3 class="mb-3 mt-3">Data Mata Kuliah</h3>

    <div class="d-flex justify-content-end mb-3 me-4">
        <a href="tambah.php" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Data
        </a>
    </div>

    <div class="mt-4 ms-4 me-4">

    <table class="table table-bordered table-striped">
        <thead class="table-warning">
            <tr>
                <th>No</th>
                <th>Kode Matkul</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Dosen Pengajar</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $i = 1;
            $data = mysqli_query($koneksi, "
                SELECT m.*, d.nama AS namaDosen 
                FROM tbl_matkul m
                LEFT JOIN tbl_dosen d ON m.nidn = d.nidn
                ORDER BY m.kodeMatkul ASC
            ");
            while ($row = mysqli_fetch_array($data)) { ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row['kodeMatkul']; ?></td>
                    <td><?= $row['namaMatkul']; ?></td>
                    <td><?= $row['sks']; ?></td>
                    <td><?= $row['namaDosen']; ?></td>
                    <td>
                        <a href="edit.php?kodeMatkul=<?= $row['kodeMatkul']; ?>" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i>
                        </a>

                        <a href="hapus.php?kodeMatkul=<?= $row['kodeMatkul']; ?>" onclick="return confirm('Yakin hapus data ini?')" class="btn btn-danger btn-sm">
                           <i class="fas fa-trash"></i>
                        </a>
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
