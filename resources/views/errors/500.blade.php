@extends('layouts.site')

@section('main_content')
<div class='text-center py-5' style="margin-top: 200px; margin-bottom:150px">
    <h1 class='display-4 text-danger'>Error 500</h1>
    <p>Internal Server Error - Something went wrong on our end.</p>
    <a href='{{ url('/') }}' class='btn btn-primary mt-4'>Return Home</a>
</div>
@endsection
