<?php 
// P6: PHP dasar dan pemrograman sisi peladen 
// Bagian 1: Variabel dan konstanta 
$nim = "2622500052"; 
$namaMahasiswa = "vera"; 
$programStudi = "Sistem Informasi"; 
$tahunAkademik = "2026/2027"; 
$semester = 1; 
$ipk = 0.0; 
$statusAktif = true; 
$catatanTambahan = null; 
const NAMA_MATA_KULIAH = "Pemrograman Web Dasar"; 
const PROFIL_GITHUB = "vera"; 
$batasSemester = 8; 
$sisaSemester = $batasSemester - $semester;
$semesterValid = $semester >= 1 && $semester <= $batasSemester; 
$statusSemester = ($semesterValid && $statusAktif) ? "Sesuai rentang" : "Perlu diperiksa";
// Bagian 3: Percabangan if-elseif-else 
if ($semester < 3) { 
  $keteranganSemester = "Semester awal"; 
} elseif ($semester <= 6) { 
  $keteranganSemester = "Semester menengah"; 
} else { 
  $keteranganSemester = "Semester akhir"; 
} 
$namaProdi = ($programStudi == "SI") ? "Sistem Informasi" : (($programStudi == "TI") ? "Teknik 
Informatika" : "Lainnya"); 
// Bagian 4: Percabangan switch-case-default 
switch ($programStudi) { 
  case "SI": 
 $fokusProgramStudi = "Sistem informasi dan proses bisnis"; 
    break; 
  case "TI": 
    $fokusProgramStudi = "Komputasi dan pengembangan perangkat lunak"; 
    break; 
  default: 
    $fokusProgramStudi = "Belum ditentukan"; 
} 
?> 
<!doctype html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profil Mahasiswa</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <header>
    <div class="header-top">
      <h1>Profil Mahasiswa</h1>
       <button
          class="nav-toggle"
          id="navToggle"
          type="button"
          aria-label="Buka navigasi"
          aria-controls="navMenu"
          aria-expanded="false">
        &#9776;
      </button>
    </div>

    <nav>
      <ul id="navMenu">
        <li><a href="#home">Beranda</a></li>
        <li><a href="#about">Tentang</a></li>
        <li><a href="#contact">Kontak</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section id="home">
      <h2>Selamat Datang</h2>
      <p>Halo, saya <strong><?php echo $namaMahasiswa; ?></strong>. Saya sedang mempelajari matakuliah 
      <strong><?php print NAMA_MATA_KULIAH; ?></strong> pada tahun akademik <?php echo $tahunAkademik; 
      ?>.</p> 

      <img src="img/foto-profil.jpg" alt="Foto profil Rian" />
    </section>

    <section id="about">
      <h2>Tentang Saya</h2>

      <article> 
        <h3>Profil Singkat</h3> 
        <p>Sisa semester hingga batas: <?php echo $sisaSemester; ?></p> 
        <p>saya mahasiswa program studi  <?php echo $programStudi; ?>
        <p>Status aktif: <?php echo $statusAktif ? 'Aktif' : 'Tidak Aktif'; ?></p>
        <p>Pemeriksaan rentang semester: <?php echo $statusSemester; ?></p>
        <p>Semester: <?php echo $semester . " (" . $keteranganSemester . ")"; ?></p>
        <p>Status mahasiswa: <?php echo $statusAktif ? "Aktif" : "Tidak aktif"; ?></p>
        <p>IPK: <?php echo number_format($ipk, 2, ',', '.'); ?></p> 
        <p>Catatan tambahan: <?php echo $catatanTambahan === null ? "Belum ada" : $catatanTambahan; 
        ?></ p> 
        <h3>Target Belajar</h3>
        <h3>Target Belajar (Perulangan for)</h3> 
        <ol> 
          <?php 
          // Perulangan for tanpa array; materi larik dibahas pada P9. 
          for ($i = 1; $i <= 5; $i++) { 
            echo "<li>Target belajar ke-" . $i . ": "; 
            switch ($i) { 
              case 1: 
                echo "Memahami sintaks dasar PHP."; 
                break; 
              case 2: 
                echo "Menggunakan variabel dan konstanta."; 
                break; 
              case 3: 
                echo "Menerapkan operator dan percabangan."; 
                break; 
              case 4: 
                echo "Menggunaka…