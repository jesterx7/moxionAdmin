<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model {
	
	protected $fillable = [
		'nama_barang',
		'harga_barang',
		'kuantitas_barang',
		'gambar_barang',
		'keterangan_barang'
	];

	public $timestamps = false;

	protected $table = 'barang';
}

?>