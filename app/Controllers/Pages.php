<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		$data = [
			'judul' => 'Halaman Home',
			'tes' => ['satu', 'dua', 'tiga']
		];
		return view('pages/home', $data);
	}

	public function about()
	{
		$data = [
			'judul' => 'Halaman About Me'
		];

		return view('pages/about', $data);
	}

	public function kontak()
	{
		$data = [
			'judul' => 'Halaman kontak saya',
			'alamat' => [
				[
					'tipe' => 'rumah',
					'alamat' => 'Sowan Lor',
					'kota' => 'Jepara'
				],
				[
					'tipe' => 'Tenagh Kota',
					'alamat' => 'apartemen',
					'kota' => '500 Juta'
				]
			]
		];

		return view('pages/kontak', $data);
	}


	//--------------------------------------------------------------------

}
