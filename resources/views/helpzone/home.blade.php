@extends('layouts.site')

@section('title', 'HelpZone: HomePage')

@section('carousel')
<div class="container-fluid carousel-header vh-100 px-0">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="asset/img/carousel-1.jpg" class="img-fluid" alt="Helping Hands">
                <div class="carousel-caption">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Together, We Make a Difference</h4>
                        <h1 class="display-1 text-capitalize text-white mb-4">Support. Empower. Transform.</h1>
                        <p class="mb-5 fs-5">Join a community dedicated to changing lives through compassion, donations, and service. Every little act counts.</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn-hover-bg btn btn-primary text-white py-3 px-5" href="{{ route('register') }}">Join Us Today</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="asset/img/carousel-2.jpg" class="img-fluid" alt="Community Support">
                <div class="carousel-caption">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Be the Light in Someone’s Life</h4>
                        <h1 class="display-1 text-capitalize text-white mb-4">Give Hope Today</h1>
                        <p class="mb-5 fs-5">Your generosity fuels dreams and builds futures. Stand with us to create lasting change across communities.</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn-hover-bg btn btn-primary text-white py-3 px-5" href="{{ route('register') }}">Become a Volunteer</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="asset/img/carousel-3.jpg" class="img-fluid" alt="Hopeful Future">
                <div class="carousel-caption">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Building Stronger Communities</h4>
                        <h1 class="display-1 text-capitalize text-white mb-4">Together for a Brighter Tomorrow</h1>
                        <p class="mb-5 fs-5">At HelpZone, every hand extended, every coin donated, every smile shared leads to stronger, happier lives.</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn-hover-bg btn btn-primary text-white py-3 px-5" href="{{ route('register') }}">Support Our Mission</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

@endsection

@section('main_content')
            <!-- About Start -->
            <div class="container-fluid about py-5">
                <div class="container py-5">
                    <div class="row g-5">
                        <div class="col-xl-5">
                            <div class="h-100">
                                <img src="asset/img/about-1.jpg" class="img-fluid w-100 h-100" alt="About HelpZone">
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <h5 class="text-uppercase text-primary">About HelpZone</h5>
                            <h1 class="mb-4">Empowering Communities, One Life at a Time</h1>
                            <p class="fs-5 mb-4">
                                HelpZone is a community-driven platform dedicated to bringing hope and assistance to individuals and families in need. 
                                Our mission is simple — to connect hearts willing to give with hands that need support. 
                                Whether it’s food, shelter, education, or emotional support, we believe that small acts of kindness can create big waves of change.
                                <br><br>
                                Join us in building a world where compassion knows no bounds.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- About End -->
    
            
            <!-- Services Start -->
            <div class="container-fluid service py-5 bg-light">
                          @if (session('success'))
            <div style="background-color: #d4edda; color: #155724; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                {{ session('success') }}
            </div>
        @endif
        <div class="container py-5">
            <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                <h5 class="text-uppercase text-primary">Our Mission</h5>
                <h1 class="mb-0">How We Create Lasting Impact</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="service-item">
                        <img src="asset/img/service-1.jpg" class="img-fluid w-100" alt="Fundraising Image">
                        <div class="service-link">
                            <a href="#" class="h4 mb-0">Empowering Lives Through Donations</a>
                        </div>
                    </div>
                    <p class="my-4">We raise funds to support critical needs like education, healthcare, and shelter for vulnerable communities, ensuring every donation makes a direct impact.</p>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="service-item">
                        <img src="asset/img/service-2.jpg" class="img-fluid w-100" alt="Collaboration Image">
                        <div class="service-link">
                            <a href="#" class="h4 mb-0">Collaborating With Local Heroes</a>
                        </div>
                    </div>
                    <p class="my-4">We work closely with community leaders and service providers to identify real needs and deliver practical solutions where they matter most.</p>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="service-item">
                        <img src="asset/img/service-3.jpg" class="img-fluid w-100" alt="Education Image">
                        <div class="service-link">
                            <a href="#" class="h4 mb-0">Guiding Change Through Education</a>
                        </div>
                    </div>
                    <p class="my-4">Through workshops, training programs, and mentorship, we empower individuals with the knowledge and tools to transform their future.</p>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="service-item">
                        <img src="asset/img/service-4.jpg" class="img-fluid w-100" alt="Protection Image">
                        <div class="service-link">
                            <a href="#" class="h4 mb-0">Protecting Hope and Dignity</a>
                        </div>
                    </div>
                    <p class="my-4">Every action we take safeguards the rights, dignity, and dreams of those we serve — ensuring that no one is left behind.</p>
                </div>
            </div>
        </div>
        
            <!-- Services End -->
    
    
           <!-- Donation Start -->
            <div class="container-fluid donation py-5">
                <div class="container py-5">
                    <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                        <h5 class="text-uppercase text-primary">Donation</h5>
                        <h1 class="mb-0">Your Gift Can Change Lives</h1>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-4">
                            <div class="donation-item">
                                <img src="asset/img/donation-1.jpg" class="img-fluid w-100" alt="Organic Support">
                                <div class="donation-content d-flex flex-column">
                                    <h5 class="text-uppercase text-primary mb-4">Organic Support</h5>
                                    <a href="#" class="btn-hover-color display-6 text-white">Be A Changemaker</a>
                                    <h4 class="text-white mb-4">Provide Fresh Meals</h4>
                                    <p class="text-white mb-4">
                                        Your donation helps us deliver fresh, nutritious food to families in need, ensuring no one goes hungry.
                                    </p>
                                    <div class="donation-btn d-flex align-items-center justify-content-start">
                                        <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="{{ route('login') }}">Donate Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="donation-item">
                                <img src="asset/img/service-2.jpg" class="img-fluid w-100" alt="Community Support">
                                <div class="donation-content d-flex flex-column">
                                    <h5 class="text-uppercase text-primary mb-4">Community Relief</h5>
                                    <a href="#" class="btn-hover-color display-6 text-white">Help Us Rebuild</a>
                                    <h4 class="text-white mb-4">Support Displaced Families</h4>
                                    <p class="text-white mb-4">
                                        We provide emergency shelters and basic supplies to families affected by disasters and crises.
                                    </p>
                                    <div class="donation-btn d-flex align-items-center justify-content-start">
                                        <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="{{ route('login') }}">Donate Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="donation-item">
                                <img src="asset/img/donation-3.jpg" class="img-fluid w-100" alt="Education Support">
                                <div class="donation-content d-flex flex-column">
                                    <h5 class="text-uppercase text-primary mb-4">Future Builders</h5>
                                    <a href="#" class="btn-hover-color display-6 text-white">Inspire Hope</a>
                                    <h4 class="text-white mb-4">Fund Education</h4>
                                    <p class="text-white mb-4">
                                        Education transforms lives. Help us sponsor school fees, materials, and mentorship for underprivileged children.
                                    </p>
                                    <div class="donation-btn d-flex align-items-center justify-content-start">
                                        <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="{{ route('login') }}">Donate Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Donation End -->

                
    
            <!-- Counter Start -->
            <div class="container-fluid counter py-5" style="background: linear-gradient(rgba(0, 0, 0, .4), rgba(0, 0, 0, 0.4)), url(asset/img/volunteers-bg.jpg) center center; background-size: cover;">
                <div class="container py-5">
                    <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                        <h5 class="text-uppercase text-primary">Achievements</h5>
                        <p class="text-white mb-0">
                            Thanks to your support, we are making a real difference. Every life saved, every meal provided, every dream empowered — it's all because of YOU. Together, we're building a better tomorrow.
                        </p>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-4 col-lg-4 col-xl-4">
                            <div class="counter-item text-center border p-5">
                                <i class="fas fa-thumbs-up fa-4x text-white"></i>
                                <h3 class="text-white my-4">Beavers Saved</h3>
                                <div class="counter-counting">
                                    <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">3600</span>
                                    <span class="h1 fw-bold text-primary">+</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xl-4">
                            <div class="counter-item text-center border p-5">
                                <i class="fas fa-file-invoice-dollar fa-4x text-white"></i>
                                <h3 class="text-white my-4">Funds Raised</h3>
                                <div class="counter-counting text-center border-white w-100" style="border-style: dotted; font-size: 30px;">
                                    <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">{{ number_format($totalPayments, 2) }}</span>
                                    <span class="h1 fw-bold text-primary">₦</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xl-4">
                            <div class="counter-item text-center border p-5">
                                <i class="fas fa-user fa-4x text-white"></i>
                                <h3 class="text-white my-4">Active Donors</h3>
                                <div class="counter-counting text-center border-white w-100" style="border-style: dotted; font-size: 30px;">
                                    <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">{{ $totalUsers }}</span>
                                    <span class="h1 fw-bold text-primary">+</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="{{route('register')}}">Join With Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Counter End -->

@endsection