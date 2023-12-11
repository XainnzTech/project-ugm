@extends('layouts.admin')
@section('content')

@include('layouts.navbar2')

<div>
    <table class="table table-bordered w-100" cellpadding="5px">
        <thead class="text-center">
            <tr class="table-dark">
                <th>No</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Product</th>
                <th>Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($laptops as $laptop)
            <tr class="align-middle">
                <td class="text-center">{{ $i++ }}</td>
                <td>{{ $laptop->name }}</td>
                <td>{{ $laptop->telp }}</td>
                <td>{{ $laptop->email }}</td>
                <td>{{ $laptop->product }}</td>
                <td class="text-center">{{ $laptop->tgl_peminjaman }}</td>
                <td class="text-center text-white" data-product="{{ $laptop->status }}">{{ $laptop->status }}</td>
                <td class="d-flex justify-content-center gap-2">
                    <a href="{{ route('laptops.edit', $laptop->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('laptops.destroy', $laptop->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda ingin menghapus data ini?');">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
