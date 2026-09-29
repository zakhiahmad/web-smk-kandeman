<?php
include 'includes/header.php';
include 'includes/data-berita.php'; 

// Ambil ID dari URL, default ke 1
$id = isset($_GET['id']) ? (int)$_GET['id'] : 1;

// Ambil data dari array terpusat, kalau tidak ada pakai ID 1
$data = $semua_berita[$id] ?? $semua_berita[1];
?>

<div class="container" style="max-width: 800px; margin: 40px auto; padding: 0 20px;">
    <!-- Tombol Kembali -->
    <a href="berita.php" style="display: inline-block; margin-bottom: 20px; color: #2563eb; text-decoration: none; font-weight: bold;">
        &larr; Kembali ke Daftar Berita
    </a>

    <!-- Judul & Tanggal -->
    <h1 style="font-size: 2rem; color: #0f172a; margin-bottom: 10px; line-height: 1.3;"><?= $data['judul']; ?></h1>
    <p style="color: #64748b; font-size: 0.9rem; margin-bottom: 20px;">Diterbitkan pada: <strong><?= $data['tanggal']; ?></strong></p>
     <!-- Gambar Berita -->
    <img src="<?= $data['gambar']; ?>" 
     alt="<?= $data['judul']; ?>" 
     style="width: 100%; max-height: 400px; object-fit: fill; border-radius: 8px; margin-bottom: 25px;"
     onerror="this.src='https://via.placeholder.com/800x400?text=Gambar+Berita'">

   
    <!-- Isi Berita -->
    <div style="font-size: 1.05rem; line-height: 1.8; color: #334155;">
        <p><?= $data['isi']; ?></p>
    </div>
</div>

<?php include 'includes/footer.php'; ?>