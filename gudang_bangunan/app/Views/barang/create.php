<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="container">
    <h1>Tambah Barang</h1>
    <form action="/barang/store" method="post">
        <?= csrf_field() ?> <!-- Melindungi form dari serangan CSRF -->
        
        <!-- Input Nama Barang -->
        <div class="form-group">
            <label for="nama_barang">Nama Barang:</label>
            <input type="text" name="nama_barang" class="input1" id="nama_barang" required>
        </div>
        
        <!-- Dropdown Kategori Barang -->
        <div class="form-group">
            <label for="kategori">Kategori:</label>
            <select class="custom-select" name="kategori" id="kategori" required>
                <option value="semen">Semen</option>
                <option value="cat">Cat</option>
                <option value="kayu">Kayu</option>
            </select>
        </div>
        
        <!-- Dropdown Satuan Barang -->
        <div class="form-group">
            <label for="satuan">Satuan:</label>
            <select class="custom-select" name="satuan" id="satuan" required>
                <option value="kg">Kg</option>
                <option value="liter">Liter</option>
                <option value="meter">Meter</option>
            </select>
        </div>
        
        <!-- Input Harga Satuan -->
        <div class="form-group">
            <label for="harga_satuan">Harga Satuan:</label>
            <input type="number" name="harga_satuan" class="input1" id="harga_satuan" step="0.01" required>
        </div>
        
        <!-- Input Stok Tersedia -->
        <div class="form-group">
            <label for="stok_tersedia">Stok Tersedia:</label>
            <input type="number" name="stok_tersedia" class="input1" id="stok_tersedia" step="0.01" required>
        </div>
        
        <!-- Input Tanggal Masuk -->
        <div class="form-group">
            <label for="tanggal_masuk">Tanggal Masuk:</label>
            <input type="date" name="tanggal_masuk" class="input1" id="tanggal_masuk" required>
        </div>
        
        <!-- Tombol Submit -->
        <button alt="SIMPAN" class="button1" type="submit">
            <i>S</i><i>I</i><i>M</i><i>P</i><i>A</i><i>N</i>
        </button>
    </form>
</div>

<?= $this->endSection() ?>
