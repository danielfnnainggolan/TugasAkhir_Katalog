<?php

namespace App\Models;

use CodeIgniter\Model;

class Katalog extends Model
{
  protected $table      = 'katalog';
  protected $primaryKey = 'id_katalog';
  protected $returnType     = 'array';
  protected $allowedFields = ['id_katalog', 'nama_barang', 'harga', 'stok','id_kategori','id_merek', 'deskripsi'];


}
