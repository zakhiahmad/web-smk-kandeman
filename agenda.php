<?php 
include 'includes/header.php'; 
include 'includes/data-agenda.php'; // Panggil data terpusat
?>

<!-- CDN FontAwesome untuk Ikon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    .agenda-container {
        max-width: 900px;
        margin: 40px auto;
        padding: 0 20px;
        font-family: Arial, sans-serif;
        min-height: 70vh;
    }

    .section-title {
        font-size: 1.5rem;
        font-weight: bold;
        color: #1e293b;
        margin-bottom: 25px;
        border-bottom: 3px solid #2563eb;
        display: inline-block;
        padding-bottom: 5px;
    }

    .section-title span {
        color: #64748b;
        font-weight: normal;
    }

    .agenda-list {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .agenda-item {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        padding: 20px;
        text-decoration: none;
        box-shadow: 0 2px 4px rgba(0,0,0,0.02);
        transition: transform 0.2s, box-shadow 0.2s;
        display: block;
    }

    .agenda-item:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(0,0,0,0.08);
    }

    .agenda-item-title {
        color: #1d4ed8;
        font-size: 1.05rem;
        font-weight: bold;
        margin: 0 0 12px 0;
        text-transform: uppercase;
        line-height: 1.4;
    }

    .agenda-item-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        font-size: 0.85rem;
        color: #64748b;
    }

    .agenda-item-meta span {
        display: flex;
        align-items: center;
        gap: 6px;
    }
</style>

<div class="agenda-container">
    <div class="section-title">SEMUA <span>AGENDA</span></div>

    <div class="agenda-list">
        <!-- Looping data agenda dari array data-agenda.php -->
        <?php foreach ($data_agenda as $key => $a) : ?>
            <a href="detail-agenda.php?id=<?= $key; ?>" class="agenda-item">
                <h3 class="agenda-item-title"><?= $a['judul']; ?></h3>
                <div class="agenda-item-meta">
                    <span><i class="fa-regular fa-calendar"></i> <?= $a['tanggal']; ?></span>
                    <span><i class="fa-solid fa-location-dot"></i> <?= $a['tempat']; ?></span>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>