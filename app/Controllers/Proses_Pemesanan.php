<?php

namespace App\Controllers;

class Proses_Pemesanan extends BaseController
{
    public function index()
    {
        return view('Proses_Pemesanan');
    }
    public function submitPesanan()
    {
    $data = [
        'nama_pemesan' => $this->request->getPost('nama_pemesan'),
        'jumlah' => $this->request->getPost('jumlah'),
        'total_harga' => $this->request->getPost('total_harga'),
    ];

    // Validasi data pesanan (sesuaikan dengan kebutuhan Anda)
    if (!$this->validate([
        'nama_pemesan' => 'required',
        'jumlah' => 'required|numeric',
        'total_harga' => 'required|numeric',
    ])) {
        return redirect()->to('/pemesanan')->withInput()->with('errors', service('validation')->getErrors());
    }

    // Proses data pesanan sesuai kebutuhan aplikasi
    // Misalnya, kirim email konfirmasi atau simpan data pesanan dalam array atau objek.

    // Redirect ke halaman sukses atau halaman lain sesuai kebutuhan
    return redirect()->to('Pemesanan');
}
}