<?php
include "boot.php";
include "koneksi.php";
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">nama</th>
      <th scope="col">jurusan</th>
      <th scope="col">nisn</th>
      <th scope="col">jenis_kelamin</th>
      <th scope="col">waktu</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $tampil = $connect->query("SELECT * FROM absen ORDER BY waktu DESC"); // Menambahkan pengurutan berdasarkan waktu menurun
    $no = 0; // Menginisialisasi nomor baris
    while ($s = $tampil->fetch_array()) {
        $no++;
    ?>
    <tr>
      <th scope="row"><?= $no; ?></th>
      <td><?= $s['nama'] ?></td>
      <td><?= $s['jurusan'] ?></td>
      <td><?= $s['nisn'] ?></td>
      <td><?= $s['jenis_kelamin'] ?></td>
      <td><?= $s['waktu'] ?></td>
      <td>
        <!-- Menggunakan JavaScript untuk konfirmasi sebelum menghapus -->
        <button class="btn btn-danger" onclick="confirmDelete(<?= $s['no']?>)"><i class="bi bi-trash3"></i></button>
        <button class="btn btn-warning" onclick="document.location.href='update.php?id=<?= $s['no']?>'"><i class="bi bi-pencil-square"></i></button>
      </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>

<script>
// Fungsi untuk menampilkan dialog konfirmasi sebelum menghapus
function confirmDelete(id) {
    if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
        // Redirect ke halaman delete.php dengan menyertakan parameter id
        window.location.href = 'delete.php?id=' + id;
    }
}
</script>
