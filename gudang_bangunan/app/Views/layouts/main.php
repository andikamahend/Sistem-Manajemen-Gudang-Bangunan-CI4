<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <title>Management Barang bangunan</title>
</head>
<body>
    <header style="display: flex; align-items: center; padding: 10px; background-color: #f8f9fa; border-bottom: 1px solid #ddd;">
        <img src="<?= base_url('images/logo.png') ?>" alt="Logo" style="height: 50px; margin-right: 15px;">
        <h1 style="margin: 0;"><?= $title ?? 'Manajement Barang Bangunan' ?></h1>
    </header>
    <main style="padding: 20px;">
        <?= $this->renderSection('content') ?>
    </main>
</body>
</html>
