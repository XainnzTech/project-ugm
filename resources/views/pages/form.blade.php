@extends('layouts.admin')
@section('content')

<div class="container w-100 min-vh-100 d-flex justify-content-center align-items-center">
    <form action="{{ route('laptops.store') }}" method="post" class="form">
        @csrf
        <h2>Form</h2>
        <ul>
            <li>
                <label for="name">Nama Lengkap</label>
                <input type="text" name="name" autocomplete="off" required>
            </li>
            <li>
                <label for="telp">No HP</label>
                <input type="phone" name="telp" autocomplete="off" required>
            </li>
            <li>
                <label for="email">Email</label>
                <input type="text" name="email" autocomplete="off" required>
            </li>
            <li>
                <label for="products">Tipe Laptop</label>
                <select name="product">
                    <option value="" selected></option>
                    <option value="Laptop 1">Laptop 1</option>
                    <option value="Laptop 2">Laptop 2</option>
                    <option value="Laptop 3">Laptop 3</option>
                </select>
            </li>
            <li>
                <label for="tgl_peminjaman">Tanggal Peminjaman</label>
                <input type="date" name="tgl_peminjaman" required>
            </li>
            <li>
                <a onclick="window.close()" class="btn btn-danger">Back</a>
                <button type="submit" class="btn btn-success">Submit</button>
            </li>
        </ul>
    </form>
</div>

@endsection
