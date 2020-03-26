@extends('layouts/template')

@section('title')
    Contact
@endsection('title')

@section('centar')
<div class="indexMenu relative ">
            <div class="menuImage">
                <p>Contact</p>
                <img src="{{ asset('images/contact.jpg')}}" alt="marco restaurant"/>
            </div>
            <div class="menuText">
            <form action="{{ url('/contact') }}" method="POST">
                <ul class="contactForm">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <li>To get in touch with the MARCO team simply fill out the contact form below.</li>
                    <li><input class="con" id="name" name="name" type="text" placeholder="Name" @if(session()->has('user')) value="{{ session()->get("user")->Name." ".session()->get("user")->lastName }}" @endif></li>
                    <li><input class="con" id="phone" name="phone" type="text" placeholder="Phone number"></li>
                    <li><input class="con" id="email" name="email" type="email" placeholder="Email" @if(session()->has('user')) value={{ session()->get("user")->email }} @endif></li>
                    <li><input class="con" id="text" name="text" type="text" placeholder="Message"></li>
                    <li><button type="submit" name="sendContact">SUBMIT</button></li>
                </ul>
            </form>
            </div>
        </div>


        <div class="indexMenu relative ">
            <div class="menuText">
                <ul id="location">
                    <li class="headInfromation">WORKING TIME</li>
                    <li>Monday - Thursday</li>
                    <li>11:00 AM - 9:00 PM</li>
                    <li>Friday - Saturday</li>
                    <li>11:00 AM - 5:00 PM</li>
                    <li class="headInfromation">INFORMATION</li>
                    <li><i class="fa fa-envelope"></i> restaurant@marco.com</li>
                    <li><i class="fa fa-phone"></i> +38163 111 1111</li>
                    <li><i class="fa fa-map-marker"></i> Ipsum Street, Lorem Tower, MO, Columbia, 508000</li>

                </ul>
            </div>
            <div class="menuImage">
                <p>Information</p>
                <img src="{{ asset('images/contact2.jpg')}}" alt="marco restaurant"/>
            </div>
        </div>
        <a href="https://www.google.com/maps/place/%D0%A1%D0%BC%D0%B5%D0%B4%D0%B5%D1%80%D0%B5%D0%B2%D1%81%D0%BA%D0%B0+%D0%9F%D0%B0%D0%BB%D0%B0%D0%BD%D0%BA%D0%B0/@44.3666364,20.9608298,15.3z/data=!4m5!3m4!1s0x4750cefff31a5049:0xe05e28b1c5d95b71!8m2!3d44.367191!4d20.9604515"><img id="maps" src="app/Assets/Images/maps.png" alt=""></a>

@endsection('centar')

@section('javascript')
<script type="text/javascript" src="{{ asset('js/header.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/validation.js')}}"></script>
@parent
@endsection('javascript')
