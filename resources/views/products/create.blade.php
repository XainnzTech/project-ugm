@extends('layouts.admin')
@section('content')

<div class="container w-100 min-vh-100 d-flex justify-content-center align-items-center">
    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data" class="form">
        @csrf
        <h2>Tambah Produk</h2>
        <ul>
            <li>
                <label for="image">Gambar Produk</label>
                <input type="file" name="image" accept="image/*" required>
            </li>
            <li>
                <label for="name">Nama Produk</label>
                <input type="text" name="name" required>
            </li>
            <li>
                <label for="specification">Spesifikasi</label>
                <input type="text" name="specification" required>
            </li>
            <li>
                <label for="initial_price">Harga Normal</label>
                <input type="number" name="initial_price" required>
            </li>
            <li>
                <label for="discount_price">Harga Diskon</label>
                <input type="number" name="discount_price" required>
            </li>
            <li>
                <a href="/admin/products" class="btn btn-danger">Back</a>
                <button type="submit" class="btn btn-success">Tambah Produk</button>
            </li>
        </ul>
    </form>
</div>

@endsection
