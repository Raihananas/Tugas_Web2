<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index() {
        $produks = Produk::all();
        return view('produk.index', compact('produks'));
    }

    public function create() {
        return view('produk.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nama_kopi' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
        ]);

        Produk::create($request->all());
        return redirect()->route('produk.index')->with('success', 'Kopi berhasil ditambah!');
    }

    public function edit(Produk $produk) {
        return view('produk.edit', compact('produk'));
    }

    public function update(Request $request, Produk $produk) {
        $produk->update($request->all());
        return redirect()->route('produk.index')->with('success', 'Data kopi diupdate!');
    }

    public function destroy(Produk $produk) {
        $produk->delete();
        return redirect()->route('produk.index')->with('success', 'Kopi dihapus!');
    }
}