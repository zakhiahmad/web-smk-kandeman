<?php include 'includes/header.php'; ?>

<!-- CDN FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    .kategori-container {
        max-width: 1100px;
        margin: 40px auto;
        padding: 0 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #1e293b;
    }

    /* Hero Banner Header Page */
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
        font-size: 1rem;
    }

    /* Section Title */
    .section-title {
        font-size: 1.35rem;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 12px;
    }
    
    .section-title img.section-icon {
        width: 28px;
        height: 28px;
        object-fit: contain;
    }

    /* Card Box Info Kurikulum */
    .info-box-kurikulum {
        background: #eff6ff;
        border-left: 5px solid #2563eb;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 40px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 20px;
    }
    .info-box-kurikulum .text h3 {
        font-size: 1.1rem;
        font-weight: 700;
        color: #1e40af;
        margin-bottom: 4px;
    }
    .info-box-kurikulum .text p {
        font-size: 0.95rem;
        color: #1e3a8a;
        margin: 0;
    }

    /* Grid Jurusan / Konsentrasi Keahlian */
    .grid-jurusan {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 20px;
        margin-bottom: 50px;
    }

    .card-jurusan {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        padding: 22px;
        transition: all 0.25s ease;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .card-jurusan:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 20px -5px rgba(0, 0, 0, 0.08);
        border-color: #cbd5e1;
    }

    .card-jurusan .header-card {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 12px;
    }

    /* Wrapper Kotak Gambar Logo Jurusan */
    .card-jurusan .icon-box {
        width: 48px;
        height: 48px;
        background: #eff6ff;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 8px;
        flex-shrink: 0;
    }

    .card-jurusan .icon-box img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .card-jurusan h4 {
        font-size: 1.05rem;
        font-weight: 700;
        color: #0f172a;
        margin: 0;
    }

    .card-jurusan p {
        font-size: 0.88rem;
        color: #64748b;
        line-height: 1.5;
        margin-bottom: 15px;
    }

    .card-jurusan .badge-singkatan {
        display: inline-block;
        font-size: 0.75rem;
        font-weight: 700;
        background: #f8fafc;
        color: #475569;
        border: 1px solid #e2e8f0;
        padding: 4px 10px;
        border-radius: 6px;
        align-self: flex-start;
    }

    /* Grid Program Unggulan */
    .grid-program {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 18px;
    }

    .card-program {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 10px;
        padding: 18px;
        display: flex;
        align-items: flex-start;
        gap: 14px;
    }

    /* Wrapper Kotak Icon Gambar Layanan Unggulan */
    .card-program .icon-program {
        width: 44px;
        height: 44px;
        background: #f0fdf4;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 8px;
        flex-shrink: 0;
    }

    .card-program .icon-program img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .card-program .title {
        font-size: 0.95rem;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 4px;
    }

    .card-program .desc {
        font-size: 0.82rem;
        color: #64748b;
        line-height: 1.4;
    }
</style>

<div class="kategori-container">

    <!-- Header Halaman -->
    <div class="page-header">
        <h1>Kurikulum & Program Keahlian</h1>
        <p>Menyiapkan Lulusan Berkarakter, Kompeten, dan Siap Kerja di Dunia Industri</p>
    </div>

    <!-- Banner Kurikulum Saat Ini -->
    <div class="info-box-kurikulum">
        <div class="text">
            <h3>Sistem Kurikulum Pembelajaran</h3>
            <p>Menerapkan <strong>Kurikulum Merdeka</strong> berbasis Industri dan Project Based Learning (PjBL).</p>
        </div>
        <div class="status">
            <span style="background: #2563eb; color: #fff; padding: 6px 14px; border-radius: 20px; font-size: 0.85rem; font-weight: 600;">Semester Gasal 2026/2027</span>
        </div>
    </div>

    <!-- Section 1: Konsentrasi Keahlian -->
    <div class="section-title">
        <img src="assets/icons/icon-jurusan.png" alt="Icon Jurusan" class="section-icon">
        <span>Konsentrasi Keahlian (Jurusan)</span>
    </div>

    <div class="grid-jurusan">

        <!-- 1. Teknik Pemesinan -->
        <div class="card-jurusan">
            <div>
                <div class="header-card">
                    <div class="icon-box">
                        <img src="assets/icons/tp.png" alt="Teknik Pemesinan">
                    </div>
                    <h4>Teknik Pemesinan</h4>
                </div>
                <p>Penguasaan mesin perkakas, CNC, Bubut, Freis, serta teknik pengerjaan logam presisi tinggi standar manufaktur.</p>
            </div>
            <span class="badge-singkatan">TP</span>
        </div>

        <!-- 2. Teknik Kendaraan Ringan -->
        <div class="card-jurusan">
            <div>
                <div class="header-card">
                    <div class="icon-box">
                        <img src="assets/icons/tkr.png" alt="Teknik Kendaraan Ringan">
                    </div>
                    <h4>Teknik Kendaraan Ringan</h4>
                </div>
                <p>Perawatan dan perbaikan sistem mesin mobil, kelistrikan otomotif, EFI, serta manajemen bengkel otomotif.</p>
            </div>
            <span class="badge-singkatan">TKR</span>
        </div>

        <!-- 3. Teknik Bisnis Sepeda Motor -->
        <div class="card-jurusan">
            <div>
                <div class="header-card">
                    <div class="icon-box">
                        <img src="assets/icons/tsm.png" alt="Teknik Bisnis Sepeda Motor">
                    </div>
                    <h4>Teknik Bisnis Sepeda Motor</h4>
                </div>
                <p>Keahlian servis berkala, perbaikan sistem transmisi, sasis, dan manajemen usaha bengkel sepeda motor.</p>
            </div>
            <span class="badge-singkatan">TBSM</span>
        </div>

        <!-- 4. Teknik Audio Video -->
        <div class="card-jurusan">
            <div>
                <div class="header-card">
                    <div class="icon-box">
                        <img src="assets/icons/tav.png" alt="Teknik Audio Video">
                    </div>
                    <h4>Teknik Audio Video</h4>
                </div>
                <p>Pemeliharaan & perbaikan sistem peralatan audio video, perancangan sirkuit elektronika, dan sistem komunikasi.</p>
            </div>
            <span class="badge-singkatan">TAV</span>
        </div>

        <!-- 5. Teknik Elektronika Industri -->
        <div class="card-jurusan">
            <div>
                <div class="header-card">
                    <div class="icon-box">
                        <img src="assets/icons/tei.png" alt="Teknik Elektronika Industri">
                    </div>
                    <h4>Teknik Elektronika Industri</h4>
                </div>
                <p>Penerapan sistem kontrol elektronika, instrumentasi industri, otomatisi sistem manufaktur, dan PLC.</p>
            </div>
            <span class="badge-singkatan">TEI</span>
        </div>

        <!-- 6. Teknik Instalasi Tenaga Listrik -->
        <div class="card-jurusan">
            <div>
                <div class="header-card">
                    <div class="icon-box">
                        <img src="assets/icons/titl.png" alt="Teknik Instalasi Tenaga Listrik">
                    </div>
                    <h4>Teknik Instalasi Tenaga Listrik</h4>
                </div>
                <p>Instalasi penerangan & tenaga listrik bangunan, otomatisasi industri, PLC, serta perawatan motor listrik.</p>
            </div>
            <span class="badge-singkatan">TITL</span>
        </div>

        <!-- 7. PPLG -->
        <div class="card-jurusan">
            <div>
                <div class="header-card">
                    <div class="icon-box">
                        <img src="assets/icons/pplg.png" alt="PPLG">
                    </div>
                    <h4>Pengembangan Perangkat Lunak & Gim</h4>
                </div>
                <p>Pemrograman web, aplikasi mobile, pembuatan gim (game development), serta manajemen basis data.</p>
            </div>
            <span class="badge-singkatan">PPLG</span>
        </div>

    </div>

    <!-- Section 2: Layanan & Program Unggulan -->
    <div class="section-title">
        <img src="assets/icons/icon-layanan.png" alt="Icon Layanan" class="section-icon">
        <span>Layanan & Program Unggulan</span>
    </div>

    <div class="grid-program">
        <!-- Card 1: TEFA -->
        <div class="card-program">
            <div class="icon-program">
                <img src="assets/icons/industry.png" alt="TEFA">
            </div>
            <div>
                <div class="title">Teaching Factory (TEFA)</div>
                <div class="desc">Pembelajaran berbasis produk riil standar industri mitra.</div>
            </div>
        </div>

        <!-- Card 2: LSP-P1 -->
        <div class="card-program">
            <div class="icon-program">
                <img src="assets/icons/lsp.png" alt="LSP-P1">
            </div>
            <div>
                <div class="title">LSP-P1 SMKN 1 Kandeman</div>
                <div class="desc">Uji kompetensi dan sertifikasi keahlian bersertifikat BNSP.</div>
            </div>
        </div>

        <!-- Card 3: BKK -->
        <div class="card-program">
            <div class="icon-program">
                <img src="assets/icons/jobfair.png" alt="BKK">
            </div>
            <div>
                <div class="title">Bursa Kerja Khusus (BKK)</div>
                <div class="desc">Fasilitator penyaluran alumni langsung ke DU/DI mitra sekolah.</div>
            </div>
        </div>

        <!-- Card 4: Job Fair -->
        <div class="card-program">
            <div class="icon-program">
                <img src="assets/icons/jobfair.png" alt="Job Fair">
            </div>
            <div>
                <div class="title">Job Fair</div>
                <div class="desc">Layanan bagi pencari kerja untuk mengakses banyak perusahaan sekaligus.</div>
            </div>
        </div>
    </div>

</div>

<?php include 'includes/footer.php'; ?>