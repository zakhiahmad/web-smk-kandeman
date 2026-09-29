<?php 
include 'includes/header.php'; 
include 'includes/data-berita.php'; // Panggil data terpusat
?>

<section class="section" style="background: #f8fafc; padding: 60px 0;">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 40px;">
            <h2 style="color: #0f172a; font-size: 2rem;">Berita & Pengumuman</h2>
            <p style="color: #64748b;">Informasi Terkini SMK Negeri 1 Kandeman</p>
        </div>

        <div class="news-grid">
            <?php foreach ($semua_berita as $b): ?>
                <div class="news-card">
                    <a href="detail-berita.php?id=<?= $b['id']; ?>">
                        <img src="<?= $b['gambar']; ?>" alt="<?= $b['judul']; ?>" style="width: 100%; height: 180px; object-fit: fill;">
                    </a>
                    <div class="news-body">
                        <span class="news-tag"><?= $b['kategori']; ?></span>
                        <small style="display: block; color: #64748b; margin-top: 5px;"><?= $b['tanggal']; ?></small>
                        <h3>
                            <a href="detail-berita.php?id=<?= $b['id']; ?>" style="text-decoration: none; color: inherit;">
                                <?= $b['judul']; ?>
                            </a>
                        </h3>
                        <p style="font-size: 0.85rem; color: #475569; margin-top: 8px;"><?= $b['ringkasan']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div> <!-- Penutup news-grid -->
    </div> <!-- Penutup container -->
</section>

<?php include 'includes/footer.php'; ?>