@extends('layouts.site')

@section('title', 'HelpZone: Services')

@section('main_content')
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