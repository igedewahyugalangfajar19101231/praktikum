<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_barang extends Model
{
    use HasFactory;

    protected $guarded      = ['created_at', 'updated_at'];
    protected $primaryKey   = 'id' ;
    public $table           = 'tb_barang';
    protected $fillable     = ['id', 'nama', 'deskripsi', 'stok', 'harga'];
}
