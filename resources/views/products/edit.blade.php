@extends('layouts.admin')
@section('content')

<div class="container w-100 min-vh-100 d-flex justify-content-center align-items-center py-5">
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="form">
        @csrf
        @method('PUT')
        <h2>Edit Product</h2>
        <ul>
            <li>
                <label for="image">Gambar Produk</label>
                <input type="file" name="image" accept="image/*">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="100">
            </li>
            <li>
                <label for="name">Nama Produk</label>
                <input type="text" name="name" value="{{ $product->name }}" required>
            </li>
            <li>
                <label for="specification">Spesifikasi</label>
                <input type="text" name="specification" value="{{ $product->specification }}"required>
            </li>
            <li>
                <label for="initial_price">Harga Normal</label>
                <input type="number" name="initial_price" value="{{ $product->initial_price }}" required>
            </li>
            <li>
                <label for="discount_price">Harga Diskon</label>
                <input type="number" name="discount_price" value="{{ $product->discount_price }}" required>
            </li>
            <li>
                <a href="{{ route('products') }}" class="btn btn-danger">Back</a>
                <button type="submit" class="btn btn-success">Update</button>
            </li>
        </ul>
    </form>
</div>

@endsection
