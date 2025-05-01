@extends('layouts.site')

@section('title', 'HelpZone: Contact Us')

@section('main_content')
<div class="container-fluid bg-light py-5">
    <div class="container py-5">
        <div class="contact p-5">
            @if (session('success'))
            <div style="background-color: #d4edda; color: #155724; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                {{ session('success') }}
            </div>
        @endif
            <div class="row g-4">
                <div class="col-xl-5" style="margin-top: 200px; margin-bottom:150px">
                    <h1 class="mb-4">Get in touch</h1>
                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="row gx-4 gy-3">
                            <div class="col-xl-6">
                                <input type="text" name="name" class="form-control bg-white border-0 py-3 px-4" placeholder="Your First Name">
                            </div>
                            <div class="col-xl-6">
                                <input type="email" name="email" class="form-control bg-white border-0 py-3 px-4" placeholder="Your Email">
                            </div>
                            <div class="col-xl-6">
                                <input type="text" name="phone" class="form-control bg-white border-0 py-3 px-4" placeholder="Your Phone">
                            </div>
                            <div class="col-xl-6">
                                <input type="text" name="subject" class="form-control bg-white border-0 py-3 px-4" placeholder="Subject">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-white border-0 py-3 px-4" name="message" rows="7" cols="10" placeholder="Your Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn-hover-bg btn btn-primary w-100 py-3 px-5" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-7">
                    <div>
                        <div class="row g-4">
                            <div class="col-lg-4">
                                <div class="bg-white p-4">
                                    <i class="fas fa-map-marker-alt fa-2x text-primary mb-2"></i>
                                    <h4>Address</h4>
                                    <p class="mb-0">123 street New York</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="bg-white p-4">
                                    <i class="fas fa-envelope fa-2x text-primary mb-2"></i>
                                    <h4>Mail Us</h4>
                                    <p class="mb-0">info@example.com</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="bg-white p-4">
                                    <i class="fa fa-phone-alt fa-2x text-primary mb-2"></i>
                                    <h4>Telephone</h4>
                                    <p class="mb-0">(+012) 3456 7890 123</p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <iframe class="w-100" style="height: 412px; margin-bottom: -6px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.33750346623!2d-73.97968099999999!3d40.6974881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1694259649153!5m2!1sen!2sbd" 
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection