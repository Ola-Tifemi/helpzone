@extends('layouts.site')

@section('title', 'HelpZone: About Us')


@section('main_content')

       <!-- About Start -->
        <div class="container-fluid about mt-5 py-5">
            <div class="container mt-3 py-5">
                <div class="row g-5">
                    <div class="col-xl-5 col-md-5">
                        <div class="h-100 bg-primary">
                            <img src="asset/img/about-1.jpg" class="img-fluid w-100 h-100" alt="Image">
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <h1 class="text-uppercase text-primary">About Us</h1>
                        <h3 class="mb-4">Our main goal is to protect the Environment</h3>
                        <p class="fs-5 mb-4">
                            We are a passionate organization committed to preserving the natural world. Our journey started with a simple belief — that every small action can lead to big change. Through conservation programs, education, and community partnerships, we work tirelessly to protect ecosystems and inspire environmental stewardship for generations to come.
                        </p>
                        <div class="tab-class bg-secondary p-4">
                            <ul class="nav d-flex mb-2">
                                <li class="nav-item mb-3">
                                    <a class="d-flex py-2 text-center bg-white active" data-bs-toggle="pill" href="#tab-1">
                                        <span class="text-dark" style="width: 150px;">About</span>
                                    </a>
                                </li>
                                <li class="nav-item mb-3">
                                    <a class="d-flex py-2 mx-3 text-center bg-white" data-bs-toggle="pill" href="#tab-2">
                                        <span class="text-dark" style="width: 150px;">Mission</span>
                                    </a>
                                </li>
                                <li class="nav-item mb-3">
                                    <a class="d-flex py-2 text-center bg-white" data-bs-toggle="pill" href="#tab-3">
                                        <span class="text-dark" style="width: 150px;">Vision</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane fade show p-0 active">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex">
                                                <div class="text-start my-auto">
                                                    <h5 class="text-uppercase mb-3">Who We Are</h5>
                                                    <p class="mb-4">
                                                        We are a community of changemakers, activists, and nature lovers dedicated to making the planet healthier and more resilient. From wildlife conservation to eco-friendly campaigns, we believe in action and advocacy that leaves a lasting impact.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-2" class="tab-pane fade show p-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex">
                                                <div class="text-start my-auto">
                                                    <h5 class="text-uppercase mb-3">Our Mission</h5>
                                                    <p class="mb-4">
                                                        Our mission is to protect and restore the Earth's ecosystems by empowering communities, advocating for sustainable practices, and inspiring responsible stewardship of our natural resources.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-3" class="tab-pane fade show p-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex">
                                                <div class="text-start my-auto">
                                                    <h5 class="text-uppercase mb-3">Our Vision</h5>
                                                    <p class="mb-4">
                                                        We envision a future where people live in harmony with nature — where clean air, thriving wildlife, and healthy forests are cherished by all, and future generations inherit a vibrant and sustainable planet.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end tab-3 -->
                            </div> <!-- end tab-content -->
                        </div> <!-- end tab-class -->
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->



        <!-- Volunteers Start -->
        <div class="container-fluid volunteer py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-5">
                        <div class="row g-4">
                            @foreach ($users as $user)
                            <div class="col-lg-6">
                                <div class="volunteer-img">
                                    <img src="./profiles/{{ $user->dp }}" class="img-fluid" alt="Image" style="width: 210px; max-height:200px; object-fit: cover;">
                                    <div class="volunteer-title">
                                        <h5 class="mb-2 text-white">{{$user->name}}</h5>
                                        <p class="mb-0 text-white">Master Donor!</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h5 class="text-uppercase text-primary">Become a Donor</h5>
                        <h1 class="mb-4">Join hands with us for a better life and a beautiful future.</h1>
                        <p class="mb-4">
                            Your support can make a real difference. By joining us, you are helping protect our environment, restore natural habitats, and create a greener, healthier planet for future generations. Together, we can build a sustainable world where nature thrives.
                        </p>
                        <p class="text-dark"><i class="fa fa-check text-primary me-2"></i> We foster a supportive and welcoming community.</p>
                        <p class="text-dark"><i class="fa fa-check text-primary me-2"></i> Your contribution helps protect vulnerable ecosystems.</p>
                        <p class="text-dark"><i class="fa fa-check text-primary me-2"></i> No minimum donation required — every effort counts.</p>
                        <p class="text-dark mb-5"><i class="fa fa-check text-primary me-2"></i> Joining is completely free and easy.</p>
                        <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="{{route('register')}}">Join With Us</a>
                    </div>   
                </div>
            </div>
        </div>
        <!-- Volunteers End -->
@endsection