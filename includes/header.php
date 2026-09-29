<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Negeri 1 Kandeman</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

    <!-- NAVBAR MAIN -->
    <nav class="navbar">
        <div class="container nav-container">
            <!-- BRAND LOGO & NAMA SEKOLAH -->
            <a href="index.php" class="logo-brand" style="display: flex; align-items: center; gap: 12px; text-decoration: none;">
                <!-- Jalur logo diarahkan ke folder assets/ -->
                <img src="uploads/logo-smk.png" alt="Logo SMKN 1 Kandeman" style="height: 48px; width: auto;" onerror="this.onerror=null; this.src='https://sman1-smg.sch.id/wp-content/uploads/2021/04/logo-sman1semarang.png';">
                <div class="logo-text">
                    <h2 style="font-size: 1.2rem; margin: 0; color: #0f172a; font-weight: 700;">SMKN 1 KANDEMAN</h2>
                    <p style="font-size: 0.75rem; margin: 0; color: #64748b; letter-spacing: 0.5px;">Mengukir Sejarah Generasi Berakhlak Mulia</p>
                </div>
            </a>

            <!-- NAVIGASI MENU -->
            <ul class="nav-links">
                <li><a href="index.php">Beranda</a></li>
                
                <!-- 2. PROFIL SEKOLAH -->
                <li class="dropdown">
                    <a href="#">Profil ▾</a>
                    <ul class="dropdown-menu">
                        <li><a href="sambutan.php">Sambutan Kepsek</a></li>
                        <li><a href="sejarah.php">Sejarah Sekolah</a></li>
                        <li><a href="visi-misi.php">Visi & Misi</a></li>
                        <li><a href="struktur.php">Struktur Organisasi</a></li>
                        <li><a href="guru.php">Data Guru & Staf</a></li>
                        <li><a href="fasilitas.php">Fasilitas & Akreditasi</a></li>
                    </ul>
                </li>

                <!-- 3. AKADEMIK -->
                <li class="dropdown">
                    <a href="#">Akademik ▾</a>
                    <ul class="dropdown-menu">
                        <li><a href="kurikulum.php">Kurikulum & Program</a></li>
                        <li><a href="kalender.php">Kalender & Jadwal</a></li>
                    </ul>
                </li>

                <!-- 4. KESISWAAN -->
                <li class="dropdown">
                    <a href="#">Kesiswaan ▾</a>
                    <ul class="dropdown-menu">
                        <li><a href="osis.php">OSIS & MPK</a></li>
                        <li><a href="galeri.php">Galeri Kegiatan</a></li>
                        <li><a href="prestasi.php">Karya & Prestasi Siswa</a></li>
                    </ul>
                </li>

                <!-- 5. INFORMASI & BERITA -->
                <li class="dropdown">
                    <a href="#">Informasi ▾</a>
                    <ul class="dropdown-menu">
                        <li><a href="berita.php">Pengumuman & Berita</a></li>
                        <li><a href="agenda.php">Agenda Kegiatan</a></li>
                    </ul>
                </li>

                <!-- 6. KONTAK -->
                <li><a href="kontak.php">Kontak</a></li>
            </ul>
        </div>
    </nav>