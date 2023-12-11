<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('pages.products', compact('products'));
    }

    public function admin()
    {
        $products = Product::all();
        $i = 1;
        return view('products.index', compact('products', 'i'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|string',
            'specification' => 'required|string',
            'initial_price' => 'required|numeric',
            'discount_price' => 'required|numeric'
        ]);

        // Upload gambar
        $imagePath = $request->file('image')->store('images/products', 'public');

        // Simpan data ke database
        Product::create([
            'image' => $imagePath,
            'name' => $request->input('name'),
            'specification' => $request->specification,
            'initial_price' => $request->initial_price,
            'discount_price' => $request->discount_price
        ]);

        return redirect()->back()
            ->with('success', 'Produk berhasil ditambahkan');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|string',
            'specification' => 'required|string',
            'initial_price' => 'required|numeric',
            'discount_price' => 'required|numeric'
        ]);

        // Jika ada gambar baru, upload dan update path gambar
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/products', 'public');
            $product->update(['image' => $imagePath]);
        }

        // Update data lainnya
        $product->update([
            'name' => $request->input('name'),
            'specification' => $request->specification,
            'initial_price' => $request->initial_price,
            'discount_price' => $request->discount_price
        ]);

        return redirect()->route('products')
            ->with('success', 'Produk berhasil diperbarui');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->back()
            ->with('success', 'Data deleted successfully');
    }
}
