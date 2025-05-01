@extends('layouts.site')

@section('main_content')
<div class='text-center py-5'style="margin-top: 200px; margin-bottom:150px">
    <h1 class='display-4 text-danger'>Error 503</h1>
    <p>Service Unavailable - We�re performing maintenance. Please check back soon.</p>
    <a href='{{ url('/') }}' class='btn btn-primary mt-4'>Return Home</a>
</div>
@endsection
