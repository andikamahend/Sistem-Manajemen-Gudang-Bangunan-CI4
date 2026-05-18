<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

    <!-- Judul Halaman -->
    <h1>Data Barang Bangunan</h1>
    <div class="container1"></div>

    <!-- Form Pencarian -->
    <div class="search-container">
        <form action="/barang/search" method="get">
            <input type="text" name="keyword" placeholder="Cari barang..." class="input" required>
            <button alt="CARI" class="button1" onclick="window.location.href='/barang/create';">
                <i>C</i><i>A</i><i>R</i><i>I</i>
            </button>
        </form>
    </div>

    <!-- Tabel Data Barang -->
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Satuan</th>
                <th>Harga Satuan</th>
                <th>Stok Tersedia</th>
                <th>Tanggal Masuk</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($barang)): ?> <!-- Cek jika data barang tidak kosong -->
                <?php foreach ($barang as $item): ?> <!-- Loop untuk setiap item barang -->
                    <tr>
                        <td><?= $item['id_barang'] ?></td>
                        <td><?= $item['nama_barang'] ?></td>
                        <td><?= $item['kategori'] ?></td>
                        <td><?= $item['satuan'] ?></td>
                        <td><?= $item['harga_satuan'] ?></td>
                        <td><?= $item['stok_tersedia'] ?></td>
                        <td><?= $item['tanggal_masuk'] ?></td>
                        <td>
                            <a href="/barang/edit/<?= $item['id_barang'] ?>">Edit</a> <!-- Link edit -->
                            <a href="/barang/delete/<?= $item['id_barang'] ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a> <!-- Link hapus -->
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?> <!-- Jika data barang kosong -->
                <tr>
                    <td colspan="8">Tidak ada data barang yang sesuai dengan pencarian.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <!-- Tombol Tambah Barang -->
    <div class="container3">
        <button alt="TAMBAH BARANG" class="button1" onclick="window.location.href='/barang/create';">
            <i>T</i><i>A</i><i>M</i><i>B</i><i>A</i><i>H</i><i>&nbsp;</i><i>B</i><i>A</i><i>R</i><i>A</i><i>N</i><i>G</i>
        </button>
    </div>

<?= $this->endSection() ?>
