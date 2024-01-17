@extends('layout.layout')
@section('content')

@if(session()->has('error'))
  {{session()->get('error')}}
@endif
@if(session()->has('success'))
  {{session()->get('success')}}
@endif
<div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
    sign in
  </button>
  <form class="dropdown-menu p-4" method='post' action="{{route('loginpost')}}">
    @csrf
    <div class="mb-3">
      <label for="exampleDropdownFormEmail2" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com" name=email>
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormPassword2" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password" name="password">
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="dropdownCheck2">
        <label class="form-check-label" for="dropdownCheck2">
          Remember me
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
    <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="{{route('register')}}">Register</a>
  <a class="dropdown-item" href="#">Forgot password?</a>
</div>
  </form>
</div>



@endsection