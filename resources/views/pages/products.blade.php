@extends('layouts.master')
@section('content')

@include('layouts.navbar')

<section class="template">
    <h1>All Products</h1>
    <p><a href="/">Home</a> | Products</p>
</section>

<section class="product">
    <div class="container">
        @for ($i = 0; $i < 6; $i++)
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
        @foreach ($products as $product)
        <div class="card">
            <div class="img">
                <img src="{{ asset('storage/' . $product->image) }}">
            </div>
            <div class="desc">
                <h1>{{ $product->name }}</h1>
                <h3>{{ $product->specification }}</h3>
                <h2><s>Rp {{ number_format($product->initial_price, 2, ',', '.') }}</s><br><span>Rp {{ number_format($product->discount_price, 2, ',', '.') }} / bulan</span></h2>
            </div>
        </div>
        @endforeach
    </div>
</section>

@include('layouts.footer')

@endsection
