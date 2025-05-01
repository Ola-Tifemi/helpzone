@extends('layouts.site')

@section('title', 'HelpZone: Payment')

@section('main_content')

<div class="row " style="margin-top: 120px; margin-bottom:285px">
    <div class="col-md-6 col-lg-6 mt-5 col-xl-6 offset-3">
        <form action="{{ route('payment.process') }}" method="POST">
    @csrf
    <h4>All Payments are secured and smooth..</h4>
    <div class="form-group mb-3">
        <input type="email" name="email" value="{{auth()->user()->email}}">
    </div>
    <div class="form-group mb-3">
        <label for="amount">Enter Amount</label>
        <input type="number" id="amount" name="amount" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit Payment</button>
</form>
    </div>
</div>
@endsection