<footer>
            <div class="newsletter--wrapper">
                <div class="newsletter--content-wrapper">
                    <div class="newsletter--content">
                        <h1>Stay updated with our Newsletter</h1>
                        <p>Be the first to receive our latest news, updates and everything in between.</p>

                    </div>

                </div>
                <div class="input--wrapper">
                    <input id="landing-input" type="text" placeholder="Email">
                    <input id="landing-input-btn" type="submit" value="Sign Up">
                </div>
            </div>
            <div class="company-info">
                <div class="logo">
                    <img src="{{ asset('images/Dexter-logo__small.png') }}" alt="">
                    <h3>Dexter</h3>
                </div>
                <small>© 2022 Dexterpro Limited. All rights reserved.</small>

                <div class="social-icons">
                    <img src="{{ asset('images/Instagram.png') }}" alt="">
                    <img src="{{ asset('images/Twitter.png') }}" alt="">
                    <img src="{{ asset('images/Youtube.png') }}" alt="">
                    <img src="{{ asset('images/linkedin.png') }}" alt="">

                </div>
               <div class="mobile-app-badges-2">
                    
                    <a href=""><img src="{{ asset('images/google-play-store-badge.png') }}" alt=""></a>
                    <a href=""><img src="{{ asset('images/apple-store-badge.png') }}" alt=""></a>
                </div>
            </div>

            <div class="quick-links">
                <div class="col-3">
                    <h4>Quick Links</h4>
                    <ul class="col-list">
                        <a href=""><li>About</li></a>
                        <a href=""><li>For Business</li></a>
                        <a href=""><li>Contact</li></a>
                        <a href=""><li>FAQs</li></a>
                        <a href="{{ route('terms') }}"><li>Terms of Service</li></a>
                        
                    </ul>
                </div>

                <div class="col-5">
                    <h4>Contact</h4>
                    <ul class="col-list">
                        <li><img src="{{ asset('images/24-support-icon.png') }}" alt="">support@dexterapp.com</li>
                        <li><img src="{{ asset('images/headphone-icon.png') }}" alt="">+123456789</li>
                        <li><img src="{{ asset('images/location-icon.png') }}" alt="">33b, Jay Jay Oladimeji Close, off. Freedom Way, Ikate Lekki, Lagos State</li>

                    </ul>
                </div>
            </div>
        </footer>