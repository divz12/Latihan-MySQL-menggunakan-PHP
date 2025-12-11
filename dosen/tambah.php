<?php
include ('../komponen/koneksi.php');
include ('../komponen/header.php');
include ('../komponen/topbar.php');
include ('../komponen/sidebar.php');
?>

<div class="container">

    <h3 class="mt-3 mb-3">Tambah Data Mahasiswa</h3>

    <div class="card mt-4 ms-4 me-4">

        <div class="card-body">

            <form action="proses_tambah.php" method="post">

                <div class="form-group mb-3">
                    <label>NIDN</label>
                    <input type="text" name="nidn" class="form-control" placeholder="Masukkan NIM">
                </div>

                <div class="form-group mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
                </div>

                <div class="form-group mb-3">
                    <label>Prodi</label>
                    <div class="input-group">
                        <select name="prodi" class="form-control">
                            <option value="">-- Pilih Prodi --</option>
                            <option value="TEKNOLOGI REKAYASA PERANGKAT LUNAK">TEKNOLOGI REKAYASA PERANGKAT LUNAK</option>
                            <option value="SISTEM INFORMASI">SISTEM INFORMASI</option>
                            <option value="INFORMATIKA">INFORMATIKA</option>
                            <option value="TEKNOLOGI LISTRIK">TEKNOLOGI LISTRIK</option>
                            <option value="TEKNOLOGI MESIN">TEKNOLOGI MESIN</option>
                            <option value="TEKNOLOGI MEKATRONIKA">TEKNOLOGI MEKATRONIKA</option>
                        </select>
                        <span class="input-group-text"><i class="fas fa-chevron-down"></i></span>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Masukkan Email">
                </div>

                <div class="mt-4">
                    <button class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                    <a href="index.php" class="btn btn-secondary">Kembali</a>
                </div>

            </form>

        </div>
    </div>

</div>

<?php
include ('../komponen/footer.php');
?>
