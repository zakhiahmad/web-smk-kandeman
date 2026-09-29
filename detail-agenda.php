<?php 
// Load Data Agenda Terpusat
include 'includes/data-agenda.php';
include 'includes/header.php'; 

// Mengambil ID agenda dari URL (Default ke 'tka')
$id = isset($_GET['id']) ? $_GET['id'] : 'tka';

// Ambil data sesuai parameter id, jika tidak ada fallback ke 'tka'
$agenda = isset($data_agenda[$id]) ? $data_agenda[$id] : $data_agenda['tka'];
?>

<style>
    .detail-container {
        max-width: 850px;
        margin: 30px auto 60px auto;
        padding: 0 20px;
        font-family: Arial, sans-serif;
    }

    .btn-back {
        display: inline-block;
        color: #2563eb;
        font-weight: bold;
        text-decoration: none;
        margin-bottom: 20px;
        font-size: 0.95rem;
    }

    .btn-back:hover {
        text-decoration: underline;
    }

    .detail-card {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
    }

    .detail-banner img {
        width: 100%;
        max-height: 300px;
        object-fit: cover;
        display: block;
    }

    .detail-body {
        padding: 30px;
    }

    .detail-title {
        font-size: 1.3rem;
        color: #0f172a;
        font-weight: bold;
        margin: 0 0 10px 0;
        line-height: 1.4;
    }

    .detail-desc {
        color: #64748b;
        font-size: 0.95rem;
        margin-bottom: 25px;
        line-height: 1.6;
    }

    /* TABEL DETAIL */
    .detail-table {
        width: 100%;
        border-collapse: collapse;
    }

    .detail-table tr:nth-child(odd) {
        background-color: #f8fafc;
    }

    .detail-table td {
        padding: 14px 18px;
        font-size: 0.9rem;
        border-bottom: 1px solid #f1f5f9;
    }

    .detail-table td.label {
        width: 30%;
        color: #64748b;
    }

    .detail-table td.value {
        width: 70%;
        color: #0f172a;
        font-weight: bold;
    }
</style>

<div class="detail-container">

    <a href="agenda.php" class="btn-back">&larr; Kembali ke Semua Agenda</a>

    <div class="detail-card">
        <div class="detail-banner">
            <img src="<?= $agenda['gambar']; ?>" alt="Banner Agenda" onerror="this.src='https://via.placeholder.com/800x300?text=Informasi+Agenda+Ujian+SMKN+1+Kandeman'">
        </div>

        <div class="detail-body">
            <h1 class="detail-title"><?= $agenda['judul']; ?></h1>
            <p class="detail-desc"><?= $agenda['deskripsi']; ?></p>

            <table class="detail-table">
                <tr>
                    <td class="label">Tanggal</td>
                    <td class="value"><?= $agenda['tanggal']; ?></td>
                </tr>
                <tr>
                    <td class="label">Tempat</td>
                    <td class="value"><?= $agenda['tempat']; ?></td>
                </tr>
                <tr>
                    <td class="label">Jam</td>
                    <td class="value"><?= $agenda['jam']; ?></td>
                </tr>
                <tr>
                    <td class="label">Pengirim / Penyelenggara</td>
                    <td class="value"><?= $agenda['penyelenggara']; ?></td>
                </tr>
            </table>
        </div>
    </div>

</div>

<?php include 'includes/footer.php'; ?>