<?php
namespace App\Http\Controllers;

use App\User;
use App\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller {
	public function forms() {
		return view('form');
	}

	public function tambah_barang() {
		return view('tambah_barang');
	}

	public function login_view() {
		return view('login');
	}

	public function sign_up() {
		return view('sign_up');
	}

	public function list_barang() {
		$data_barang = Barang::all();

		return view('list_barang', compact('data_barang'));
	}

	public function submit_tambah_barang(Request $request) {
		$this->validate($request, [
			'nama_barang' => 'required',
			'harga_barang' => 'required|numeric',
			'kuantitas_barang' => 'required|numeric',
			'gambar_barang' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
			'keterangan_barang' => 'nullable'
		]);

		$data = array(
			'nama_barang' => $request->get('nama_barang'),
			'harga_barang' => $request->get('harga_barang'),
			'kuantitas_barang' => $request->get('kuantitas_barang'),
			'gambar_barang' => $request->get('gambar_barang'),
			'keterangan_barang' => $request->get('keterangan_barang')
		);

		if ($request->gambar_barang != "") {
			$data['gambar_barang'] = time() . '.' . $request->gambar_barang->getClientOriginalExtension();
			$request->gambar_barang->storeAs('public/images/', $data['gambar_barang']);
		} else {
			$data['gambar_barang'] = 'default_image.jpg';
		}

		$data_barang = Barang::create($data);
		$data_barang->save();

		return redirect('/tambah_barang')->with('success', 'Barang telah ditambahkan');
	}
}

?>