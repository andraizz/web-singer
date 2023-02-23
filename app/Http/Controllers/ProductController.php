<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products', [
            "title" => "Product Category",
            "products" => Product::latest()->filter(request(['search']))->get()
        ]);
    }

    public function show(Product $product)
    {
        return view('detail-product', [
            "title" => "$product->nama_produk",
            "items" => $product
        ]);
    }
}
