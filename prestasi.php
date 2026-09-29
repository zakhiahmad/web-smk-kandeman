<?php 
include 'includes/data-prestasi.php';
include 'includes/header.php'; 
?>

<!-- FontAwesome & Google Fonts -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    .prestasi-container {
        max-width: 1100px;
        margin: 40px auto;
        padding: 0 20px;
        font-family: Arial, sans-serif;
        min-height: 70vh;
    }

    /* HEADER HERO */
    .hero-prestasi {
        text-align: center;
        background: linear-gradient(135deg, #1e3a8a, #3b82f6);
        color: white;
        padding: 40px 20px;
        border-radius: 12px;
        margin-bottom: 30px;
        box-shadow: 0 4px 15px rgba(30, 58, 138, 0.2);
    }

    .hero-prestasi h1 {
        margin: 10px 0;
        font-size: 2rem;
    }

    .hero-prestasi p {
        opacity: 0.9;
        max-width: 600px;
        margin: 0 auto;
        font-size: 0.95rem;
    }

    /* GRID PRESTASI */
    .prestasi-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 25px;
    }

    .prestasi-card {
        background: #ffffff;
        border-radius: 10px;
        overflow: hidden;
        border: 1px solid #e2e8f0;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .prestasi-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    .card-img {
        position: relative;
        height: 240px;
        overflow: hidden;
        background: #f1f5f9;
    }

    .card-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .badge-juara {
        position: absolute;
        top: 12px;
        right: 12px;
        background: #eab308; /* Emas */
        color: #fff;
        font-weight: bold;
        font-size: 0.8rem;
        padding: 5px 12px;
        border-radius: 20px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        z-index: 2;
    }

    .badge-perak {
        background: #94a3b8; /* Perak */
        position: absolute;
        top: 12px;
        right: 12px;
        color: #fff;
        font-weight: bold;
        font-size: 0.8rem;
        padding: 5px 12px;
        border-radius: 20px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        z-index: 2;
    }

    .badge-perunggu {
        background: #b45309; /* Perunggu */
        position: absolute;
        top: 12px;
        right: 12px;
        color: #fff;
        font-weight: bold;
        font-size: 0.8rem;
        padding: 5px 12px;
        border-radius: 20px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        z-index: 2;
    }

    .card-body {
        padding: 20px;
    }

    .kategori-tag {
        font-size: 0.75rem;
        color: #2563eb;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .card-title {
        font-size: 1.05rem;
        color: #0f172a;
        margin: 8px 0;
        font-weight: bold;
        line-height: 1.4;
    }

    .siswa-name {
        color: #334155;
        font-size: 0.9rem;
        margin-bottom: 12px;
        display: flex;
        align-items: flex-start;
        gap: 8px;
        font-weight: 600;
    }

    .card-footer-info {
        border-top: 1px solid #f1f5f9;
        padding-top: 12px;
        margin-top: 10px;
        display: flex;
        justify-content: space-between;
        font-size: 0.8rem;
        color: #64748b;
    }
</style>

<div class="prestasi-container">

    <!-- HERO HEADER -->
    <div class="hero-prestasi">
        <h1>Karya & Prestasi Siswa</h1>
        <p>Apresiasi atas pencapaian luar biasa siswa-siswi SMKN 1 Kandeman dalam meraih kejuaraan akademik maupun non-akademik.</p>
    </div>

    <!-- GRID KARTU PRESTASI (LOOPING DINAMIS) -->
    <div class="prestasi-grid">
        <?php foreach ($data_prestasi as $p): ?>
            <div class="prestasi-card">
                <div class="card-img">
                    
                    
                    <img src="<?= $p['foto']; ?>" 
                         alt="<?= $p['nama']; ?>" 
                         onerror="this.src='https://via.placeholder.com/400x300?text=Foto+Prestasi'">
                </div>
                
                <div class="card-body">
                    <span class="kategori-tag"><?= $p['event']; ?></span>
                    <h3 class="card-title"><?= $p['lomba']; ?></h3>
                    
                    <div class="siswa-name">
                        <i class="fa-solid <?= $p['is_tim'] ? 'fa-users' : 'fa-user-graduate'; ?>" style="color: #2563eb; margin-top: 3px;"></i> 
                        <div>
                            <?= $p['nama']; ?> 
                            <?php if (!empty($p['kelas'])): ?>
                                <br><small style="color:#64748b; font-weight:normal;"><?= $p['kelas']; ?></small>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    <div class="card-footer-info">
                        <span><i class="fa-regular fa-calendar"></i> Tahun <?= $p['tahun']; ?></span>
                        <span><i class="fa-solid fa-location-dot"></i> <?= $p['lokasi']; ?></span>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>

<?php include 'includes/footer.php'; ?>