@extends('layouts.site')

@section('title', 'HelpZone: Change Pasword')

@section('main_content')
    

<div class="row">
    <div class="col-md-6 col-lg-6 col-xl-6 offset-3" style="margin-top: 200px; margin-bottom:150px">
        <form method="POST" action="{{ route('profile.password.update.submit') }}">
            @csrf
            @method('PATCH') 
        
            <div class="form-group mb-3">
                <label for="current_password">Current Password</label>
                <input type="password" name="current_password" class="form-control" required>
            </div>
        
            <div class="form-group mb-3">
                <label for="password">New Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
        
            <div class="form-group mb-3">
                <label for="password_confirmation">Confirm New Password</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>
        
            <button type="submit" class="btn btn-primary">Update Password</button>
        </form>
        </div>
</div>

@endsection