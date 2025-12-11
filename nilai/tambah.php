<?php
include ('../komponen/koneksi.php');
include ('../komponen/header.php');
include ('../komponen/topbar.php');
include ('../komponen/sidebar.php');

$data = mysqli_query($koneksi, "SELECT MAX(id_nilai) AS maxid FROM tbl_nilai");
$hasil = mysqli_fetch_array($data);

if ($hasil['maxid'] == null) {
    $id_baru = 1;
} else {
    $id_baru = $hasil['maxid'] + 1;
}
?>

<div class="container">
    <h3 class="mt-4">Tambah Data Nilai</h3>

    <div class="card mt-4 ms-4 me-4">
    <div class="card-body">

    <form action="proses_tambah.php" method="POST" class="mt-3 ms-4 me-4">

        <div class="mb-3">
            <label>ID Nilai</label>
            <input type="text" name="id_nilai" value="<?= $id_baru ?>" class="form-control" readonly>
        </div>

        <div class="mb-3">
            <label>Mahasiswa</label>
            <select name="nim" class="form-control" required>
                <option value="">-- Pilih Mahasiswa --</option>
                <?php
                $mhs = mysqli_query($koneksi, "SELECT * FROM tbl_mahasiswa");
                while ($d = mysqli_fetch_array($mhs)) {
                    echo "<option value='$d[nim]'>$d[nama]</option>";
                }
                ?>
            </select>
        </div>

        <div class="mb-3">
            <label>Mata Kuliah</label>
            <select name="kodeMatkul" class="form-control" required>
                <option value="">-- Pilih Mata Kuliah --</option>
                <?php
                $mk = mysqli_query($koneksi, "SELECT * FROM tbl_matkul");
                while ($d = mysqli_fetch_array($mk)) {
                    echo "<option value='$d[kodeMatkul]'>$d[namaMatkul]</option>";
                }
                ?>
            </select>
        </div>

        <div class="mb-3">
            <label>Nilai Angka</label>
            <input type="number" name="nilai" class="form-control" min="0" max="100" required>
        </div>

        <div class="mb-3">
            <label>Dosen Pengampu</label>
            <select name="nidn" class="form-control" required>
                <option value="">-- Pilih Dosen --</option>
                <?php
                $dsn = mysqli_query($koneksi, "SELECT * FROM tbl_dosen");
                while ($d = mysqli_fetch_array($dsn)) {
                    echo "<option value='$d[nidn]'>$d[nama]</option>";
                }
                ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
    </div>
    </div>
</div>

<?php
include ('../komponen/footer.php');
?>
