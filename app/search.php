<?php
include "boot.php";
include "koneksi.php";

$search_query = $_GET['search'];
$search_query_safe = mysqli_real_escape_string($connect, $search_query); // Mencegah SQL Injection

$stmt = $connect->prepare("SELECT * FROM absen WHERE nama LIKE ?");
$stmt->bind_param("s", $search_query_safe);
$stmt->execute();
$result = $stmt->get_result();

echo "<table class='table'>";
echo "<th>no</th>";
echo "<th>nama</th>";
echo "<th>jurusan</th>";
echo "<th>nisn</th>";
echo "<th>jenis_kelamin</th>";
echo "<th>waktu</th>";
echo "<th>Action</th>";

$no = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $no++;
    echo "<tr>";
    echo "<td>$no</td>"; 
    echo "<td>{$row['nama']}</td>";
    echo "<td>{$row['jurusan']}</td>";
    echo "<td>{$row['nisn']}</td>";
    echo "<td>{$row['jenis_kelamin']}</td>";
    echo "<td>{$row['waktu']}</td>";

    // Memperbaiki pengambilan ID
    $id = $row['no'];
    ?>
    <td>
        <!-- Menambahkan konfirmasi sebelum menghapus -->
        <button class="btn btn-danger" onclick="confirmDelete(<?= $id ?>)"><i class="bi bi-trash3"></i></button>
        <button class="btn btn-warning" onclick="document.location.href='updatesearch.php?id=<?= $id ?>'"><i class="bi bi-pencil-square"></i></button>
    </td>
    <?php    
}
echo "</table>";
?>

<script>
// Fungsi untuk menampilkan dialog konfirmasi sebelum menghapus
function confirmDelete(id) {
    if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
        // Redirect ke halaman deletesearch.php dengan menyertakan parameter id
        window.location.href = 'deletesearch.php?id=' + id;
    }
}
</script>
