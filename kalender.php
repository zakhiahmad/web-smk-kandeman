<?php include 'includes/header.php'; ?>

<!-- CDN FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    .akademik-container {
        max-width: 900px;
        margin: 40px auto;
        padding: 0 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .page-title {
        text-align: center;
        margin-bottom: 35px;
    }

    .page-title h1 {
        font-size: 2rem;
        font-weight: 800;
        color: #0f172a;
        margin-bottom: 6px;
    }

    .page-title p {
        color: #64748b;
        font-size: 0.95rem;
    }

    /* Info Box Soft Clean */
    .alert-info-custom {
        background-color: #f0fdf4;
        border: 1px solid #bbf7d0;
        border-radius: 10px;
        padding: 16px 20px;
        display: flex;
        align-items: flex-start;
        gap: 14px;
        margin-bottom: 35px;
    }

    .alert-info-custom i {
        color: #16a34a;
        font-size: 1.2rem;
        margin-top: 2px;
    }

    .alert-info-custom .alert-content {
        font-size: 0.88rem;
        color: #166534;
        line-height: 1.5;
    }

    .alert-info-custom strong {
        color: #14532d;
    }

    /* Grid Kartu Akses */
    .grid-akademik {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 25px;
    }

    .card-akademik {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 14px;
        padding: 30px 24px;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .card-akademik:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
    }

    /* Wrapper Kotak Icon Gambar */
    .icon-wrapper {
        width: 52px;
        height: 52px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px;
        margin: 0 auto 18px auto;
    }

    .icon-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .icon-drive {
        background: #eff6ff;
    }

    .icon-sheet {
        background: #f0fdf4;
    }

    .card-akademik h3 {
        font-size: 1.15rem;
        font-weight: 700;
        color: #0f172a;
        margin: 0 0 8px 0;
    }

    .card-akademik p {
        font-size: 0.875rem;
        color: #64748b;
        line-height: 1.5;
        margin: 0 0 24px 0;
    }

    /* Tombol Tautan */
    .btn-link {
        width: 100%;
        padding: 12px 20px;
        border-radius: 8px;
        font-weight: 600;
        font-size: 0.9rem;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        transition: background-color 0.2s ease;
    }

    .btn-blue {
        background-color: #2563eb;
        color: #ffffff;
    }

    .btn-blue:hover {
        background-color: #1d4ed8;
    }

    .btn-green {
        background-color: #16a34a;
        color: #ffffff;
    }

    .btn-green:hover {
        background-color: #15803d;
    }
</style>

<div class="akademik-container">

    <!-- Header Judul -->
    <div class="page-title">
        <h1>Akademik & Jadwal Pelajaran</h1>
        <p>Portal Informasi Pembelajaran SMK Negeri 1 Kandeman</p>
    </div>

    <!-- Catatan Akses Khusus Soft/Clean -->
    <div class="alert-info-custom">
        <i class="fa-solid fa-circle-info"></i>
        <div class="alert-content">
            <strong>Akses Khusus Warga Sekolah:</strong> Dokumen di bawah ini bersifat internal. Pastikan Anda telah login menggunakan akun Google Sekolah (<strong>@smkn1kandeman.sch.id</strong>) pada browser sebelum membuka tautan.
        </div>
    </div>

    <!-- Grid Kartu Utama -->
    <div class="grid-akademik">

        <!-- Card 1: Jadwal Pelajaran -->
        <div class="card-akademik">
            <div>
                <div class="icon-wrapper icon-drive">
                    <img src="assets/icons/jadwal.png" alt="Folder Drive">
                </div>
                <h3>Jadwal Pelajaran Kelas</h3>
                <p>Akses folder Drive berisi jadwal KBM per kelas & jurusan lengkap.</p>
            </div>
            <a href="https://drive.google.com/drive/folders/1p5eVzqOkxDzAi1RME6duQEje015wKrjZ?usp=sharing" target="_blank" class="btn-link btn-blue">
                <i class="fa-solid fa-arrow-up-right-from-square"></i> Buka Folder Drive
            </a>
        </div>

        <!-- Card 2: Kalender Akademik -->
        <div class="card-akademik">
            <div>
                <div class="icon-wrapper icon-sheet">
                    <img src="assets/icons/kalender.png" alt="Spreadsheet">
                </div>
                <h3>Kalender Akademik</h3>
                <p>Rincian minggu efektif, jadwal ujian, serta agenda libur sekolah.</p>
            </div>
            <a href="https://docs.google.com/spreadsheets/d/1CB15WxNKar8yHuYV8JX9EBywVmGdKynXSYmyypkzcnA/edit?usp=sharing" target="_blank" class="btn-link btn-green">
                <i class="fa-solid fa-arrow-up-right-from-square"></i> Buka Spreadsheet
            </a>
        </div>

    </div>

</div>

<?php include 'includes/footer.php'; ?>