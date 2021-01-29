<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\tb_barang;
date_default_timezone_set("Asia/Makassar");
class mhsController extends Controller
{
    //MENGAKTIFKAN FUNGSI AUTHENTICATION
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mhs = tb_barang::all();
        return view('data', compact('mhs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //MENAMBAHKAN ATURAN VALIDASI DATA
        $aturan = [
            'id'           => 'required|numeric|digits:5',
            'nama'         => 'required|min:1|max:50',
            'deskripsi'    => 'required|min:1|max:255',
            'stok'         => 'required|min:1|max:11',
            'harga'        => 'required|min:1|max:11',
            
        ];

        //PESAN YANG DITAMPILKAN KETIKA MELANGGAR ATURAN
        $pesan = [
            'required' => 'Inputan Tidak Boleh Kosong!',
            'numeric'  => 'Inputan Harus Berupa Angka!',
            'digits'   => 'Inputan Harus :digits Digit!',
            'min'      => 'Inputan Tidak Boleh Kurang Dari 1 Karakter',
            'max'      => 'Inputan Tidak Boleh Lebih Dari :max Karakter'
        ];

        //MENJALANKAN ATURAN 
        $this->validate($request, $aturan, $pesan);

        //FUNGSI PENYIMPANAN DATA
        tb_barang::create([
            'id'                => $request->id,
            'nama'              => $request->nama,
            'deskripsi'         => $request->deskripsi,
            'stok'              => $request->stok,
            'harga'             => $request->harga,
            'created_at'                 => date('Y-m-d H:i:s'),
            'updated_at'                 => date('Y-m-d H:i:s')
        ]);
        return redirect()->route('mhs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mhs = tb_barang::where('id', $id)->get();
        return view('data/show', compact('mhs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mhs    = tb_barang::where('id', $id)->get();
        return view('data/edit', compact('mhs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        tb_barang::where('id', $id)->update([
            'nama'              => $request->nama,
            'deskripsi'         => $request->deskripsi,
            'stok'              => $request->stok,
            'harga'             => $request->harga,
            'created_at'                 => date('Y-m-d H:i:s'),
            'updated_at'                 => date('Y-m-d H:i:s')
        ]);
        return redirect()->route('mhs.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tb_barang::where('id', $id)->delete();
        return redirect()->route('mhs.index');
    }
}
