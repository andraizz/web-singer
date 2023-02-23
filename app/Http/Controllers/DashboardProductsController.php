<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class DashboardProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.products.index', [
            'products' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required|max:255',
            'slug' => 'required|unique:products',
            'gambar' => 'image|file|max:1024',
            'harga_lama' => 'required',
            'harga_baru' => 'required',
            'stok' => 'required',
            'best_seller' => '',
            'deskripsi' => 'required'
        ]);

        if($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('post-gambar');
        }

        Product::create($validatedData);
        return redirect('/dashboard/products')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('dashboard.products.show', [
            'items' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('dashboard.products.edit', [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $rules = [
            'nama_produk' => 'required|max:255',
            'gambar' => 'image|file|max:1024',
            'harga_lama' => 'required',
            'harga_baru' => 'required',
            'stok' => 'required',
            'best_seller' => '',
            'deskripsi' => 'required'
        ];

        if($request->slug != $product->slug) {
            $rules['slug'] = 'required|unique:products';
        }

        $validatedData = $request->validate($rules);

        if($request->file('gambar')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('post-gambar');
        }

        Product::where('id', $product->id)
                ->update($validatedData);

        return redirect('/dashboard/products')->with('success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if($product->gambar) {
            Storage::delete($product->gambar);
        }

        Product::destroy($product->id);
        return redirect('/dashboard/products')->with('success', 'Data berhasil dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Product::class, 'slug', $request->nama_produk);
        return response()->json(['slug' => $slug]);
    }
}
