@extends('layouts.site')

@section('title', 'HelpZone: Upload DP')

@section('main_content')
<div class="conatiner-fluid ">
    <div class="row mt-5">
        <div class="col-md-6 offset-3 mt-5 px-4">
            <form action="{{ route('upload_dp')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-2 mt-5 text-primary">
                    <label for="dp" >Upload Profile Picture</label>
                    <input type="file" name="dp" id="dp" class="form-control border-dark">
                </div>
                <button class="btn btn-primary mb-4">Upload</button>
            </form>
        </div>
</div>

@endsection