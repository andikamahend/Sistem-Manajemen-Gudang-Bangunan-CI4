<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<body>
    <div class="container">
        <h1>Edit Barang</h1>
        <form action="/barang/update/<?= $barang['id_barang'] ?>" method="post">
            <?= csrf_field() ?> <!-- Melindungi form dari serangan CSRF -->

            <!-- Input Nama Barang -->
            <div class="form-group">
                <label for="nama_barang">Nama Barang:</label>
                <input type="text" name="nama_barang" id="nama_barang" value="<?= $barang['nama_barang'] ?>" class="input1" required>
            </div>

            <!-- Dropdown Kategori -->
            <div class="form-group">
                <label for="kategori">Kategori:</label>
                <select class="custom-select" name="kategori" id="kategori" required>
                    <option value="semen" <?= $barang['kategori'] === 'semen' ? 'selected' : '' ?>>Semen</option>
                    <option value="cat" <?= $barang['kategori'] === 'cat' ? 'selected' : '' ?>>Cat</option>
                    <option value="kayu" <?= $barang['kategori'] === 'kayu' ? 'selected' : '' ?>>Kayu</option>
                </select>
            </div>

            <!-- Dropdown Satuan -->
            <div class="form-group">
                <label for="satuan">Satuan:</label>
                <select class="custom-select" name="satuan" id="satuan" required>
                    <option value="kg" <?= $barang['satuan'] === 'kg' ? 'selected' : '' ?>>Kg</option>
                    <option value="liter" <?= $barang['satuan'] === 'liter' ? 'selected' : '' ?>>Liter</option>
                    <option value="meter" <?= $barang['satuan'] === 'meter' ? 'selected' : '' ?>>Meter</option>
                </select>
            </div>

            <!-- Input Harga Satuan -->
            <div class="form-group">
                <label for="harga_satuan">Harga Satuan:</label>
                <input type="number" name="harga_satuan" id="harga_satuan" value="<?= $barang['harga_satuan'] ?>" class="input1" step="0.01" required>
            </div>

            <!-- Input Stok Tersedia -->
            <div class="form-group">
                <label for="stok_tersedia">Stok Tersedia:</label>
                <input type="number" name="stok_tersedia" id="stok_tersedia" value="<?= $barang['stok_tersedia'] ?>" class="input1" required>
            </div>

            <!-- Input Tanggal Masuk -->
            <div class="form-group">
                <label for="tanggal_masuk">Tanggal Masuk:</label>
                <input type="date" name="tanggal_masuk" id="tanggal_masuk" value="<?= $barang['tanggal_masuk'] ?>" class="input1" required>
            </div>

            <!-- Tombol Submit -->
            <button alt="UPDATE" class="button1" type="submit">
                <i>U</i><i>P</i><i>D</i><i>A</i><i>T</i><i>E</i>
            </button>
        </form>
    </div>
<?= $this->endSection() ?>
