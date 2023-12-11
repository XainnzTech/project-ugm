@extends('layouts.admin')
@section('content')

<div class="container w-100 min-vh-100 d-flex justify-content-center align-items-center py-5">
    <form action="{{ route('contacts.show', $contact->id) }}" method="POST" class="form">
        @csrf
        @method('PUT')

        <h1>Edit Contact</h1>
        <ul>
            <li>
                <label for="firstname">First Name:</label>
                <input type="text" name="firstname" value="{{ $contact->firstname }}" required>
            </li>
            <li>
                <label for="lastname">Last Name:</label>
                <input type="text" name="lastname" value="{{ $contact->lastname }}" required>
            </li>
            <li>
                <label for="telp">Telephone:</label>
                <input type="phone" name="telp" value="{{ $contact->telp }}" required>
            </li>
            <li>
                <label for="email">Email:</label>
                <input type="email" name="email" value="{{ $contact->email }}" required>
            </li>
            <li>
                <label for="message">Message:</label>
                <textarea name="message" required class="w-100">{{ $contact->message }}</textarea>
            </li>
            <li>
                <a href="{{ route('contacts') }}" class="btn btn-danger">Back</a>
                <button type="submit" class="btn btn-success">Update</button>
            </li>
        </ul>
    </form>
</div>

@endsection
