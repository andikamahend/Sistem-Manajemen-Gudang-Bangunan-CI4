<?php

namespace App\Controllers;

use App\Models\BarangModel;

// Controller untuk mengelola data barang
class Barang extends BaseController
{
    // Menampilkan semua data barang dalam tabel
    public function tabel_barang()
    {
        $model = new BarangModel(); 
        $data['barang'] = $model->findAll(); 
        return view('barang/tabel_barang', $data); 
    }

    // Menampilkan form untuk menambahkan data barang
    public function create()
    {
        return view('barang/create');
    }

    // Menyimpan data barang baru ke database
    public function store()
    {
        $model = new BarangModel();
        $data = [
            'nama_barang' => $this->request->getPost('nama_barang'),
            'kategori' => $this->request->getPost('kategori'),
            'satuan' => $this->request->getPost('satuan'),
            'harga_satuan' => $this->request->getPost('harga_satuan'),
            'stok_tersedia' => $this->request->getPost('stok_tersedia'),
            'tanggal_masuk' => $this->request->getPost('tanggal_masuk'),
        ];
        $model->insert($data); 
        return redirect()->to('/barang'); 
    }

    // Menampilkan form untuk mengedit data barang
    public function edit($id)
    {
        $model = new BarangModel();
        $data['barang'] = $model->find($id); 
        return view('barang/edit', $data); 
    }

    // Memperbarui data barang di database
    public function update($id)
    {
        $model = new BarangModel();
        $data = [
            'nama_barang' => $this->request->getPost('nama_barang'),
            'kategori' => $this->request->getPost('kategori'),
            'satuan' => $this->request->getPost('satuan'),
            'harga_satuan' => $this->request->getPost('harga_satuan'),
            'stok_tersedia' => $this->request->getPost('stok_tersedia'),
            'tanggal_masuk' => $this->request->getPost('tanggal_masuk'),
        ];
        $model->update($id, $data); 
        return redirect()->to('/barang'); 
    }

    // Menghapus data barang dari database
    public function delete($id)
    {
        $model = new BarangModel();
        $model->delete($id); 
        return redirect()->to('/barang'); 
    }

    // Mencari data barang berdasarkan keyword
    public function search()
    {
        $keyword = $this->request->getGet('keyword'); // Mengambil keyword dari input pencarian
        $model = new BarangModel();
        $data['barang'] = $model->like('nama_barang', $keyword)
                                ->orLike('kategori', $keyword)
                                ->findAll(); // Mencari data berdasarkan nama barang atau kategori
        return view('barang/index', $data); // Menampilkan hasil pencarian
    }
}
