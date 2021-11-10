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
    $builder->select('katalog.id_katalog, katalog.nama_barang, katalog.id_merek, merek.nama_merek,stok.stok, katalog.harga, kategori.nama_kategori, katalog.id_kategori');
    $builder->join('merek', 'merek.id_merek = katalog.id_merek', 'left');
    $builder->join('kategori', 'kategori.id_kategori = katalog.id_kategori', 'left');
    $builder->join('stok', 'stok.id_katalog = katalog.id_katalog', 'left');
    $builder->groupBy(["katalog.id_katalog", "stok.id_katalog"]);
    $builder->orderBy("stok.createdAt", "DESC");

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







}
