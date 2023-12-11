@extends('layouts.master')
@section('content')

@include('layouts.navbar')

<section class="template">
    <h1>Contact Us</h1>
    <p><a href="/">Home</a> | Contact</p>
</section>

<section class="contact">
    <div class="container1">
        <div class="title">
            <h3>CONTACT US</h3>
            <h1>Feel Free To Asked Question</h1>
            <p>
                Silakan ajukan pertanyaan Anda. Kami siap membantu Anda sepenuhnya.
            </p>
        </div>
        <ul class="card">
            <li>
                <div class="icon">
                    <i data-feather="phone-call" class="i"></i>
                </div>
                <div class="text">
                    <h3>Phone</h3>
                    <p>+123 456 789</p>
                </div>
            </li>
            <li>
                <div class="icon">
                    <i data-feather="map-pin" class="i"></i>
                </div>
                <div class="text">
                    <h3>Address</h3>
                    <p>Solo, Surakarta</p>
                </div>
            </li>
            <li>
                <div class="icon">
                    <i data-feather="mail" class="i"></i>
                </div>
                <div class="text">
                    <h3>Mail</h3>
                    <p>rentalaja@gmail.com</p>
                </div>
            </li>
            <li>
                <div class="icon">
                    <i data-feather="phone-call" class="i"></i>
                </div>
                <div class="text">
                    <h3>Phone</h3>
                    <p>+123 456 789</p>
                </div>
            </li>
        </ul>
        <div class="sosmed">
            <h3>SOCIAL MEDIA</h3>
            <ul>
                <li><a href="#"><i data-feather="facebook" class="i"></i></a></li>
                <li><a href="#"><i data-feather="twitter" class="i"></i></a></li>
                <li><a href="#"><i data-feather="linkedin" class="i"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="container1">
        <h2>GET IN TOUCH!</h2>
        <P>
            Silakan hubungi kami untuk informasi lebih lanjut. Terima kasih.
        </P>
        <form class="box" method="post" action="">
            @csrf
            <input type="text" placeholder="First Name" name="firstname">
            <input type="text" placeholder="Last Name" name="lastname">
            <input type="phone" placeholder="Telephone" name="telp">
            <input type="mail" placeholder="Email" name="email">
            <textarea placeholder="Messages" name="message"></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>
</section>

@include('layouts.footer')

@endsection
