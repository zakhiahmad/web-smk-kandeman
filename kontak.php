<?php include 'includes/header.php'; ?>

<!-- CDN FontAwesome untuk Ikon Sosial Media & Kontak -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    .kontak-wrapper {
        background-color: #f8fafc;
        padding: 50px 20px;
        font-family: Arial, sans-serif;
        min-height: 80vh;
    }

    .kontak-container {
        max-width: 1100px;
        margin: 0 auto;
    }

    /* HEADER HALAMAN */
    .kontak-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .kontak-header h2 {
        font-size: 2rem;
        font-weight: bold;
        color: #0f172a;
        margin: 0 0 10px 0;
    }

    .kontak-header p {
        color: #64748b;
        font-size: 1rem;
        margin: 0;
    }

    /* GRID 2 KOLOM */
    .kontak-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 25px;
    }

    /* CARD KIRI: INFORMASI KONTAK */
    .kontak-card {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        padding: 30px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.03);
    }

    .kontak-section-title {
        font-size: 1.1rem;
        font-weight: bold;
        color: #0f172a;
        margin: 0 0 12px 0;
    }

    .kontak-text {
        color: #475569;
        font-size: 0.95rem;
        line-height: 1.6;
        margin: 0 0 25px 0;
    }

    .kontak-list {
        list-style: none;
        padding: 0;
        margin: 0 0 25px 0;
    }

    .kontak-list li {
        color: #475569;
        font-size: 0.95rem;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
    }

    .kontak-list li strong {
        color: #0f172a;
    }

    .kontak-list a {
        color: #2563eb;
        text-decoration: none;
        font-weight: bold;
    }

    .kontak-list a:hover {
        text-decoration: underline;
    }

    /* MEDIA SOSIAL LIST */
    .sosmed-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .sosmed-list li {
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 0.95rem;
        color: #475569;
    }

    .sosmed-list i {
        font-size: 1.2rem;
        width: 20px;
        text-align: center;
    }

    .sosmed-list i.fa-instagram { color: #e1306c; }
    .sosmed-list i.fa-youtube { color: #ff0000; }
    .sosmed-list i.fa-facebook { color: #1877f2; }

    .sosmed-list a {
        color: #2563eb;
        text-decoration: none;
    }

    .sosmed-list a:hover {
        text-decoration: underline;
    }

    /* CARD KANAN: MAPS */
    .map-card {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.03);
        height: 100%;
        min-height: 400px;
    }

    .map-card iframe {
        width: 100%;
        height: 100%;
        min-height: 420px;
        border: 0;
    }

    /* RESPONSIVE UNTUK HP */
    @media (max-width: 768px) {
        .kontak-grid {
            grid-template-columns: 1fr;
        }
        .map-card iframe {
            height: 300px;
        }
    }
</style>

<div class="kontak-wrapper">
    <div class="kontak-container">
        
        <!-- Header -->
        <div class="kontak-header">
            <h2>Kontak & Lokasi Sekolah</h2>
            <p>Hubungi Kami untuk Informasi Lebih Lanjut</p>
        </div>

        <div class="kontak-grid">
            
            <!-- Kolom Kiri: Info Alamat & Kontak -->
            <div class="kontak-card">
                
                <!-- Alamat -->
                <div class="kontak-section-title">Alamat Sekolah</div>
                <p class="kontak-text">
                   Jl. Raya Kandeman KM. 04 Kecamatan Kandeman, Kabupaten Batang, Jawa Tengah 51261

                <!-- Hubungi Kami -->
                <div class="kontak-section-title">Hubungi Kami</div>
                <ul class="kontak-list">
                    <li>Telepon: (0285) 392274</li>
                    <li style="margin-top: 6px;">
                        WhatsApp Resmi:&nbsp;<a href="https://wa.me/6281234567890" target="_blank">+62 812-3456-7890</a>
                    </li>
                    <li style="margin-top: 6px;">
                        Email:&nbsp;<a href="mailto:smkn1kandeman@yahoo.com">smkn1kandeman@yahoo.com</a>
                    </li>
                </ul>

                <!-- Media Sosial -->
                <div class="kontak-section-title">Media Sosial</div>
                <ul class="sosmed-list">
                    <li>
                        <i class="fa-brands fa-instagram"></i>
                        Instagram:&nbsp;<a href="https://www.instagram.com/smkn1.kandeman" target="_blank">@smkn1.kandeman</a>
                    </li>
                    <li>
                        <i class="fa-brands fa-youtube"></i>
                        YouTube:&nbsp;<a href="https://www.youtube.com/@SMKN1KANDEMAN" target="_blank">@SMKN1KANDEMAN</a>
                    </li>
                    <li>
                        <i class="fa-brands fa-facebook"></i>
                        Facebook:&nbsp;<a href="https://www.facebook.com/share/1F5v8ruw8u/" target="_blank">Smk Negeri 1 Kandeman</a>
                    </li>
                </ul>

            </div>

            <!-- Kolom Kanan: Google Maps -->
            <div class="map-card">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1218.3814103580105!2d109.76491147647951!3d-6.925637871761071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e703caa2cbcaa91%3A0xc8afa98d72fb9c0c!2sSMK%20Negeri%201%20Kandeman!5e1!3m2!1sid!2sid!4v1789452068630!5m2!1sid!2sid" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

        </div>

    </div>
</div>

<?php include 'includes/footer.php'; ?>