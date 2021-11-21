<?php

namespace App\Controllers;
use App\Models\Kategori;
use App\Models\Katalog;
use App\Models\CustomModel;
class Home extends BaseController
{
	public function __construct()
    {
		$this->kategori = new Kategori();
		$this->katalog = new Katalog();
        helper('form', 'url');
		$this->uri = service('uri');
		$this->perPage = 5;
    }

	public function Index()
	{
		$model = new CustomModel();
		$data['kategori'] = $model->getKategori();
		$data['kontak'] = $model->getKontak();
		
		echo view('Home/index.php', $data);
		
	}

	public function Search()
	{
		$model = new CustomModel();
		$pager=service('pager');
		$query = $this->request->getGet('query');
		
		$page = (int)(($this->request->getGet('page')!==null)?$this->request->getGet('page'):1)-1;
		$perPage = $this->perPage;
		$offset = $perPage * $page;
		$array = ['nama_barang' => $query, 'deskripsi' => $query, 'nama_kategori' => $query, 'nama_merek' => $query];
		$total = count($model->getSearchTotal($array));

		$data['search']= $model->getSearch($array, $perPage, $offset);
		$data['pager'] = $pager->makeLinks($page+1,$perPage,$total, 'custom_template');;
		$data['kategori'] = $model->getKategori();
		$data['kontak'] = $model->getKontak();
		$data['count'] = $total;
		$data['query'] = $query;
		$data['page'] = count($data['search']);
		$data['begin'] = $offset+1;
		$data['end'] = $offset+$perPage;

		echo view('Home/search.php', $data);
		
	}

	public function Products()
	{
		$id_katalog = $this->uri->getSegment(3);
		$model = new CustomModel();
		$data['kategori'] = $model->getKategori();
		$data['kontak'] = $model->getKontak();
		$data['product'] = $model->getProduct($id_katalog);
		echo view('Home/products.php', $data);
	}

	public function Category()
	{
		$model = new CustomModel();
		$pager=service('pager');
		$category = $this->uri->getSegment(3);
		
		$page = (int)(($this->request->getGet('page')!==null)?$this->request->getGet('page'):1)-1;
		$perPage = $this->perPage;
		$offset = $perPage * $page;
		
		$total = count($model->getProCatTotal($category));

		$data['product_category']= $model->getProCat($category, $perPage, $offset);
		$data['pager'] = $pager->makeLinks($page+1,$perPage,$total, 'custom_template');;
		$data['kategori'] = $model->getKategori();
		$data['kontak'] = $model->getKontak();
		$data['count'] = $total;
		$data['query'] = $model->getCategoryID($category);
		$data['page'] = count($data['product_category']);
		$data['begin'] = $offset+1;
		$data['end'] = $offset+$perPage;
		
		echo view('Home/category.php', $data);
	}
}

