<?php
include "koneksi.php";
$nama = $_POST['nama'];
$keterangan = $_POST['keterangan'];
$waktu = date('d');
echo $nama;

$cari=$connect->query("select*from siswa where nama like '$nama' and waktu like '%$waktu%'");
$cek=$cari->num_rows;

if (empty($cek)){
 $Save = $connect->query("insert into siswa(nama, keterangan)values('$nama', '$keterangan')");
 ?>
<script>
    document.location.href = 'absen.php?notif=berhasil';
</script>
<?php
}else{
?>
<script>
    document.location.href = 'absen.php';
</script>
<?php
}
?>


