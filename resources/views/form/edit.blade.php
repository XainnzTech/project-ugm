@extends('layouts.admin')
@section('content')

<div class="container w-100 min-vh-100 d-flex justify-content-center align-items-center py-5">
    <form action="{{ route('laptops.update', $laptop->id) }}" method="POST" class="form">
        @csrf
        @method('PUT')
        <h2>Edit Request</h2>
        <ul>
            <li>
                <label for="name">Nama Lengkap</label>
                <input type="text" name="name" value="{{ $laptop->name }}">
            </li>
            <li>
                <label for="telp">No HP</label>
                <input type="phone" name="telp" value="{{ $laptop->telp }}">
            </li>
            <li>
                <label for="email">Email</label>
                <input type="text" name="email" value="{{ $laptop->email }}">
            </li>
            <li>
                <label for="products">Tipe Laptop</label>
                <select name="products">
                    <option value="Laptop 1" {{ $laptop->product == 'Laptop 1' ? 'selected' : '' }}>Laptop 1</option>
                    <option value="Laptop 2" {{ $laptop->product == 'Laptop 2' ? 'selected' : '' }}>Laptop 2</option>
                    <option value="Laptop 3" {{ $laptop->product == 'Laptop 3' ? 'selected' : '' }}>Laptop 3</option>
                </select>
            </li>
            <li>
                <label for="tgl_peminjaman">Tanggal Peminjaman</label>
                <input type="date" name="tgl_peminjaman" value="{{ $laptop->tgl_peminjaman }}">
            </li>
            <li>
                <label for="status">Status</label>
                <select name="status">
                    <option value="Diajukan" {{ $laptop->status == 'Diajukan' ? 'selected' : '' }}>Diajukan</option>
                    <option value="Dipinjam" {{ $laptop->status == 'Dipinjam' ? 'selected' : '' }}>Dipinjam</option>
                    <option value="Dikembalikan" {{ $laptop->status == 'Dikembalikan' ? 'selected' : '' }}>Dikembalikan</option>
                </select>
            </li>
            <li>
                <a href="{{ route('laptops.index') }}" class="btn btn-danger">Back</a>
                <button type="submit" class="btn btn-success">Update</button>
            </li>
        </ul>
    </form>
</div>

@endsection
