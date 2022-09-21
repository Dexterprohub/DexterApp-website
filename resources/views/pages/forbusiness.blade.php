@extends('layouts.app')
@section('title', 'Business | Dexterprolimited')
@section('content')


        <div class="hero--business" style="background-image: url({{ "images/vector.png" }})">

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
                <div class="hero--text-wrapper hero--text-wrapper-business">
                    <div class="hero--text-title">
                        <h1>Providing Services has never been easier</h1>
                    </div>

                    <p>Dexter provides you with the stage you need for your services to be known and for you to get paid. Get notified
                    when someone needs your service and climb the leader-board as you complete tasks in record time.

                    </p>

                    <div class="store-badges">

                    </div>
                </div>
                <div class="mobile-app-badges">
                    
                    <a href=""><img src="{{ asset('images/google-play-store-badge.png') }}" alt=""></a>
                    <a href=""><img src="{{ asset('images/apple-store-badge.png') }}" alt=""></a>
                </div>

        

                <div class="devices-business">

                    <img src="{{ asset('images/chart.png') }}" class="side-img" alt="">
                    <img src="{{ asset('images/woman.png') }}" class="main-img" alt="">
                    <img src="{{ asset('images/booking-card.png') }}" class="right-side-img" alt="">
                    <img src="{{ asset('images/booking-card-2.png') }}" class="right-side-img-2" alt="">
                </div>
            </div>

        </div>

        <section class="services services-business">

            <div class="services--text-business">
                <h3>List your services and get paid for it.</h3>
                <p>We cover a whole lot of services and we are still adding more to the list<p>            
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
                    <img src="{{ asset('images/iPhone-12-business.png') }}" alt="">
                </div>

                <div class="feature-content">
                    <h3>Register your service with these simple steps</h3>

                    <div class="feature-content-inner">
                        <div class="feature-content-list">
                            <h4> <img src="{{ asset('images/download-btn-small.png') }}" alt="">Download Dexter from the app store or playstore.</h4>

                        </div>
                        <div class="feature-content-list">
                            <h4> <img src="{{ asset('images/signup-icon.png') }}" alt="">Signup and create your profile.</h4>

                        </div>
                        <div class=" feature-content-list">
                            <h4> <img src="{{ asset('images/select.png') }}" alt="">Select the service you offer</h4>
                            <small>Get notified when we match you with a service request.</small>

                        </div>
                        <div class="feature-content-list">
                            <h4> <img src="{{ asset('images/star-icon.png') }}" alt="">Get paid as you complete tasks.Earn rewards when you perform your tasks well.
                            </h4>

                        </div>

                        <div class="mobile-app-badges-2">
                    
                            <a href=""><img src="{{ asset('images/google-play-store-badge.png') }}" alt=""></a>
                            <a href=""><img src="{{ asset('images/apple-store-badge.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="feature-2" style="background-image: url({{ asset('images/Vector.png') }})">

            <div class="feature-2--wrapper">

                <div class="feature-2--content-wrapper">
                    <h3>Our support team is always ready to help</h3>
                    <p>Trust and credibility is a single item on our list, our support team are a mix of supply chain experts and IT
                    professionals always ready to guide you through any concerns you may have. You won’t be having issues with Dexter but we are doing this incase...
                    </p>

                    <a href="" class="feature-2--contact-btn">Contact Us</a>
                </div>

                <div class="img-overlap">
                    <img src="{{ asset('images/hands.png') }}" alt="">
                </div>
            </div>


        </section>

      
@endsection