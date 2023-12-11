@extends('layouts.master')
@section('content')

@include('layouts.navbar')

<section class="hero" style="background-image: url('{{ asset('img/bg2.jpg') }}')">
    <main>
        <h1>Selamat Datang di <span>Rental</span>Aja</h1>
        <p>
            Kami menyediakan solusi sewa laptop yang handal untuk kebutuhan bisnis dan acara Anda. Dengan layanan kami, Anda dapat menikmati teknologi terkini tanpa harus membeli secara permanen.
        </p>
        <a href="/about">About Us</a>
    </main>
</section>

<section class="service">
    <div class="content">
        <h2>Our Service</h2>
        <div class="container">
            <div class="card">
                <div class="img">
                    <i data-feather="monitor"></i>
                </div>
                <div class="text">
                    <h3>IT Hardware Rental Service</h3>
                    <p>Sewa perangkat keras IT untuk kebutuhan sementara bisnis Anda.</p>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <i data-feather="users"></i>
                </div>
                <div class="text">
                    <h3>IT Expert</h3>
                    <p>Konsultasi dan dukungan ahli IT untuk solusi teknologi yang optimal.</p>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <i data-feather="settings"></i>
                </div>
                <div class="text">
                    <h3>IT Asset Management</h3>
                    <p>Pengelolaan dan pemantauan aset IT secara efisien dan terstruktur.</p>
                </div>
            </div>
            <div class="card">
                <a href="/service">Lainnya</a>
            </div>
        </div>
    </div>
    <div class="image">
        <img src="{{ asset('img/1.png') }}">
    </div>
</section>

<section class="strength">
    <div class="title">
        <h1>Mengapa memlih kami</h1>
        <p>Kami dapat membantu memilih perangkat terbaik dan menyelesaikan masalah IT perusahaan</p>
    </div>
    <div class="container">
        <div class="card">
            <div class="icon">
                <i data-feather="phone-call"></i>
            </div>
            <div class="text">
                <h3>Konsultasi Gratis</h3>
                <p>Rekomendasi laptop terbaik untuk kebutuhan Anda.</p>
            </div>
        </div>
        <div class="card">
            <div class="icon">
                <i data-feather="dollar-sign"></i>
            </div>
            <div class="text">
                <h3>Harga Terjangkau</h3>
                <p>Biaya sewa aset kompetitif dan tanpa biaya tambahan.</p>
            </div>
        </div>
        <div class="card">
            <div class="icon">
                <i data-feather="check-square"></i>
            </div>
            <div class="text">
                <h3>Langkah Mudah</h3>
                <p>Konsultasi, penawaran harga, dan pengiriman.</p>
            </div>
        </div>
        <div class="card">
            <div class="icon">
                <i data-feather="user-plus"></i>
            </div>
            <div class="text">
                <h3>Asuransi</h3>
                <p>Melindungi perangkat dari kerusakan atau kecelakaan.</p>
            </div>
        </div>
        <div class="card">
            <div class="icon">
                <i data-feather="activity"></i>
            </div>
            <div class="text">
                <h3>Nilai Aset Tetap</h3>
                <p>Tidak ada nilai depresiasi dari investasi aset.</p>
            </div>
        </div>
        <div class="card">
            <div class="icon">
                <i data-feather="tool"></i>
            </div>
            <div class="text">
                <h3>IT Support</h3>
                <p>Bebas cemas dari pemeliharaan aset.</p>
            </div>
        </div>
    </div>
</section>

<section class="products">
    <div class="title">
        <h1>Popular Devices</h1>
    </div>
    <div class="container">
        @for ($i = 0; $i <= 9; $i++)
        <div class="card">
            <div class="img">
                <img src="{{ asset('img/laptop.png') }}">
            </div>
            <div class="desc">
                <h1>Laptop</h1>
                <h3>i7-Gen 11 / RAM 16GB / 1TB SSD / 14"</h3>
                <h2><s>Rp1.899.000,00</s><br><span>Rp939.000,00 / bulan</span></h2>
            </div>
        </div>
        @endfor
    </div>
    <div class="button">
        <a href="/products">Show More</a>
    </div>
</section>

@include('layouts.footer')

@endsection
