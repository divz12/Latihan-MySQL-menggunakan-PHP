<?php
include ('../komponen/koneksi.php');
include ('../komponen/header.php');
include ('../komponen/topbar.php');
include ('../komponen/sidebar.php');
?>

<div class="container">
    <h3 class="mb-3 mt-3">Data Nilai Mahasiswa</h3>

    <div class="d-flex justify-content-end mb-3 me-4">
        <a href="tambah.php" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Data
        </a>
    </div>

    <div class="mt-4 ms-4 me-4">

    <table class="table table-bordered table-striped">
        <thead class="table-danger">
            <tr>
                <th>No</th>
                <th>Mahasiswa</th>
                <th>Mata Kuliah</th>
                <th>Nilai Angka</th>
                <th>Nilai Huruf</th>
                <th>Dosen Pengampu</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $i = 1;
            $data = mysqli_query($koneksi, "SELECT 
                n.id_nilai,
                n.nilai,
                n.nilaiHuruf,
                mhs.nama AS namaMahasiswa,
                mk.namaMatkul AS namaMatkul,
                d.nama AS namaDosen
            FROM tbl_nilai n
            JOIN tbl_mahasiswa mhs ON n.nim = mhs.nim
            JOIN tbl_matkul mk ON n.kodeMatkul = mk.kodeMatkul
            JOIN tbl_dosen d ON n.nidn = d.nidn
            ");

            while ($row = mysqli_fetch_array($data)) { ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row['namaMahasiswa']; ?></td>
                    <td><?= $row['namaMatkul']; ?></td>
                    <td><?= $row['nilai']; ?></td>
                    <td><?= $row['nilaiHuruf']; ?></td>
                    <td><?= $row['namaDosen']; ?></td>
                    <td>
                        <a href="edit.php?id_nilai=<?= $row['id_nilai']; ?>" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i>
                        </a>

                        <a href="hapus.php?id_nilai=<?= $row['id_nilai']; ?>" onclick="return confirm('Yakin hapus data ini?')" class="btn btn-danger btn-sm">
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
