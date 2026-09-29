<?php include 'includes/header.php'; ?>

<!-- CDN FontAwesome untuk Icon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    .info-container {
        max-width: 1000px;
        margin: 30px auto;
        padding: 0 15px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #334155;
    }

    .card-custom {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        padding: 24px;
        margin-bottom: 30px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
    }

    .section-title {
        font-size: 1.4rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 20px;
    }

    /* Styles untuk Tabel Akreditasi */
    .table-responsive {
        overflow-x: auto;
    }
    
    .table-akreditasi {
        width: 100%;
        border-collapse: collapse;
        text-align: left;
    }

    .table-akreditasi th {
        padding: 12px 16px;
        color: #64748b;
        font-weight: 600;
        font-size: 0.9rem;
        border-bottom: 1px solid #e2e8f0;
    }

    .table-akreditasi td {
        padding: 16px;
        font-size: 0.95rem;
        border-bottom: 1px solid #f1f5f9;
        font-weight: 500;
    }

    .badge-akreditasi {
        background-color: #dcfce7;
        color: #15803d;
        padding: 6px 14px;
        border-radius: 6px;
        font-weight: 700;
        display: inline-block;
    }

    /* Styles untuk Grid Utilitas & Fasilitas */
    .grid-utilitas {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 20px;
    }

    .item-utilitas {
        display: flex;
        align-items: flex-start;
        gap: 15px;
    }

    .item-utilitas i {
        font-size: 1.5rem;
        color: #64748b;
        margin-top: 3px;
        width: 30px;
        text-align: center;
    }

    .item-utilitas .label {
        font-size: 0.85rem;
        color: #64748b;
        margin-bottom: 2px;
    }

    .item-utilitas .value {
        font-size: 1rem;
        font-weight: 700;
        color: #0f172a;
    }

    /* Styles untuk Grid Statistik */
    .grid-statistik {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        overflow: hidden;
    }

    .box-stat {
        padding: 20px;
        border-right: 1px solid #e2e8f0;
        border-bottom: 1px solid #e2e8f0;
        background: #fff;
    }

    .box-stat:nth-child(4n) {
        border-right: none;
    }

    .box-stat:nth-child(n+5) {
        border-bottom: none;
    }

    .box-stat i {
        font-size: 1.4rem;
        color: #64748b;
        margin-bottom: 10px;
    }

    .box-stat .stat-label {
        font-size: 0.85rem;
        color: #64748b;
        margin-bottom: 8px;
    }

    .box-stat .stat-value {
        font-size: 1.6rem;
        font-weight: 700;
        color: #2563eb;
    }

    /* Styles untuk Galeri Foto Fasilitas */
    .grid-galeri {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 20px;
    }

    .card-galeri {
        border: 1px solid #f1f5f9;
        border-radius: 8px;
        overflow: hidden;
        background: #f8fafc;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .card-galeri:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    }

    .card-galeri img {
        width: 100%;
        height: 160px;
        object-fit: cover;
    }

    .card-galeri .caption {
        padding: 12px;
        text-align: center;
        font-size: 0.95rem;
        font-weight: 600;
        color: #0f172a;
    }

    /* Responsif HP */
    @media (max-width: 768px) {
        .grid-statistik {
            grid-template-columns: repeat(2, 1fr);
        }
        .box-stat:nth-child(2n) {
            border-right: none;
        }
        .box-stat:nth-child(4n) {
            border-right: 1px solid #e2e8f0;
        }
        .box-stat:nth-child(n+7) {
            border-bottom: none;
        }
    }
</style>

<div class="info-container">

    <!-- 1. BAGIAN NILAI AKREDITASI -->
    <div class="card-custom">
        <div class="section-title">Nilai Akreditasi</div>
        <div class="table-responsive">
            <table class="table-akreditasi">
                <thead>
                    <tr>
                        <th>Tahun</th>
                        <th>SK Penetapan</th>
                        <th>Tanggal SK</th>
                        <th>Tanggal Akhir SK</th>
                        <th>Nilai Akhir</th>
                        <th>Peringkat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2022</td>
                        <td>1857/BAN-SM/SK/2022</td>
                        <td>30 Nov 2022</td>
                        <td>31 Des 2027</td>
                        <td>92</td>
                        <td><span class="badge-akreditasi">A</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- 2. BAGIAN UTILITAS & FASILITAS (Tanpa Kurikulum) -->
    <div class="card-custom">
        <div class="section-title">Utilitas & Fasilitas Utama</div>
        <div class="grid-utilitas">

            <div class="item-utilitas">
                <i class="fa-regular fa-clock"></i>
                <div>
                    <div class="label">Penyelenggaraan</div>
                    <div class="value">Sehari Penuh/5 hari</div>
                </div>
            </div>

            <div class="item-utilitas">
                <i class="fa-solid fa-wifi"></i>
                <div>
                    <div class="label">Akses Internet</div>
                    <div class="value">Shared</div>
                </div>
            </div>

            <div class="item-utilitas">
                <i class="fa-solid fa-bolt"></i>
                <div>
                    <div class="label">Sumber Listrik</div>
                    <div class="value">PLN</div>
                </div>
            </div>

            <div class="item-utilitas">
                <i class="fa-solid fa-shield-halved"></i>
                <div>
                    <div class="label">Daya Listrik</div>
                    <div class="value">82.500 VA</div>
                </div>
            </div>

            <div class="item-utilitas">
                <i class="fa-solid fa-location-dot"></i>
                <div>
                    <div class="label">Luas Tanah</div>
                    <div class="value">49.000 m²</div>
                </div>
            </div>

            <div class="item-utilitas">
                <i class="fa-regular fa-calendar-days"></i>
                <div>
                    <div class="label">Semester Data</div>
                    <div class="value">2026/2027 Gasal</div>
                </div>
            </div>

        </div>
    </div>

    <!-- 3. BAGIAN STATISTIK SEKOLAH & FASILITAS SARPRAS -->
    <div class="card-custom">
        <div class="section-title">Statistik & Sarana Fasilitas</div>
        <div class="grid-statistik">
            
            <div class="box-stat">
                <i class="fa-solid fa-users"></i>
                <div class="stat-label">Guru</div>
                <div class="stat-value">94</div>
            </div>

            <div class="box-stat">
                <i class="fa-solid fa-mars"></i>
                <div class="stat-label">Siswa Laki-laki</div>
                <div class="stat-value">775</div>
            </div>

            <div class="box-stat">
                <i class="fa-solid fa-venus"></i>
                <div class="stat-label">Siswa Perempuan</div>
                <div class="stat-value">826</div>
            </div>

            <div class="box-stat">
                <i class="fa-solid fa-border-all"></i>
                <div class="stat-label">Rombongan Belajar</div>
                <div class="stat-value">45</div>
            </div>

            <div class="box-stat">
                <i class="fa-solid fa-graduation-cap"></i>
                <div class="stat-label">Daya Tampung</div>
                <div class="stat-value">—</div>
            </div>

            <div class="box-stat">
                <i class="fa-solid fa-house"></i>
                <div class="stat-label">Ruang Kelas</div>
                <div class="stat-value">38</div>
            </div>

            <div class="box-stat">
                <i class="fa-solid fa-wand-magic-sparkles"></i>
                <div class="stat-label">Laboratorium</div>
                <div class="stat-value">8</div>
            </div>

            <div class="box-stat">
                <i class="fa-solid fa-book-bookmark"></i>
                <div class="stat-label">Perpustakaan</div>
                <div class="stat-value">1</div>
            </div>

        </div>
    </div>

    <!-- 4. BAGIAN GALERI FOTO FASILITAS -->
    <div class="card-custom">
        <div class="section-title">Galeri Fasilitas Unggulan</div>
        <div class="grid-galeri">

            <div class="card-galeri">
                <img src="uploads/fasilitas/lapangan-bola.jpg" alt="Lapangan Sepak Bola" onerror="this.src='https://via.placeholder.com/300x180?text=Lapangan+Sepak+Bola';">
                <div class="caption">Lapangan Sepak Bola</div>
            </div>

            <div class="card-galeri">
                <img src="uploads/fasilitas/lab-komputer.jpg" alt="Laboratorium Komputer" onerror="this.src='https://via.placeholder.com/300x180?text=Lab+Komputer';">
                <div class="caption">Laboratorium Komputer</div>
            </div>

            <div class="card-galeri">
                <img src="uploads/fasilitas/aula.jpg" alt="Aula Sekolah" onerror="this.src='https://via.placeholder.com/300x180?text=Aula+Sekolah';">
                <div class="caption">Aula Utama Sekolah</div>
            </div>

            <div class="card-galeri">
                <img src="uploads/fasilitas/bengkel-tkr.jpg" alt="Bengkel TKR" onerror="this.src='https://via.placeholder.com/300x180?text=Bengkel+TKR';">
                <div class="caption">Bengkel Praktik TKR</div>
            </div>
             <div class="card-galeri">
                <img src="uploads/fasilitas/perpus.jpg" alt="Perpustakaan" onerror="this.src='https://via.placeholder.com/300x180?text=Bengkel+TKR';">
                <div class="caption">Perpustakaan Sekolah</div>
            </div>
             <div class="card-galeri">
                <img src="uploads/fasilitas/gv.jpg" alt="Galeri Vokasi" onerror="this.src='https://via.placeholder.com/300x180?text=Bengkel+TKR';">
                <div class="caption">Galeri Vokasi</div>
            </div>
              <div class="card-galeri">
                <img src="uploads/fasilitas/tefa.jpg" alt="Tefa PPLG" onerror="this.src='https://via.placeholder.com/300x180?text=Bengkel+TKR';">
                <div class="caption">Tefa PPLG</div>
            </div>


        </div>
    </div>

</div>

<?php include 'includes/footer.php'; ?>