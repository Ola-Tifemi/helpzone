@extends('layouts.site')

@section('title', 'HelpZone: Admin Dashboard')

@section('main_content')
<div class="row">
    <!--content -->
  <div class="col-md-12" style="margin-top: 200px; margin-bottom:150px">
    @if(session('success'))
    <div style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
        {{ session('success') }}
    </div>
    @endif
      <table class="table table-striped table-bordered border-danger table-responsive">
          <thead class="table table-dark">
              <tr>
                  <th>#</th>
                  <th>FullName</th>
                  {{-- <th>No of Posts</th> --}}
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
            @if (auth()->user()->id !== $user->id)
                
                      
              <tr>
                  <td>{{ $loop->iteration}}</td>
                  <td>{{$user->name}}</td>
                  {{-- <td>{{count($user->posts)}}</td> --}}
                 
                  <td>
                    <a href="{{ route('admin.user.toggle', $user->id) }}" 
                       class="btn {{ $user->status == 'active' ? 'btn-danger' : 'btn-success' }}">
                       {{ $user->status == 'active' ? 'Block' : 'Unblock' }}
                    </a>
                </td>
              </tr>
              @endif 
              @endforeach
          </tbody>
         
      </table>
  </div>
    <!--end content -->
 
<!--categories start -->
 <div class="col-md-3 pt-5">
      <h4>CATEGORIES</h4>
      <ul>
          <li>Travelling</li>
          <li>Food</li>
          <li>Technology</li>
      </ul>
  </div>
<!--end categories-->
</div>
@endsection