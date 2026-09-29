<?php 
include 'includes/data-kegiatan.php';
include 'includes/header.php'; 
?>

<!-- CDN FontAwesome untuk Icon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    .galeri-container {
        max-width: 1100px;
        margin: 40px auto;
        padding: 0 20px;
        font-family: Arial, sans-serif;
        min-height: 65vh; 
    }
    .galeri-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
        margin-top: 20px;
    }
    .galeri-card {
        background: #fff;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .galeri-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    .galeri-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
    .galeri-content {
        padding: 15px;
    }
    .btn-detail {
        display: inline-block;
        margin-top: 12px;
        color: #2563eb;
        font-weight: bold;
        text-decoration: none;
    }
    .btn-detail:hover {
        text-decoration: underline;
    }
</style>

<div class="galeri-container">
    <h2>Galeri Kegiatan Sekolah</h2>
    <p style="color: #64748b;">Dokumentasi Kegiatan Siswa SMKN 1 Kandeman</p>

    <div class="galeri-grid">
        <!-- LOOPING TAMPILKAN SEMUA KEGIATAN -->
        <?php foreach ($data_kegiatan as $key => $kegiatan): ?>
            <div class="galeri-card">
                <img src="<?= $kegiatan['gambar_sampul']; ?>" 
                     alt="<?= $kegiatan['judul']; ?>" 
                     onerror="this.src='https://via.placeholder.com/400x250?text=Foto+Kegiatan'">
                
                <div class="galeri-content">
                    <small style="color: #64748b;">
                        <i class="fa-regular fa-calendar"></i> <?= $kegiatan['tanggal']; ?>
                    </small>
                    <h3 style="margin: 8px 0; font-size: 1.1rem; color: #0f172a; line-height: 1.3;">
                        <?= $kegiatan['judul']; ?>
                    </h3>
                    <p style="font-size: 0.9rem; color: #475569; margin: 0;">
                        <?= $kegiatan['ringkasan']; ?>
                    </p>
                    
                    <a href="detail-kegiatan.php?id=<?= $key; ?>" class="btn-detail">
                        Lihat Foto (Album) &rarr;
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div> 

<?php include 'includes/footer.php'; ?>