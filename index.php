<?php include 'includes/header.php';
include 'includes/data-berita.php'; ?>

<!-- HERO BANNER SECTION -->
<section style="
    position: relative;
    background: linear-gradient(rgba(15, 23, 42, 0.75), rgba(15, 23, 42, 0.75)), url('uploads/hero-bg.jpg') center/cover no-repeat;
    padding: 100px 20px 80px 20px;
    text-align: center;
    color: #ffffff;
">
    <div style="max-width: 800px; margin: 0 auto;">
        <!-- Logo Sekolah di Banner -->
        <img src="uploads/logo-smk.png" alt="Logo SMKN 1 Kandeman" style="width: 90px; height: auto; margin-bottom: 20px;" onerror="this.style.display='none';">

        <!-- Sub-Judul Kursif -->
        <p style="font-family: 'Georgia', serif; font-style: italic; font-size: 1.5rem; color: #cbd5e1; margin-bottom: 5px;">
            SMK Pusat Keunggulan
        </p>

        <!-- Judul Utama -->
        <h1 style="font-size: 2.8rem; font-weight: 800; text-transform: capitalize letter-spacing 1px; margin: 0 0 15px 0; text-shadow: 0 2px 4px rgba(0,0,0,0.5);">
            SMK Negeri 1 Kandeman
        </h1>

        <!-- Slogan Sekolah -->
        <p style="font-size: 1.15rem; color: #e2e8f0; font-weight: 300; margin: 0;">
            Mengukir sejarah Generasi Berakhlak Mulia
        </p>
    </div>
</section>

<!-- SECTION QUICK LINKS / LAYANAN DIGITAL -->
<div class="container" style="max-width: 1100px; margin: -50px auto 40px auto; padding: 0 20px; position: relative; z-index: 10;">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px;">
        
        <!-- CARD 1: PROGRAM -->
        <a href="kurikulum.php" style="text-decoration: none; color: inherit;">
            <div style="background: #ffffff; padding: 28px 20px; border-radius: 12px; border: 1px solid #f1f5f9; box-shadow: 0 10px 25px -5px rgba(0,0,0,0.05); text-align: center; height: 100%; transition: all 0.2s ease-in-out;" onmouseover="this.style.transform='translateY(-4px)'; this.style.borderColor='#cbd5e1';" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='#f1f5f9';">
                <div style="width: 48px; height: 48px; margin: 0 auto 16px auto; background: #eff6ff; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                    <img src="assets/icons/program.png" alt="Program" style="width: 28px; height: 28px; object-fit: contain;">
                </div>
                <h3 style="font-size: 1.05rem; font-weight: 700; color: #0f172a; margin: 0 0 6px 0;">Program</h3>
                <p style="font-size: 0.825rem; color: #64748b; margin: 0; line-height: 1.4;">Kurikulum & Program Keahlian</p>
            </div>
        </a>

        <!-- CARD 2: BKK -->
        <a href="https://www.instagram.com/bkk_smkn1kandeman/" target="_blank" style="text-decoration: none; color: inherit;">
            <div style="background: #ffffff; padding: 28px 20px; border-radius: 12px; border: 1px solid #f1f5f9; box-shadow: 0 10px 25px -5px rgba(0,0,0,0.05); text-align: center; height: 100%; transition: all 0.2s ease-in-out;" onmouseover="this.style.transform='translateY(-4px)'; this.style.borderColor='#cbd5e1';" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='#f1f5f9';">
                <div style="width: 48px; height: 48px; margin: 0 auto 16px auto; background: #ecfdf5; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                    <img src="assets/icons/bkk.png" alt="BKK" style="width: 28px; height: 28px; object-fit: contain;">
                </div>
                <h3 style="font-size: 1.05rem; font-weight: 700; color: #0f172a; margin: 0 0 6px 0;">Bursa Kerja (BKK)</h3>
                <p style="font-size: 0.825rem; color: #64748b; margin: 0; line-height: 1.4;">Info Lowongan & Karir Alumni</p>
            </div>
        </a>

        <!-- CARD 3: INFO PRESTASI -->
        <a href="prestasi.php" style="text-decoration: none; color: inherit;">
            <div style="background: #ffffff; padding: 28px 20px; border-radius: 12px; border: 1px solid #f1f5f9; box-shadow: 0 10px 25px -5px rgba(0,0,0,0.05); text-align: center; height: 100%; transition: all 0.2s ease-in-out;" onmouseover="this.style.transform='translateY(-4px)'; this.style.borderColor='#cbd5e1';" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='#f1f5f9';">
                <div style="width: 48px; height: 48px; margin: 0 auto 16px auto; background: #fffbeb; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                    <img src="assets/icons/prestasi.png" alt="Prestasi" style="width: 28px; height: 28px; object-fit: contain;">
                </div>
                <h3 style="font-size: 1.05rem; font-weight: 700; color: #0f172a; margin: 0 0 6px 0;">Info Prestasi</h3>
                <p style="font-size: 0.825rem; color: #64748b; margin: 0; line-height: 1.4;">Rekapitulasi Kejuaraan Siswa</p>
            </div>
        </a>

        <!-- CARD 4: PPDB JATENG -->
        <a href="https://spmb.jatengprov.go.id/" target="_blank" style="text-decoration: none; color: inherit;">
            <div style="background: #ffffff; padding: 28px 20px; border-radius: 12px; border: 1px solid #f1f5f9; box-shadow: 0 10px 25px -5px rgba(0,0,0,0.05); text-align: center; height: 100%; transition: all 0.2s ease-in-out;" onmouseover="this.style.transform='translateY(-4px)'; this.style.borderColor='#cbd5e1';" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='#f1f5f9';">
                <div style="width: 48px; height: 48px; margin: 0 auto 16px auto; background: #fef2f2; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                    <img src="assets/icons/ppdb.png" alt="PPDB Jateng" style="width: 28px; height: 28px; object-fit: contain;">
                </div>
                <h3 style="font-size: 1.05rem; font-weight: 700; color: #0f172a; margin: 0 0 6px 0;">PPDB Jateng</h3>
                <p style="font-size: 0.825rem; color: #64748b; margin: 0; line-height: 1.4;">Info Pendaftaran Siswa Baru</p>
            </div>
        </a>

    </div>
</div>

<!-- SAMBUTAN KEPALA SEKOLAH -->
<section class="section" style="background: #fff; padding: 60px 0;">
    <div class="container">
        <div class="grid-2" style="align-items: center; gap: 40px;">
            <div class="kepsek-img">
                <img src="uploads/kepsek.jpg" alt="Kepala SMKN 1 Kandeman" style="width: 100%; height: 380px; object-fit: contain; background: #f1f5f9; border-radius: 12px; box-shadow: 0 10px 25px rgba(0,0,0,0.1);" onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=600&q=80';">
            </div>
            <div>
                <span class="news-tag" style="background: #e0e7ff; color: #4338ca; font-weight: 600; padding: 4px 12px; border-radius: 4px; font-size: 0.8rem;">SAMBUTAN KEPALA SEKOLAH</span>
                <h2 style="margin: 12px 0 15px; color: #0f172a; font-size: 1.8rem;">SETIYANTO, S.Pd., M.Pd.</h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    "Berkat rahmat dan karunia Tuhan Yang Maha Esa, website SMK Negeri 1 Kandeman Kabupaten Batang akhirnya dapat dibangun. Tujuan pembangunan website sekolah ini adalah untuk memperkenalkan, memberikan kemudahan, dan memberikan wawasan kepada masyarakat tentang SMK Negeri 1 Kandeman."
                </p>
                <a href="sambutan.php" style="color: #2563eb; text-decoration: none; font-weight: 600; font-size: 0.95rem;">Baca Sambutan Selengkapnya →</a>
            </div>
        </div>
    </div>
</section>

<!-- PROGRAM UNGGULAN SEKOLAH -->
<section style="padding: 60px 0; background: #ffffff;">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 20px;">
        
        <div style="text-align: center; margin-bottom: 40px;">
            <h2 style="font-size: 2rem; font-weight: 700; color: #0f172a; margin: 0;">Program Unggulan</h2>
            <p style="color: #64748b; margin-top: 5px;">Menghubungkan Dunia Pendidikan dengan Dunia Industri</p>
        </div>

        <!-- GRID BANNER KELAS INDUSTRI & TEFA -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 20px; margin-bottom: 20px;">
            
            <!-- CARD KELAS INDUSTRI -->
            <div style="
                position: relative; 
                height: 280px; 
                border-radius: 12px; 
                overflow: hidden; 
                background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('uploads/kelas-industri.jpg') center/cover no-repeat;
                display: flex; 
                flex-direction: column; 
                justify-content: center; 
                padding: 30px; 
                color: #fff;
            ">
                <h3 style="font-size: 2rem; font-weight: 800; margin: 0 0 10px 0;">Kelas Industri</h3>
                <a href="kurikulum.php" style="color: #ffffff; text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; gap: 8px;">
                     <i class="fa-regular fa-circle-right"></i>
                </a>
            </div>

            <!-- CARD TEACHING FACTORY -->
            <div style="
                position: relative; 
                height: 280px; 
                border-radius: 12px; 
                overflow: hidden; 
                background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('uploads/tefa.jpg') center/cover no-repeat;
                display: flex; 
                flex-direction: column; 
                justify-content: center; 
                padding: 30px; 
                color: #fff;
            ">
                <h3 style="font-size: 2rem; font-weight: 800; margin: 0 0 10px 0;">Teaching Factory</h3>
                <a href="kurikulum.php" style="color: #ffffff; text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; gap: 8px;">
                     <i class="fa-regular fa-circle-right"></i>
                </a>
            </div>

        </div>

        <!-- CARD BURSA KERJA KHUSUS (BKK) -->
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 25px 30px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
            <div>
                <h4 style="font-size: 1.3rem; font-weight: 700; color: #0f172a; margin: 0 0 5px 0;">Bursa Kerja Khusus (BKK)</h4>
                <p style="color: #64748b; margin: 0; font-size: 0.95rem;">Wadah penyaluran tenaga kerja lulusan langsung ke industri mitra.</p>
            </div>
            <a href="https://www.instagram.com/bkk_smkn1kandeman/" target="_blank" style="background: #2563eb; color: #fff; padding: 10px 20px; border-radius: 8px; text-decoration: none; font-weight: 600; font-size: 0.9rem;">
                Kunjungi Portal BKK
            </a>
        </div>

    </div>
</section>

<!-- SECTION REKANAN INDUSTRI -->
<section style="padding: 60px 0; background: #f8fafc; border-top: 1px solid #e2e8f0;">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 20px; text-align: center;">
        
        <h2 style="font-size: 2rem; font-weight: 700; color: #0f172a; margin: 0 0 15px 0;">50+ Rekanan Industri</h2>
        <p style="color: #475569; max-width: 800px; margin: 0 auto 40px auto; font-size: 0.95rem; line-height: 1.6;">
            Meningkatkan kompetensi peserta didik dengan menghadirkan pembelajaran berstandar industri. Lebih dari 50 perusahaan telah bekerja sama dengan SMK Negeri 1 Kandeman dalam berbagai macam program termasuk rekrutmen tenaga kerja.
        </p>
        
        <!-- GRID LOGO MITRA TERSTANDARISASI -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 20px; align-items: center; justify-items: center;">
            
            <div style="width: 100%; height: 90px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 15px; display: flex; align-items: center; justify-content: center; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
                <img src="uploads/mitra/pln.png" alt="PLN Icon Plus" style="max-width: 100%; max-height: 100%; object-fit: contain;" onerror="this.src='https://via.placeholder.com/150x50?text=PLN+Icon+Plus';">
            </div>

            <div style="width: 100%; height: 90px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 15px; display: flex; align-items: center; justify-content: center; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
                <img src="uploads/mitra/aski.png" alt="ASKI" style="max-width: 100%; max-height: 100%; object-fit: contain;" onerror="this.src='https://via.placeholder.com/150x50?text=ASKI';">
            </div>

            <div style="width: 100%; height: 90px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 15px; display: flex; align-items: center; justify-content: center; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
                <img src="uploads/mitra/honda.png" alt="Honda" style="max-width: 100%; max-height: 100%; object-fit: contain;" onerror="this.src='https://via.placeholder.com/150x50?text=HONDA';">
            </div>

            <div style="width: 100%; height: 90px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 15px; display: flex; align-items: center; justify-content: center; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
                <img src="uploads/mitra/astra.png" alt="Astra Otoparts" style="max-width: 100%; max-height: 100%; object-fit: contain;" onerror="this.src='https://via.placeholder.com/150x50?text=Astra+Otoparts';">
            </div>

        </div>
    </div>
</section>

<!-- BERITA & PENGUMUMAN TERKINI -->
<section class="section" style="background: #fff; padding: 60px 0;">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 40px;">
            <h2 style="color: #0f172a; font-size: 1.8rem;">Berita & Pengumuman Terkini</h2>
            <p style="color: #64748b;">Informasi dan Liputan Kegiatan SMK Negeri 1 Kandeman</p>
        </div>

        <div class="news-grid">
            <?php 
            $berita_beranda = array_slice($semua_berita, 0, 3);
            foreach ($berita_beranda as $data): 
            ?>
                <div class="news-card">
                    <a href="detail-berita.php?id=<?= $data['id']; ?>">
                        <img src="<?= $data['gambar']; ?>" alt="<?= $data['judul']; ?>" style="width: 100%; height: 180px; object-fit: fill;">
                    </a>
                    <div class="news-body">
                        <span class="news-tag"><?= $data['kategori']; ?></span>
                        <h3 style="margin-top: 10px;">
                            <a href="detail-berita.php?id=<?= $data['id']; ?>" style="text-decoration: none; color: inherit;">
                                <?= $data['judul']; ?>
                            </a>
                        </h3>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div style="text-align: center; margin-top: 30px;">
            <a href="berita.php" class="btn-primary" style="display: inline-block; padding: 10px 24px; background: #2563eb; color: #fff; text-decoration: none; border-radius: 6px; font-weight: bold;">Lihat Semua Berita</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>