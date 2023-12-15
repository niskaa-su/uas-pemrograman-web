<?php

namespace App\Controllers;

class Pemesanan extends BaseController
{
    public function index()
    {
        return view('Pemesanan');
    }
    public function submitPesanan()
    {
    $data = [
        'nama_pemesan' => $this->request->getPost('nama_pemesan'),
        'tanggal_keberangkatan' => $this->request->getPost('tanggal_keberangkatan'),
        'tujuan' => $this->request->getPost('tujuan'),
    ];

    // Validasi data pesanan (sesuaikan dengan kebutuhan Anda)
    if (!$this->validate([
        'nama_pemesan' => 'required',
        'tanggal_keberangkatan' => 'required',
        'tujuan' => 'rrequired',
    ])) {
        return redirect()->to('/pemesanan')->withInput()->with('errors', service('validation')->getErrors());
    }

    // Proses data pesanan sesuai kebutuhan aplikasi
    // Misalnya, kirim email konfirmasi atau simpan data pesanan dalam array atau objek.

    // Redirect ke halaman sukses atau halaman lain sesuai kebutuhan
    return redirect()->to('Pemesanan');
}
}