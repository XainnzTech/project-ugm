@extends('layouts.admin')
@section('content')

@include('layouts.navbar2')

<div>
    <table class="table table-bordered w-100" cellpadding="5px">
        <thead class="table-dark text-center align-middle">
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Nama Produk</th>
                <th>Spesifikasi</th>
                <th>Harga Normal</th>
                <th>Harga Diskon</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            @foreach($products as $product)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $product->image) }}" style="max-width: 100px;">
                    </td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->specification }}</td>
                    <td>{{ $product->initial_price }}</td>
                    <td>{{ $product->discount_price }}</td>
                    <td class="d-flex justify-content-center gap-2 flex-wrap">
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('products.create') }}" class="btn btn-primary m-3">Tambah Produk</a>
</div>


@endsection
