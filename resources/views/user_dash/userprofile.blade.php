@extends('layouts.site')

@section('title', 'HelpZone: My Dashboard')

@section('main_content')
<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-md-6 col-lg-6 col-xl-6 offset-3 mb-4">
            <h4 class="text-secondary text-uppercase " style="letter-spacing: 3px;">We'll Save Our Planet</h4>
            <h3 class="display-1 text-capitalize text-primary mb-4">Welcome {{ auth()->user()->name }}</h3>
            <p class="mb-5 fs-5">Your contributions are highly appreciated. Total Donations (₦{{ number_format($totalPayments, 2) }})</p>
        </div>
    </div>
    
    @if (session('success'))
    <div class="alert alert-success" style="padding: 15px; border-radius: 8px; margin-bottom: 20px;">
        {{ session('success') }}
    </div>
    @endif
    
    <div class="row">
        <div class="col-md-3 offset-1">
            @if (auth()->user()->dp)
                <img src="/profiles/{{ auth()->user()->dp }}" alt="{{ auth()->user()->name }}" style="width:180px; border-radius:50%;" class="img-fluid mb-5 ms-3 mx-3">
            @else
                <img src="/profiles/male_avatar.png" alt="Default Avatar" style="width:180px; border-radius:50%;" class="img-fluid mb-5 ms-3 mx-3">
            @endif
        </div>
        <div class="col-md-8">
            <h4>Hi, <b>{{ auth()->user()->name }}</b></h4>
            <p>We are thrilled to have you on this journey with us!</p>
            <p>Your contributions are highly appreciated and welcomed.</p>
            <p>Click the button below to make an eco-impact today!</p>
            <div class="d-flex align-items-center justify-content-center">
                <a class="btn-hover-bg btn btn-primary text-white py-3 mb-4 px-5" href="{{ route('payment.form') }}">Initialize Donations Here</a>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="latest-payments mt-5">
                <h3 class="mb-4">Your Donations</h3>
    
                @if($payments->count())
                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th>S/N</th>
                                    <th>Reference</th>
                                    <th>Amount (₦)</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($payments as $payment)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $payment->reference }}</td>
                                        <td>{{ number_format($payment->amount, 2) }}</td>
                                        <td>
                                            @if($payment->status == 'completed')
                                                <span class="badge bg-success">Completed</span>
                                            @else
                                                <span class="badge bg-warning text-dark">{{ ucfirst($payment->status) }}</span>
                                            @endif
                                        </td>
                                        <td>{{ $payment->created_at->format('d M, Y') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <p class="text-muted">You have not made any donations yet.</p>
                @endif
                <div class="d-flex justify-content-center mt-4 mb-3">
                    <a href="{{ route('donations.download') }}" class="btn btn-outline-primary">
                        <i class="fas fa-file-download me-2"></i> Download Donations as PDF
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
