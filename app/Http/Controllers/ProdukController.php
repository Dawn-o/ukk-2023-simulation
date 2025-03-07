<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Toko;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        // 
    }

    public function create($toko_id)
    {
        return view('produk.create', compact('toko_id'));
    }

    public function store(Request $request, $toko_id)
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);

        $request['id_toko'] = $toko_id;
        Produk::create($request->all());
        return redirect()->route('toko.show', $toko_id)
            ->with('success', 'Produk created successfully.');
    }

    public function show($id)
    {
        // 
    }

    public function edit($id, $toko_id)
    {
        $produk = Produk::where('id', $id)->first();
        return view('produk.edit', compact('produk', 'toko_id'));
    }

    public function update(Request $request, $id, $toko_id)
    {
        $produk = Produk::where('id', $id)->first();

        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);

        $produk->update($request->all());

        return redirect()->route('toko.show', $toko_id)
            ->with('success', 'Produk updated successfully.');
    }

    public function destroy($id, $toko_id)
    {
        $produk = Produk::where('id', $id)->first();
        $produk->delete();

        return redirect()->route('toko.show', $toko_id)
            ->with('success', 'Produk deleted successfully');
    }
}
