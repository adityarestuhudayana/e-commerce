<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('products.index', [
            'products' => Product::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
        ]);

        $validatedData['slug'] = explode(' ', $validatedData['nama_produk']);
        $validatedData['slug'] = implode('-', $validatedData['slug']);

        $validatedData['keterangan'] = $request->keterangan;

        if ($validatedData['keterangan']) {
            $validatedData['exerpt'] = Str::limit($validatedData['keterangan'], 20);
        } else {
            $validatedData['exerpt'] = 'Tidak ada';
        }

        $validatedData['gambar'] = $request->file('gambar')->store('images');


        Product::create($validatedData);

        return redirect('/profile')->with('addProdukSuccess', 'Berhasil membuat barang jual');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
