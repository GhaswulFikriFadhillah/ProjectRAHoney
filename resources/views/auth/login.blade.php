@extends('layouts.loginpage')

@section('title', 'Login')

@section('content')
<div class="content-wrapper d-flex align-items-center auth px-0">
  <div class="row w-100 mx-0">
    <div class="col-lg-4 mx-auto">
      <div class="auth-form-light text-left py-5 px-4 px-sm-5">
        <div class="brand-logo">
          <img src="{{ asset('skydash/images/logo.svg')}}" alt="logo">
        </div>
        <h4>Hello! Let's get started</h4>
        <h6 class="font-weight-light" ><a href="{{ asset('/landing') }}">Click here to landingpage</a></h6>
        <form method="POST" action="{{ route('login') }}" class="pt-3">
          @csrf
          <div class="form-group">
            <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" required>
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required>
          </div>
          <div class="mt-3">
            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
