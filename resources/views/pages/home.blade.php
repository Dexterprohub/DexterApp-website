@extends('layouts.app')
@section('title', 'Home | Dexterpro Limited')
@section('content')


        <div class="hero" style="background-image: url({{ "images/vector.png" }})">


            <header>
                <nav>
                    <div class="logo">
                        <img src="{{ asset('images/Dexter-logo__small.png') }}" alt="">
                        <h3>Dexter</h3>
                    </div>

                    <ul class="nav--list">
                        <a href="{{ route('home') }}"><li>Home</li></a>
                        <a href="{{ route('about') }}"><li>About</li></a>
                        <a href="{{ route('business') }}"><li>For Business</li></a>
                        <a href="{{ route('faqs') }}"><li>FAQs</li></a>
                    </ul>

        
                </nav>
            </header>

            <div class="hero--content-wrapper">
                <div class="hero--text-wrapper">
                    <div class="hero--text-title">
                        <h1>Save time Outsourcing Daily Tasks</h1>
                    </div>

                    <p>Do you have any task or chore you want done anywhere. The Dexter App    provides you with a pool of services to pick from. Get qualified service personnel assigned to your tasks in minutes

                    </p>

                    <div class="store-badges">

                    </div>
                </div>
                <div class="mobile-app-badges">
                    
                    <a href=""><img src="{{ asset('images/google-play-store-badge.png') }}" alt=""></a>
                    <a href=""><img src="{{ asset('images/apple-store-badge.png') }}" alt=""></a>
                </div>

                <div class="divider"></div>

                <div class="devices">
                    <img src="{{ asset('images/devices.png') }}" alt="">
                </div>
            </div>

        </div>

        <section class="services">

            <div class="services--text">
                <h3>Discover Our Services</h3>
                <p>We cover a whole lot of services and we are still adding more to the list</p>
            </div>

            <div class="card--wrapper-outer">

                <div class="card--wrapper-inner">
                    
                    <div class="card">
                        <img src="{{ asset('images/electrical-icon.png') }}" alt="">
                        <p>Electrical Repair</p>
                    </div>
                    <div class="card">
                        <img src="{{ asset('images/laundry-icon.png') }}" alt="">
                        <p>Laundry</p>
                    </div>
                    <div class="card">
                        <img src="{{ asset('images/food-delivery-icon.png') }}" alt="">
                        <p>Food Delivery</p>
                    </div>
                    <div class="card">
                        <img src="{{ asset('images/make-up-icon.png') }}" alt="">
                        <p>Make up</p>
                    </div>
                </div>
                <div class="card--wrapper-inner">
                    
                    <div class="card">
                        <img src="{{ asset('images/plumbing-icon.png') }}" alt="">
                        <p>Plumbing</p>
                    </div>
                    <div class="card">
                        <img src="{{ asset('images/grocery-shopping-icon.png') }}" alt="">
                        <p>Grocery Shopping</p>
                    </div>
                    <div class="card">
                        <img src="{{ asset('images/hair-styling-icon.png') }}" alt="">
                        <p>Hair Styling</p>
                    </div>
                    <div class="card">
                        <img src="{{ asset('images/fashion-design.png') }}" alt="">
                        <p>Fashion Design</p>
                    </div>
                </div>
            
               
            </div>



        </section>

        <section class="available-in">
            <h3>Currently available in:</h3>

            <div class="flag"><img src="{{ asset('images/flag.png')}}" alt=""><h4>Lagos, Nigera</h4></div>

            <span>

            <p>Our goal is to bring Dexter to as many states as possible in Nigeria. We are just getting started. <span class="green-text">Join our news letter</span> to receive updates from Dexter as soon as our services are available in your state or area</p>
            
        </section>
       
        <section class="feature">
            <div class="feature--content-wrapper">
                <div class="phone-wrapper">
                    <img src="{{ asset('images/iPhone-12.png') }}" alt="">
                </div>

                <div class="feature-content">
                    <h3>Get started with Dexter</h3>

                    <div class="feature-content-inner">
                        <div class="feature-content-list">
                            <h4> <img src="{{ asset('images/download-btn-small.png') }}" alt="">Download Dexter from the app store or playstore.</h4>

                        </div>
                        <div class="feature-content-list">
                            <h4> <img src="{{ asset('images/signup-icon.png') }}" alt="">Signup and create your profile.</h4>

                        </div>
                        <div class=" feature-content-list">
                            <h4> <img src="{{ asset('images/select.png') }}" alt="">Select your preferred service</h4>
                            <small>we might have to verify you request. You'll get notified when we match you with a service provider.</small>

                        </div>
                        <div class="feature-content-list">
                            <h4> <img src="{{ asset('images/star-icon.png') }}" alt="">Sit back and wait for your task to be completed.</h4>

                        </div>

                        <div class="mobile-app-badges-2">
                    
                            <a href=""><img src="{{ asset('images/google-play-store-badge.png') }}" alt=""></a>
                            <a href=""><img src="{{ asset('images/apple-store-badge.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('layouts._partials._feature-2')

        
@endsection