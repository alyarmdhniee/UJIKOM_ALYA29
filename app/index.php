<?php

session_start();
$user = $_SESSION['user'];

if ($user == ""){
  ?>
  <script>
    document.location = '../index.php';
  </script>
<?php
}else{
include "boot.php";
?>
  <body>
    <div class="container">
    <!-- Ini bagian navbar -->
<nav class="navbar navbar-expand-lg bg-secondary mt-2">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Selamat Datang di Aplikasi Absensi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
  
  
      </ul>
      <form class="d-flex" role="search" method="GET" action="search.php" target="konten">
        <input class="form-control me-2" type="text" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">OK</button>
      </form>
    </div>
  </div>
</nav>
    <!-- Ini penutup -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<div class="row">
    <div class="col col-3 mt-2 ">
    <ul class="list-group">
    <a href="dashboard.php" target="konten">
  <li class="list-group-item"><i class="bi bi-house-fill"></i> Dashboard</li>
  </a>
  <a href="absen.php" target="konten">
  <li class="list-group-item"><i class="bi bi-journal-check"></i>Absen</li>
</a>
      <a href="input.php" target="konten">
  <li class="list-group-item"><i class="bi bi-person-fill"></i>Input Data Siswa</li>
  </a>
  <a href="tampil.php" target="konten">
  <li class="list-group-item"><i class="bi bi-people-fill"></i>Data Siswa</li>
</a>
<a href="rekap.php" target="konten">
  <li class="list-group-item"><i class="bi bi-bookmark-fill"></i>Rekap</li>
</a>
  <a href="logout.php">
  <li class="list-group-item"><i class="bi bi-box-arrow-right"></i>Logout</li>
</a>
</ul>
    </div>
    <div class="col mt-2">
      <iframe src="dashboard.php" name="konten" frameborder="0" width=100% height=800></iframe>
</div>
</div>
</div>
  </body>

<?php
}
?>