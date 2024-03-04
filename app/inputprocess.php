<?php
include "koneksi.php";
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$nisn = $_POST['nisn'];
$jenis_kelamin = $_POST['jk'];

// Cek apakah nisn sudah ada dalam database
$checknisn = $connect->query("SELECT * FROM absen WHERE nisn='$nisn'");
if($checknisn->num_rows > 0) {
    // Jika nisn sudah ada, berikan notifikasi
    echo "maaf, nisn tidak boleh sama!";
} else {
    if ($nama == "") {
        echo "maaf, nama tidak boleh kosong!";
    } else {
        $Save = $connect->query("INSERT INTO absen(nama, jurusan, nisn, jenis_kelamin) VALUES ('$nama', '$jurusan', '$nisn', '$jenis_kelamin')");
        if ($Save) {
            echo "Data berhasil disimpan!";
            // Redirect ke halaman input.php dengan notifikasi berhasil
            echo "<script>document.location.href = 'input.php?notif=berhasil';</script>";
        } else {
            echo "maaf, terjadi kesalahan saat menyimpan data.";
        }
    }
}
?>
