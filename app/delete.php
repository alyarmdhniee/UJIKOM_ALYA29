<?php
include "koneksi.php";
$id = $_GET['id'];
$delete = $connect->query("delete from absen where no ='$id'");
?>
<script>
    document.location.href = 'tampil.php';
</script>
