@extends('layouts.admin')
@section('content')

@include('layouts.navbar2')

<div>
    <table cellpadding="5px" width="100%" class="table table-bordered w-100 t">
        <thead class="text-center table-dark">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Telp</th>
                <th>Email</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $contact -> firstname . " " . $contact -> lastname }}</td>
                    <td>{{ $contact -> telp }}</td>
                    <td>{{ $contact -> email }}</td>
                    <td>{{ $contact -> message }}</td>
                    <td>
                        <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
