<?php
include "../komponen/koneksi.php";
include "../komponen/header.php";
include "../komponen/topbar.php";
include "../komponen/sidebar.php";

$id = $_GET['id_nilai'];

$data = mysqli_query($koneksi, "SELECT * FROM tbl_nilai WHERE id_nilai='$id'");
$row = mysqli_fetch_array($data);

function nilaiHuruf($nilai) {
    if ($nilai >= 90) return "A";
    else if ($nilai >= 70) return "B";
    else if ($nilai >= 60) return "C";
    else if ($nilai >= 50) return "D";
    else return "E";
}
?>

<div class="container">
    <h3 class="mt-4">Edit Data Nilai</h3>

    <div class="card mt-4 ms-4 me-4">
    <div class="card-body">

    <form action="proses_edit.php" method="POST" class="mt-3 ms-4 me-4">

        <input type="hidden" name="id_nilai" value="<?= $row['id_nilai']; ?>">

        <div class="mb-3">
            <label>Mahasiswa</label>
            <select name="nim" class="form-control" required>
                <?php
                $mhs = mysqli_query($koneksi, "SELECT * FROM tbl_mahasiswa");
                while ($d = mysqli_fetch_array($mhs)) {
                    $selected = ($row['nim'] == $d['nim']) ? "selected" : "";
                    echo "<option value='$d[nim]' $selected>$d[nama]</option>";
                }
                ?>
            </select>
        </div>

        <div class="mb-3">
            <label>Mata Kuliah</label>
            <select name="kodeMatkul" class="form-control" required>
                <?php
                $mk = mysqli_query($koneksi, "SELECT * FROM tbl_matkul");
                while ($d = mysqli_fetch_array($mk)) {
                    $selected = ($row['kodeMatkul'] == $d['kodeMatkul']) ? "selected" : "";
                    echo "<option value='$d[kodeMatkul]' $selected>$d[namaMatkul]</option>";
                }
                ?>
            </select>
        </div>

        <div class="mb-3">
            <label>Nilai Angka</label>
            <input type="number" name="nilai" class="form-control" min="0" max="100"
                   value="<?= $row['nilai']; ?>" required>
        </div>

        <div class="mb-3">
            <label>Dosen Pengampu</label>
            <select name="nidn" class="form-control" required>
                <?php
                $dsn = mysqli_query($koneksi, "SELECT * FROM tbl_dosen");
                while ($d = mysqli_fetch_array($dsn)) {
                    $selected = ($row['nidn'] == $d['nidn']) ? "selected" : "";
                    echo "<option value='$d[nidn]' $selected>$d[nama]</option>";
                }
                ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>

    </div>
    </div>
</div>

<?php include "../komponen/footer.php"; ?>
