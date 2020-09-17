<?php

namespace App\Controllers;

use App\Models\BukuModel;

class Buku extends BaseController
{
    protected $sembarang;
    public function __construct()
    {
        $this->sembarang = new BukuModel();
    }
    public function index()
    {
        // $daftarbuku = $this->buku->findAll();
        $data = [
            'judul' => 'Daftar Buku Perpus',
            'daftarbuku' => $this->sembarang->getBuku()
        ];

        return view('daftarbuku/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'judul' => 'Detail Buku',
            'daftarbuku' => $this->sembarang->getBuku($slug)
        ];
        return view('daftarbuku/detail', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'judul' => 'Tambah Data Novel',
            'validation' => \Config\Services::validation()
        ];

        return view('daftarbuku/create', $data);
    }

    public function tambah()
    {
        // validasi input
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[buku.judul]',
                'errors' => [
                    'required' => '{field}  Novel Harus Di isi.',
                    'is_unique' => '{field}  Novel Sudah ada, Silahkan Cari Yang Lain.'
                ]

            ]
        ])) {
            $validation = \Config\Services::Validation();

            return redirect()->to('/Buku/create')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->sembarang->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

        return redirect()->to('/buku');
    }


    public function hapus($id)
    {
        $this->sembarang->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Di Hapus.');
        return redirect()->to('/buku');
    }


    public function edit($slug)
    {
        $data = [
            'judul' => 'Ubah Data Novel',
            'validation' => \Config\Services::validation(),
            'daftarbuku' => $this->sembarang->getBuku($slug)
        ];

        return view('daftarbuku/edit', $data);
    }


    public function update($id)
    {
        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->sembarang->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Di Ubah.');

        return redirect()->to('/buku');
    }
}
