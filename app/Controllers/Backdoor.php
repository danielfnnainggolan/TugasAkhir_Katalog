<?php

namespace App\Controllers;
use App\Models\Admin;
use App\Models\Katalog;
use App\Models\Kategori;
use App\Models\CustomModel;
use App\Models\Merek;
use App\Models\Stok;


class Backdoor extends BaseController
{

	public function __construct()
    {
		$this->user = new Admin();
		$this->merek = new Merek();
		$this->stok = new Stok();
        $this->katalog = new Katalog();
		$this->kategori = new Kategori();
		
        helper('form', 'url');
    }


	public function index()
	{
      echo view('Backdoor/login');
	}




	public function Login()
	{
			$session = session();
			$username = $this->request->getPost('username');
			$check = $this->user->where('username', 'admin')->first();
			$pass_check = $check['password'];
			$password = $this->request->getPost('password');
			if(password_verify($password, $pass_check)) {
				$ses_data = [
                    'username'       => $check['username'],
                    'logged_in'     => TRUE
                ];
				$session->set($ses_data);
				return redirect()->to('Backdoor/welcome');
			}
			else {
				echo "FAILED";
			}
	}


	public function Logout()
    {
      $session = session();
      $session->destroy();
      return redirect()->to('Home/index');
    }

	public function Welcome()
	  {

	    echo view('Backdoor/welcome');
		echo view('Backdoor/sidebar');
	  }

		public function Katalog()
		  {
				$model = new CustomModel;
				$data['katalog'] = $model->getKatalog();
				$data['merek'] = $this->merek->findAll();
				$data['kategori'] = $this->kategori->findAll();

		    echo view('Backdoor/katalog', $data);
			echo view('Backdoor/sidebar');
		  }

	public function Edit_Katalog()
			{
				$id_katalog = $this->request->getPost('id_katalog');
				$data = [
    				'nama_barang' => $this->request->getPost('nama_barang'),
						'id_merek' => $this->request->getPost('id_merek'),
						'harga' => (int)preg_replace('/[^\d]/', '', $this->request->getPost('harga')),
						'id_kategori' => $this->request->getPost('id_kategori'),
						'stok' => (int)$this->request->getPost('stok'),
									];

				$this->katalog->update($id_katalog, $data);
				return redirect()->to('Backdoor/Katalog');

			}

	public function Delete_Katalog()
			{
				$id_katalog = $this->request->getPost('id_katalog');
				$this->katalog->delete($id_katalog);
				return redirect()->to('Backdoor/Katalog');
			}

	public function Add_Katalog()
			{
				$data = [
		    		'nama_barang' => $this->request->getPost('nama_barang'),
						'id_merek' => $this->request->getPost('id_merek'),
						'harga' => (int)preg_replace('/[^\d]/', '', $this->request->getPost('harga')),
						'id_kategori' => $this->request->getPost('id_kategori'),
						'stok' => (int)$this->request->getPost('stok'),
								];

				$this->katalog->insert($data);
				return redirect()->to('Backdoor/Katalog');
			}

	public function Deskripsi()
			{
				$model = new CustomModel;
				$data['katalog'] = $model->getDeskripsi();
				echo view('Backdoor/deskripsi', $data);
				echo view('Backdoor/sidebar');
			}

	public function Edit_Deskripsi()
			{
				 $id_katalog = $this->request->getPost('id_katalog');
				 $data = [
					 		'nama_barang' => $this->request->getPost('nama_barang'),
							'deskripsi' => $this->request->getPost('deskripsi'),
									];
				 $this->katalog->update($id_katalog, $data);
				 return redirect()->to('Backdoor/Deskripsi');
					}

	public function Delete_Deskripsi()
			{
				$id_katalog = $this->request->getPost('id_katalog');
				$data = [
						 'deskripsi' => NULL,
								 ];

				$this->katalog->update($id_katalog, $data);
				return redirect()->to('Backdoor/Deskripsi');
			}
	
	public function Add_Deskripsi()
			{
				$id_katalog = $this->request->getPost('id_katalog');
				$data = [
						 'deskripsi' => $this->request->getPost('deskripsi'),
								 ];

				$this->katalog->update($id_katalog, $data);
				return redirect()->to('Backdoor/Deskripsi');
			}
		
	public function Merek()
			{
				$data['merek'] = $this->merek->findAll();
				echo view('Backdoor/merek', $data);
				echo view('Backdoor/sidebar');
			}

	public function Add_Merek()
			{
				$data = ['nama_merek' => $this->request->getPost('nama_merek')];
				$this->merek->insert($data);
				return redirect()->to('Backdoor/Merek');
			}

	public function Edit_Merek()
			{
				 $id_merek = $this->request->getPost('id_merek');
				 $data = [
					 		'nama_merek' => $this->request->getPost('nama_merek'),
									];
				 $this->merek->update($id_merek, $data);
				 return redirect()->to('Backdoor/Merek');
			}

	public function Delete_Merek()
			{
				$id_merek = $this->request->getPost('id_merek');
				$this->merek->delete($id_merek);
				return redirect()->to('Backdoor/Merek');
			}

	public function Stok()
			{
				$model = new CustomModel;
				$data['stok'] = $model->getStok();
				echo view('Backdoor/Stok', $data);
				echo view('Backdoor/Sidebar');
			}


	#NOTE : DISIMPAN DULU		
	// public function Edit_Stok()
	// 		{
	// 			$id = $this->request->getPost('id_stok');
	// 			$stok_awal  = $this->stok->select('stok,status')->orderBy('createdAt','DESC')->find($id);
	// 			$status = $this->request->getPost('status');
	// 			$stok = $stok_awal['stok'] + ($status - $stok_awal['status']);

	// 			$data = [
	// 				'id_katalog' => $this->request->getPost('id_katalog'),
	// 				'stok' => $stok,
	// 				'status' => $status,
	// 				'keterangan' => $this->request->getPost('keterangan'),
	// 								];

	// 			 $this->stok->update($id, $data);
	// 			 return redirect()->to('Backdoor/Stok');
	// 		}

	// public function Delete_Stok()
	// 		{
	// 			$id_katalog = $this->request->getPost('id_katalog');
	// 			$count = $this->stok->where('id_katalog', $id_katalog)->countAllResults();
				
	// 			if($count = 1) {
	// 				$id = $this->request->getPost('id_stok');
	// 				$stok_awal  = $this->stok->select('stok,status')->orderBy('createdAt','DESC')->find($id);
	// 				$status = 0;
	// 				$stok = $stok_awal['stok'] + ($status - $stok_awal['status']);
	
	// 				$data = [
	// 					'id_katalog' => $this->request->getPost('id_katalog'),
	// 					'stok' => $stok,
	// 					'status' => $status,
	// 					'keterangan' => 'Stok dikembalikan ke awal. Alasan : Dihapus',
	// 									];
	
	// 				 $this->stok->update($id, $data);
	// 			}

	// 			else {

	// 			}


				
	// 			return redirect()->to('Backdoor/Stok');
	// 		}


	public function Add_Stok()
			{
				
				$data = [
						'id_katalog' => $this->request->getPost('id_katalog'), 
						'status' => $this->request->getPost('status'),
						'keterangan' => $this->request->getPost('keterangan'),
								 ];

				$this->stok->insert($data);

				return redirect()->to('Backdoor/Stok');
			}

	public function Kategori()
			{
				$model = new CustomModel;
				$data['kategori'] = $model->getKategori();
				
				echo view('Backdoor/Kategori', $data);
				echo view('Backdoor/Sidebar');
			}

	public function Add_Kategori()
			{
				$parent_kategori = $this->request->getPost('parent_kategori');
				if(is_null($parent_kategori) || empty($parent_kategori)) 
				{
					$data = [
						'nama_kategori' => $this->request->getPost('nama_kategori'),
						'parent_kategori' => NULL,
								 ];

				}

				else 
				{
				$data = [
						'nama_kategori' => $this->request->getPost('nama_kategori'),
						'parent_kategori' => $this->request->getPost('parent_kategori'),
								 ];
				}
				$this->kategori->insert($data);
				return redirect()->to('Backdoor/Kategori');
			}

	public function Edit_Kategori()
			{
				$id_kategori = $this->request->getPost('id_kategori');
				$parent_kategori = $this->request->getPost('parent_kategori');
				if($parent_kategori == "-") 
				{
					$data = [
						'nama_kategori' => $this->request->getPost('nama_kategori'),
						'parent_kategori' => NULL,
								 ];
				}

				else 
				{
				$data = [
						'nama_kategori' => $this->request->getPost('nama_kategori'),
						'parent_kategori' => $this->request->getPost('parent_kategori'),
								 ];
				}
				
				 $this->kategori->update($id_kategori, $data);
				 return redirect()->to('Backdoor/Kategori');
			}		

	public function Delete_Kategori()
			{
				$id_kategori= $this->request->getPost('id_kategori');
				$id = array();

				$model = new CustomModel;
				$data['kategori'] = $model->getKategori();
				foreach($data['kategori'] as $row) {
					if($row->id_kategori1 == $id_kategori || $row->parent_kategori1 == $id_kategori || $row->id_kategori == $id_kategori) {
						array_push($id, $row->id_kategori);
					}
				}

				$this->kategori->delete($id);
				return redirect()->to('Backdoor/Kategori');
			}
			



}
