<?php
include ('../komponen/koneksi.php');
include ('../komponen/header.php');
include ('../komponen/topbar.php');
include ('../komponen/sidebar.php');
?>

<div class="container">
    <h3 class = "mt-3 mb-3">Data Mahasiswa</h3>

    <div class="d-flex justify-content-end mb-3 me-4">
        <a href="tambah.php" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Data
        </a>
    </div>

    <div class="mt-4 ms-4 me-4">

    <table class="table table-bordered table-striped table-hover">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Angkatan</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $i = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM tbl_mahasiswa");
            while ($row = mysqli_fetch_array($data)) { ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row['nim']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['prodi']; ?></td>
                    <td><?= $row['angkatan']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td>
                        <a href="edit.php?nim=<?= $row['nim']; ?>" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i>
                        </a>

                        <a href="hapus.php?nim=<?= $row['nim']; ?>" onclick="return confirm('Yakin hapus data ini?')" class="btn btn-danger btn-sm">
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
</div>
<?php
include ('../komponen/footer.php');
?>
