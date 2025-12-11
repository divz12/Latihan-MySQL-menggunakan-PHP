<?php
include ('../komponen/koneksi.php');
include ('../komponen/header.php');
include ('../komponen/topbar.php');
include ('../komponen/sidebar.php');

$nidn = $_GET['nidn'];
$data = mysqli_query($koneksi, "SELECT * FROM tbl_dosen WHERE nidn='$nidn'");
$row = mysqli_fetch_array($data);
?>

<div class="container">

    <h3 class="mt-3 mb-3">Edit Data Dosen</h3>

    <div class="card mt-4 shadow-sm ms-4 me-4">

        <div class="card-body">

            <form action="proses_edit.php" method="post">

                <input type="hidden" name="nidn" value="<?= $row['nidn']; ?>" readonly>

                <div class="form-group mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control"
                           value="<?= $row['nama']; ?>" placeholder="Masukkan Nama">
                </div>

                <div class="form-group mb-3">
                    <label>Prodi</label>
                    <div class="input-group">
                        <select name="prodi" class="form-control">
                            <option value="">-- Pilih Prodi --</option>

                            <option value="TEKNOLOGI REKAYASA PERANGKAT LUNAK"
                                <?= ($row['prodi'] == "TEKNOLOGI REKAYASA PERANGKAT LUNAK") ? "selected" : ""; ?>>
                                TEKNOLOGI REKAYASA PERANGKAT LUNAK
                            </option>

                            <option value="TEKNOLOGI LISTRIK"
                                <?= ($row['prodi'] == "TEKNOLOGI LISTRIK") ? "selected" : ""; ?>>
                                TEKNOLOGI LISTRIK
                            </option>

                            <option value="TEKNOLOGI MESIN"
                                <?= ($row['prodi'] == "TEKNOLOGI MESIN") ? "selected" : ""; ?>>
                                TEKNOLOGI MESIN
                            </option>

                            <option value="TEKNOLOGI MEKATRONIKA"
                                <?= ($row['prodi'] == "TEKNOLOGI MEKATRONIKA") ? "selected" : ""; ?>>
                                TEKNOLOGI MEKATRONIKA
                            </option>
                        </select>

                        <span class="input-group-text">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </div>
                </div>


                <div class="form-group mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control"
                           value="<?= $row['email']; ?>" placeholder="Masukkan Email">
                </div>

                <div class="mt-4">
                    <button class="btn btn-success">
                        <i class="fas fa-save"></i> Update
                    </button>
                    <a href="index.php" class="btn btn-secondary">Kembali</a>
                </div>

            </form>

        </div>
    </div>

</div>

<?php
include ('../komponen/footer.php');
?>
