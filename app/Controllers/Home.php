<?php

namespace App\Controllers;
use App\Models\Kategori;
use App\Models\CustomModel;
class Home extends BaseController
{
	public function __construct()
    {
		$this->kategori = new Kategori();
        helper('form', 'url');
    }

	public function index()
	{
		$model = new CustomModel();
		$data['kategori'] = $this->kategori->findAll();
		$data['kontak'] = $model->getKontak();
		echo view('Home/index.php', $data);
	}

	public function search()
	{
		$query = $this->request->getGet('query');
		
		echo view('Home/search.php', $data);
	}
}

