<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kind;
use App\Models\Role;
use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class KindController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kind = Kind::all();
        $page = 'Jenis Latihan';
        return view('layouts.booth.produk', compact('produk', 'page', 'booth'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nama = Booth::get()->where('user_id', Auth::user()->id);
        $page = 'Tambah Produk';
        return view('layouts.booth.cproduk', compact('page', 'nama'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'gambar' => 'required|image|mimes::jpeg,png,jpg|max:2048'
        ]);

        $nm = $data['gambar'];
        $namaFile = $nm->getClientOriginalName();

        $dtUpload = new Produk;
        $dtUpload->user_id = $request->user_id;
        $dtUpload->booth_id = $request->booth_id;
        $dtUpload->nama_produk = $request->nama_produk;
        $dtUpload->deskripsi = $request->deskripsi;
        $dtUpload->harga_produk = $request->harga_produk;
        $dtUpload->stok = $request->stok;
        $dtUpload->berat = $request->berat;
        $dtUpload->gambar = $namaFile;

        $nm->move(public_path() . '/img/produk', $namaFile);
        $dtUpload->save();

        return redirect()->route('barang.index')->with('success', 'Barang Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produk::find($id);
        $nama = Booth::get()->where('user_id', Auth::user()->id);
        $page = 'Edit Produk';
        return view('layouts.booth.eproduk', compact('produk', 'page', 'nama'));
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
        if ($request->hasFile('gambar')) {
            $data = $request->validate([
                'gambar' => 'required|image|mimes:jpeg,png,jpg|max:3072'
            ]);
            $nm = $data['gambar'];
            $namaFile = $nm->getClientOriginalName();

            $dtUpload = Produk::find($id);
            $dtUpload->user_id = $request->user_id;
            $dtUpload->booth_id = $request->booth_id;
            $dtUpload->nama_produk = $request->nama_produk;
            $dtUpload->deskripsi = $request->deskripsi;
            $dtUpload->harga_produk = $request->harga_produk;
            $dtUpload->stok = $request->stok;
            $dtUpload->berat = $request->berat;
            $dtUpload->gambar = $namaFile;

            $nm->move(public_path() . '/img/produk', $namaFile);
            $dtUpload->update();

            return redirect()->route('barang.index')
                ->with('success', 'Produk Berhasil Di update');
        }

        $dtUpload = Produk::find($id);
        $dtUpload->user_id = $request->user_id;
        $dtUpload->booth_id = $request->booth_id;
        $dtUpload->nama_produk = $request->nama_produk;
        $dtUpload->deskripsi = $request->deskripsi;
        $dtUpload->harga_produk = $request->harga_produk;
        $dtUpload->stok = $request->stok;
        $dtUpload->berat = $request->berat;
        $dtUpload->update();
        return redirect()->route('barang.index')
            ->with('success', 'Produk Berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::find($id);

        $produk->delete();

        return back()->with('success', ' Penghapusan berhasil.');
    }
}
