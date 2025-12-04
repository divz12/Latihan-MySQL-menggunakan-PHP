<?php
include ('komponen/koneksi.php');
include ('komponen/header.php');
include ('komponen/topbar.php');
include ('komponen/sidebar.php');
?>

<div class="container">
    <h3 class="mb-3 mt-3">Data Nilai Mahasiswa</h3>

    <table class="table table-bordered table-striped">
        <thead class="table-danger">
            <tr>
                <th>ID Nilai</th>
                <th>Mahasiswa</th>
                <th>Mata Kuliah</th>
                <th>Nilai Angka</th>
                <th>Nilai Huruf</th>
                <th>Dosen Pengampu</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $q = "
            SELECT n.id_nilai, n.nilai, n.nilaiHuruf,
                   mhs.nama AS mahasiswa,
                   mk.namaMatkul AS matkul,
                   d.nama AS dosen
            FROM tbl_nilai n
            JOIN tbl_mahasiswa mhs ON n.nim = mhs.nim
            JOIN tbl_matkul mk ON n.kodeMatkul = mk.kodeMatkul
            JOIN tbl_dosen d ON n.nidn = d.nidn
            ";

            $data = mysqli_query($koneksi, $q);

            while ($row = mysqli_fetch_array($data)) { ?>
                <tr>
                    <td><?= $row['id_nilai']; ?></td>
                    <td><?= $row['mahasiswa']; ?></td>
                    <td><?= $row['matkul']; ?></td>
                    <td><?= $row['nilai']; ?></td>
                    <td><?= $row['nilaiHuruf']; ?></td>
                    <td><?= $row['dosen']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php
include ('komponen/footer.php');
?>
