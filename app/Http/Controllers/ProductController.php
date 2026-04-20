<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Tampilkan semua data
    public function index()
    {
        $product = Product::all();
        return view('product.index', compact('product'));
    }

    // Form tambah data
    public function create()
    {
        return view('product.create');
    }

    // Simpan data baru
    public function store(Request $request)
    {
        // VALIDASI (DITAMBAHKAN ✔️)
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'production_date' => 'required|date',
            'expired_date' => 'required|date',
            'category' => 'required',
        ]);

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'production_date' => $request->production_date,
            'expired_date' => $request->expired_date,
            'category' => $request->category,
            'description' => $request->description
        ]);

        return redirect()->route('product.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    // Detail produk
    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    // Form edit
    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    // Update data
    public function update(Request $request, Product $product)
    {
        // VALIDASI (DITAMBAHKAN ✔️)
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'production_date' => 'required|date',
            'expired_date' => 'required|date',
            'category' => 'required',
        ]);

        $product->update($request->all());

        return redirect()->route('product.index')
            ->with('success', 'Data berhasil diupdate');
    }

    // Hapus data
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('product.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
