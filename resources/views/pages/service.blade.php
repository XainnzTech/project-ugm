@extends('layouts.master')
@section('content')

@include('layouts.navbar')

<section class="template">
    <h1>Lindungi Perangkat dan Data dari Serangan Cyber</h1>
    <p><a href="/">Home</a> | Service</p>
</section>

<section class="service">
    <div class="content">
        <h2>Our Service</h2>
        <div class="container">
            <div class="card">
                <div class="img">
                    <i data-feather="eye"></i>
                </div>
                <div class="text">
                    <h3>Endpoint Detection</h3>
                    <p>
                        Mendeteksi ancaman di titik akhir jaringan komputer pengguna.
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <i data-feather="umbrella"></i>
                </div>
                <div class="text">
                    <h3>Endpoint Prevention</h3>
                    <p>
                        Mencegah serangan pada titik akhir perangkat komputasi pengguna.
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <i data-feather="shield"></i>
                </div>
                <div class="text">
                    <h3>Endpoint Protection</h3>
                    <p>
                        Melindungi perangkat dari berbagai ancaman keamanan.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="image">
        <img src="{{ asset('img/2.png') }}">
    </div>
</section>

@include('layouts.footer')

@endsection
