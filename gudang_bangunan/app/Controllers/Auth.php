<?php

namespace App\Controllers;

use App\Models\UserModel;

// Controller untuk mengelola otentikasi pengguna
class Auth extends BaseController
{
    // Menampilkan form login
    public function login()
    {
        return view('auth/login');
    }

    // Memproses login
    public function processLogin()
    {
        // Mendapatkan data username dan password dari form
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Membuat instance dari UserModel
        $userModel = new \App\Models\UserModel();
        $user = $userModel->where('username', $username)->first();

        // Mengecek apakah pengguna ditemukan
        if ($user) {
            // Verifikasi password
            if (password_verify($password, $user['password'])) {
                // Jika login berhasil, set session
                session()->set('isLoggedIn', true);
                session()->set('user_id', $user['id']);
                return redirect()->to('/barang'); // Redirect ke halaman barang
            } else {
                // Jika password salah
                return redirect()->back()->with('error', 'Password salah.');
            }
        } else {
            // Jika username tidak ditemukan
            return redirect()->back()->with('error', 'Username tidak ditemukan.');
        }
    }

    // Logout pengguna
    public function logout()
    {
        session()->destroy(); // Menghapus semua data session
        return redirect()->to('/login'); // Redirect ke halaman login
    }

    // Menampilkan form registrasi
    public function register()
    {
        return view('auth/register');
    }

    // Memproses registrasi pengguna baru
    public function processRegister()
    {
        // Mendapatkan input dari form
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $confirmPassword = $this->request->getPost('confirm_password');

        // Validasi apakah password dan konfirmasi password cocok
        if ($password !== $confirmPassword) {
            return redirect()->back()->with('error', 'Password dan konfirmasi password tidak cocok.');
        }

        $userModel = new UserModel();

        // Mengecek apakah username sudah terdaftar
        if ($userModel->where('username', $username)->first()) {
            return redirect()->back()->with('error', 'Username sudah terdaftar.');
        }

        // Menyimpan pengguna baru ke database dengan password yang di-hash
        $userModel->save([
            'username' => $username,
            'password' => password_hash($password, PASSWORD_BCRYPT),
        ]);

        // Redirect ke halaman login dengan pesan sukses
        return redirect()->to('/login')->with('success', 'Registrasi berhasil. Silakan login.');
    }
}
