<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomModel extends Model
{
  protected $table;
  protected $returnType     = 'array';
  public function getKatalog()
  {
    $builder = $this->db->table('katalog');
    $builder->select('katalog.id_katalog, katalog.nama_barang, katalog.id_merek, merek.nama_merek,SUM(stok.status) AS stok, katalog.harga, kategori.nama_kategori, katalog.id_kategori');
    $builder->join('merek', 'merek.id_merek = katalog.id_merek', 'left');
    $builder->join('kategori', 'kategori.id_kategori = katalog.id_kategori', 'left');
    $builder->join('stok', 'stok.id_katalog = katalog.id_katalog', 'left');
    $builder->groupBy('stok.id_katalog');
    $query = $builder->get()->getResult();
    return $query;
  }

  public function getDeskripsi()
  {
    $builder = $this->db->table('katalog');
    $builder->select('katalog.id_katalog, katalog.nama_barang, katalog.deskripsi');
    $query = $builder->get()->getResult();
    return $query;
  }


  public function getKategori()
  {
    $builder = $this->db->table('kategori k1');
    $builder->select('k2.id_kategori AS id_kategori, k2.nama_kategori AS nama_kategori, k1.nama_kategori AS parent_kategori, k1.id_kategori AS id_kategori1, k1.parent_kategori AS parent_kategori1');
    $builder->join('kategori k2', 'k1.id_kategori = k2.parent_kategori', 'right');
    $query = $builder->get()->getResult();
    return $query;
  }


  public function getStok()
  {
    $builder = $this->db->table('katalog');
    $builder->select('stok.id_katalog, stok.id, SUM(stok.status) AS stok,  stok.keterangan, katalog.nama_barang, stok.createdAt');
    $builder->join('stok', 'stok.id_katalog = katalog.id_katalog', 'left');
    $builder->groupBy('stok.id_katalog');


    $query = $builder->get()->getResult();
    return $query;
  }

  public function getKontak()
  {
    $builder = $this->db->table('kontak');
    $query = $builder->get()->getResult();
    return $query;
  }

  public function getSearch($array, $perPage, $offset)
  {
    $builder = $this->db->table('katalog');
    $builder->select('katalog.id_katalog, katalog.deskripsi, katalog.nama_barang, katalog.id_merek, merek.nama_merek,SUM(stok.status) AS stok, katalog.harga, kategori.nama_kategori, katalog.id_kategori');
    $builder->join('merek', 'merek.id_merek = katalog.id_merek', 'left');
    $builder->join('kategori', 'kategori.id_kategori = katalog.id_kategori', 'left');
    $builder->join('stok', 'stok.id_katalog = katalog.id_katalog', 'left');
    $builder->orLike($array);
    
    $builder->groupBy('stok.id_katalog');
    $query = $builder->get($perPage, $offset)->getResult();
    return $query;
  }


  public function getSearchTotal($array)
  {
    $builder = $this->db->table('katalog');
    $builder->select('katalog.id_katalog, katalog.deskripsi, katalog.nama_barang, katalog.id_merek, merek.nama_merek,SUM(stok.status) AS stok, katalog.harga, kategori.nama_kategori, katalog.id_kategori');
    $builder->join('merek', 'merek.id_merek = katalog.id_merek', 'left');
    $builder->join('kategori', 'kategori.id_kategori = katalog.id_kategori', 'left');
    $builder->join('stok', 'stok.id_katalog = katalog.id_katalog', 'left');
    $builder->orLike($array);
    
    $builder->groupBy('stok.id_katalog');
    $query = $builder->get()->getResult();
    return $query;
  }


  public function getProduct($id_katalog)
  {
    $builder = $this->db->table('katalog');
    $builder->select('katalog.id_katalog, katalog.nama_barang, katalog.id_merek, merek.nama_merek,SUM(stok.status) AS stok, katalog.harga, kategori.nama_kategori, katalog.id_kategori');
    $builder->join('merek', 'merek.id_merek = katalog.id_merek', 'left');
    $builder->join('kategori', 'kategori.id_kategori = katalog.id_kategori', 'left');
    $builder->join('stok', 'stok.id_katalog = katalog.id_katalog', 'left');
    $builder->groupBy('stok.id_katalog');
    $builder->where('katalog.id_katalog', $id_katalog);
    $query = $builder->get()->getResult();
    return $query;
  }







}
