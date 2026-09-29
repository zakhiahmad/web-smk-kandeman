<?php 
include 'includes/data-kegiatan.php';

// Mengambil ID kegiatan dari URL (Default ke 'tps' jika tidak ada/salah ID)
$id_kegiatan = isset($_GET['id']) ? $_GET['id'] : 'tps';

// Cek apakah ID ada di data, jika tidak ada fallback ke 'tps'
$kegiatan = isset($data_kegiatan[$id_kegiatan]) ? $data_kegiatan[$id_kegiatan] : $data_kegiatan['tps'];

include 'includes/header.php'; 
?>

<!-- CDN FontAwesome untuk Icon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    .detail-container {
        max-width: 1000px;
        margin: 40px auto;
        padding: 0 20px;
        font-family: Arial, sans-serif;
        min-height: 65vh;
    }

    .btn-back {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        color: #2563eb;
        text-decoration: none;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .btn-back:hover {
        text-decoration: underline;
    }

    .box-info {
        background: #f8fafc;
        padding: 20px;
        border-radius: 8px;
        margin: 20px 0 30px 0;
    }

    .photo-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
        gap: 15px;
        margin-top: 15px;
    }

    .photo-item {
        position: relative;
        height: 180px;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .photo-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .photo-item:hover img {
        transform: scale(1.05);
    }
</style>

<div class="detail-container">
    
    <!-- TOMBOL KEMBALI -->
    <a href="galeri.php" class="btn-back">
        <i class="fa-solid fa-arrow-left"></i> Kembali ke Galeri
    </a>

    <!-- JUDUL & INFORMASI -->
    <h1 style="margin-top: 10px; color: #0f172a;"><?= $kegiatan['judul']; ?></h1>
    <p style="color: #64748b; font-size: 0.9rem;">
        <i class="fa-regular fa-calendar"></i> <?= $kegiatan['tanggal']; ?> &nbsp;|&nbsp; 
        <i class="fa-solid fa-location-dot"></i> <?= $kegiatan['lokasi']; ?>
    </p>

    <!-- BOX DESKRIPSI -->
    <div class="box-info" style="border-left: 4px solid <?= $kegiatan['warna']; ?>;">
        <h4 style="margin: 0 0 6px 0; color: <?= $kegiatan['warna']; ?>;">Deskripsi Kegiatan:</h4>
        <p style="margin: 0; color: #334155; line-height: 1.6;">
            <?= $kegiatan['deskripsi']; ?>
        </p>
    </div>

    <!-- ALBUM FOTO (LOOPING AUTOMATIS) -->
    <h3><i class="fa-regular fa-images" style="color: <?= $kegiatan['warna']; ?>;"></i> Album Foto Kegiatan</h3>
    
    <div class="photo-grid">
        <?php foreach ($kegiatan['album'] as $foto): ?>
            <div class="photo-item">
                <img src="<?= $foto; ?>" 
                     alt="Foto Kegiatan" 
                     onerror="this.src='https://via.placeholder.com/300x200?text=Foto+Kegiatan'">
            </div>
        <?php endforeach; ?>
    </div>

</div>

<?php include 'includes/footer.php'; ?>