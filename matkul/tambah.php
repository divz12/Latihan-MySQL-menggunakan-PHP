<?php
include ('../komponen/koneksi.php');
include ('../komponen/header.php');
include ('../komponen/topbar.php');
include ('../komponen/sidebar.php');

$data = mysqli_query($koneksi, "SELECT MAX(kodeMatkul) AS kode FROM tbl_matkul");
$hasil = mysqli_fetch_assoc($data);

$lastKode = $hasil['kode'];

$urut = 1;
if ($lastKode) {
    $urut = (int) substr($lastKode, 2, 3);
    $urut++;
}

$kodeBaru = "MK" . sprintf("%03d", $urut);
?>

<div class="container">
    <h3 class="mt-3 mb-3">Tambah Mata Kuliah</h3>

    <div class="card mt-4 ms-4 me-4">
    <div class="card-body">

    <form action="proses_tambah.php" method="POST">

        <div class="mb-3">
            <label>Kode Matkul</label>
            <input type="text" name="kodeMatkul" class="form-control"
                   value="<?= $kodeBaru; ?>" readonly required>
        </div>

        <div class="mb-3">
            <label>Nama Mata Kuliah</label>
            <input type="text" name="namaMatkul" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>SKS</label>
            <input type="number" name="sks" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Dosen Pengajar</label>
            <select name="nidn" class="form-control" required>
                <option value="">-- Pilih Dosen --</option>
                <?php
                $dosen = mysqli_query($koneksi, "SELECT * FROM tbl_dosen ORDER BY nama ASC");
                while ($row = mysqli_fetch_assoc($dosen)) { ?>
                    <option value="<?= $row['nidn']; ?>">
                        <?= $row['nidn'] . " - " . $row['nama']; ?>
                    </option>
                <?php } ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>

    </form>

    </div>
    </div>
</div>

<?php include ('../komponen/footer.php'); ?>
