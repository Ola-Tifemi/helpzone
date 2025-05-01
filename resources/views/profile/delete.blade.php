@extends('layouts.site')

@section('title', 'HelpZone: Delete Account')

@section('main_content')
<div class="container">
<div class="row">
    <div class="col-md-6 col-xl-6 offset-3" style="margin-top: 200px; margin-bottom:150px">
        <h1>Delete Account</h1>

        <p>Are you sure you want to delete your account? This action is irreversible.</p>
    
        <form method="POST" action="{{ route('profile.destroy') }}">
            @csrf
            @method('DELETE')
    
            <button type="submit" class="btn btn-danger">Delete My Account</button>
        </form>
    </div>
</div>
</div>
@endsection
