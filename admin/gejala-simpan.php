<?php 
include '../assets/conn/config.php';
if (isset($_GET['aksi'])) {
    if ($_GET['aksi'] == 'simpan') {
        $nama_lengkap = $_POST['nama_lengkap'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $umur = $_POST['umur'];

        mysqli_query($conn, "INSERT INTO tbl_pasien (nama_lengkap, jenis_kelamin, umur) VALUES
        ('$nama_lengkap','$jenis_kelamin','$umur')");
        header("location:pasien.php");
    }
}

include 'header.php';
?>

<div class="container">
    <div class="card shadow p-5 mb-5">
        <div class="card-header">
            <h5 class="m-0 font-weight-bold text-primary">Tambah Data</h5>
        </div>

        <div class="card-body">
            <form action="pasien-simpan.php?aksi=simpan" method="post">
                <input type="hidden" name="id_admin" class="form-control" value="<?= $a['id_admin'] ?>">

                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="form-control" placeholder="Masukkan nama lengkap" required>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="Jenis_kelamin" class="form-control required">
                    <option selected disabled>Pilih Jenis Kelamin Anda</option>
                    <option>👦 Laki-Laki</option>
                    <option>👧 Perempuan</option>
                   </select>
                </div>
                <div class="form-group">
                    <label>Umur</label>
                    <input type="number" name="umur" class="form-control" placeholder="Masukkan umur" min="1" required>
                </div>
                <a href="gejala.php" class="btn btn-secondary">Batal</a>
                <input type="submit" value="Simpan" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>

<?php 
include 'footer.php';
?>
