<?php
include ('../komponen/blok.php');
if($_SESSION['role'] == 'mhs'){
    header("Location: ../index.php");
    exit();
}
include ('../komponen/koneksi.php');
include ('../komponen/header.php');
include ('../komponen/topbar.php');
include ('../komponen/sidebar.php');

$kode = $_GET['kodeMatkul'];
$data = mysqli_query($koneksi, "SELECT * FROM tbl_matkul WHERE kodeMatkul='$kode'");
$row = mysqli_fetch_assoc($data);
?>

<div class="container">
    <h3 class="mt-3 mb-3">Edit Mata Kuliah</h3>

    <div class="card mt-4 ms-4 me-4">
    <div class="card-body">

    <form action="proses_edit.php" method="POST">

        <div class="mb-3">
            <label>Kode Matkul</label>
            <input type="text" name="kodeMatkul" class="form-control" value="<?= $row['kodeMatkul']; ?>" readonly>
        </div>

        <div class="mb-3">
            <label>Nama Mata Kuliah</label>
            <input type="text" name="namaMatkul" class="form-control" value="<?= $row['namaMatkul']; ?>" required>
        </div>

        <div class="mb-3">
            <label>SKS</label>
            <input type="number" name="sks" class="form-control" value="<?= $row['sks']; ?>" required>
        </div>

        <div class="form-group mb-3">
            <label>Dosen Pengajar</label>
            <div class="input-group">
                <select name="nidn" class="form-control" required>
                    <option value="">-- Pilih Dosen --</option>

                    <?php
                    $dosen = mysqli_query($koneksi, "SELECT * FROM tbl_dosen ORDER BY nama ASC");
                    while ($dsn = mysqli_fetch_assoc($dosen)) { ?>
                        <option value="<?= $dsn['nidn']; ?>"
                            <?= ($row['nidn'] == $dsn['nidn']) ? "selected" : ""; ?>>
                            <?= $dsn['nidn'] . " - " . $dsn['nama']; ?>
                        </option>
                    <?php } ?>
                </select>

                <span class="input-group-text">
                    <i class="fas fa-chevron-down"></i>
                </span>
            </div>
        </div>


        <button type="submit" class="btn btn-primary">Update</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>

    </form>

    </div>
    </div>
</div>

<?php include ('../komponen/footer.php'); ?>
