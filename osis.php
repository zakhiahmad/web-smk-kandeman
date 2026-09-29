<?php 
include 'includes/header.php'; 
include 'includes/data-organisasi.php'; 
?>

<style>
    .org-container {
        max-width: 1000px;
        margin: 40px auto;
        padding: 0 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #1e293b;
    }

    .page-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .page-header h1 {
        font-size: 2rem;
        font-weight: 800;
        color: #0f172a;
        margin-bottom: 8px;
    }

    .page-header p {
        color: #64748b;
        font-size: 0.95rem;
    }

    .card-org {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 14px;
        padding: 28px;
        margin-bottom: 35px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.03);
    }

    .org-title {
        font-size: 1.3rem;
        font-weight: 700;
        color: #0f172a;
        padding-bottom: 12px;
        border-bottom: 2px solid #f1f5f9;
        margin-bottom: 24px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .org-title span {
        font-size: 0.85rem;
        font-weight: 600;
        padding: 4px 12px;
        border-radius: 20px;
    }

    /* Container Pembina */
    .pembina-wrapper {
        display: flex;
        justify-content: center;
        margin-bottom: 30px;
    }

    /* Grid Foto Pimpinan */
    .pimpinan-grid {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
    }

    .card-foto-pimpinan {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        padding: 12px;
        width: 210px;
        text-align: center;
        box-shadow: 0 4px 10px rgba(0,0,0,0.04);
        transition: transform 0.2s ease;
    }

    .card-foto-pimpinan:hover {
        transform: translateY(-4px);
    }

    .img-poster {
        width: 100%;
        height: 260px;
        object-fit: cover;
        border-radius: 8px;
        background: #f1f5f9;
        margin-bottom: 10px;
    }

    .box-pimpinan-text .jabatan {
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 4px;
    }

    .box-pimpinan-text .nama {
        font-size: 0.95rem;
        font-weight: 700;
        color: #0f172a;
    }
</style>

<div class="org-container">

    <div class="page-header">
        <h1>Organisasi Siswa</h1>
        <p>Wadah Aspirasi, Kepemimpinan, dan Kreativitas Siswa SMKN 1 Kandeman</p>
    </div>

    <!-- ================= 1. BAGIAN OSIS ================= -->
    <div class="card-org">
        <div class="org-title">
            <div>Pengurus OSIS Narayashaka</div>
            <span style="background:#eff6ff; color:#2563eb;">Masa Bakti 2025/2026</span>
        </div>

        <!-- Foto Pembina OSIS -->
        <div class="pembina-wrapper">
            <div class="card-foto-pimpinan" style="background: #f8fafc;">
                <img src="<?= $data_osis['pembina']['foto']; ?>" 
                     alt="<?= $data_osis['pembina']['nama']; ?>" 
                     class="img-poster" 
                     onerror="this.src='https://via.placeholder.com/210x260?text=<?= urlencode($data_osis['pembina']['nama']); ?>'">
                <div class="box-pimpinan-text">
                    <div class="nama"><?= $data_osis['pembina']['nama']; ?></div>
                    <div class="jabatan" style="color:#2563eb;"><?= $data_osis['pembina']['jabatan']; ?></div>
                </div>
            </div>
        </div>

        <!-- Foto Ketua OSIS -->
        <div class="pimpinan-grid">
            <?php foreach ($data_osis['pimpinan'] as $p): ?>
                <div class="card-foto-pimpinan">
                    <img src="<?= $p['foto']; ?>" 
                         alt="<?= $p['nama']; ?>" 
                         class="img-poster" 
                         onerror="this.src='https://via.placeholder.com/210x260?text=<?= urlencode($p['nama']); ?>'">
                    <div class="box-pimpinan-text">
                        <div class="nama"><?= $p['nama']; ?></div>
                        <div class="jabatan" style="color:#2563eb;"><?= $p['jabatan']; ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- ================= 2. BAGIAN MPK ================= -->
    <div class="card-org">
        <div class="org-title">
            <div>Majelis Perwakilan Kelas (MPK)</div>
            <span style="background:#f0fdf4; color:#16a34a;">Pengawas & Legislatif Siswa</span>
        </div>

        <!-- Foto Pembina MPK -->
        <div class="pembina-wrapper">
            <div class="card-foto-pimpinan" style="background: #f0fdf4;">
                <img src="<?= $data_mpk['pembina']['foto']; ?>" 
                     alt="<?= $data_mpk['pembina']['nama']; ?>" 
                     class="img-poster" 
                     onerror="this.src='https://via.placeholder.com/210x260?text=<?= urlencode($data_mpk['pembina']['nama']); ?>'">
                <div class="box-pimpinan-text">
                    <div class="nama"><?= $data_mpk['pembina']['nama']; ?></div>
                    <div class="jabatan" style="color:#16a34a;"><?= $data_mpk['pembina']['jabatan']; ?></div>
                </div>
            </div>
        </div>

        <!-- Foto Ketua MPK -->
        <div class="pimpinan-grid">
            <?php foreach ($data_mpk['pimpinan'] as $m): ?>
                <div class="card-foto-pimpinan">
                    <img src="<?= $m['foto']; ?>" 
                         alt="<?= $m['nama']; ?>" 
                         class="img-poster" 
                         onerror="this.src='https://via.placeholder.com/210x260?text=<?= urlencode($m['nama']); ?>'">
                    <div class="box-pimpinan-text">
                        <div class="nama"><?= $m['nama']; ?></div>
                        <div class="jabatan" style="color:#16a34a;"><?= $m['jabatan']; ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>

<?php include 'includes/footer.php'; ?>