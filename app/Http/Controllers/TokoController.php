<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Toko;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function index()
    {
        $tokos = Toko::latest()->get();
        return view('toko.index', compact('tokos'));
    }

    public function create()
    {
        return view('toko.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_toko' => 'required',
            'alamat' => 'required',
            'nomor_telepon' => 'required',
        ]);

        Toko::create($request->all());

        return redirect()->route('toko.index')
            ->with('success', 'Toko created successfully.');
    }

    public function show($id)
    {
        $produks = Produk::where('id_toko', $id)->latest()->get();
        $toko = Toko::where('id', $id)->first();
        return view('toko.show', compact('toko','produks'));
    }

    public function edit($id)
    {
        $toko = Toko::where('id', $id)->first();
        return view('toko.edit', compact('toko'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_toko' => 'required',
            'alamat' => 'required',
            'nomor_telepon' => 'required',
        ]);

        $toko = Toko::where('id', $id)->first();

        $toko->update($request->all());

        return redirect()->route('toko.index')
            ->with('success', 'Toko updated successfully');
    }

    public function destroy($id)
    {
        $toko = Toko::where('id', $id)->first();
        $toko->delete();

        return redirect()->route('toko.index')
            ->with('success', 'Toko deleted successfully');
    }
}
