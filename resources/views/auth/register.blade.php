@section('title', 'Register')

@extends('layouts.default')

@section('content')

<link href="{{ asset('register.css') }}" rel="stylesheet">

<div class="main" style="">
        <nav class="">
            <div class="container-fluid">
              <a href="/" style="text-decoration: none">
                <h1 class="logo">Tasanesia</h1>
              </a>
            </div>
        </nav>
        <div class="content">
            <div class="container">
                <div class="card" style="width: 23rem;">
                  <div class="card-title">
                    <a class="btn" href="/" style="" type="close"><i class="far fa-times-circle"></i></a>
                  </div>
                    <div class="card-body">
                    <form method="POST" action="{{route('registers.store')}}">
                    @csrf
                    <div class="row">
                            <div class="col-md-12">
                                <h4>Create An Account</h4>
                            </div>
                            <div class="col1">
                                <p class="text2">Already an user? <a href="" style="border: none; color: #315343;">Sign in</a> </p>
                            </div>
                        </div>
                        <div class="row">
                            <div  style="margin-top: -17px !important;">
                                <div class="mb-1">
                                    <label for="exampleFormControlInput1" class="form-label"></label>
                                    <input id="name" type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus autocomplete="name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                  </div>
                            </div>
                        <!-- </div>
                            <div class="col-md-6"  style="margin-top: -17px !important;">
                                <div class="mb-1">
                                    <label for="exampleFormControlInput1" class="form-label"></label>
                                    <input type="input" class="form-control" id="exampleFormControlInput1" placeholder="Last Name">
                                  </div>
                            </div>
                        </div> -->

                        <form action="{{route('registers.store')}}" method="POST">
                          {{ csrf_field() }}
                        <div class="mb-1" style="margin-top: -17px !important;">
                          <label for="exampleFormControlInput1" class="form-label"></label>
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">
                          @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="mb-1" style="margin-top: -17px !important;">
                          <label for="exampleFormControlInput1" class="form-label"></label>
                          <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="Phone number" required autocomplete="phone">
                          @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-1" style="margin-top: -17px !important;">
                          <label for="exampleFormControlInput1" class="form-label"></label>
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                          @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="mb-3" style="margin-top: -17px !important;">
                          <label for="exampleFormControlInput1" class="form-label"></label>
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password">
                        </div>
                        
                        <div class="mb-3" style="margin-top: -2px !important;">
                        <select class="form-control" name="role" id="role">
                          <option><a href="#" class="btn dropdown-toggle">Role</a></option>
                          <option value="petani">Petani</option>
                          <option value="institusi">Institusi</option>
                          <option value="pembina">Pembina</option>
                          <option value="donatur">Donatur</option>
                        </select>
                        </div>

                        </form>
                        <button type="submit" class="btn" href="home-page.html" style=" color: white; background-color: #315343; font-size: 15px; width: 100%;">{{ __('Register') }}</button>
                      </div>
                    </div>
                    </form>
                  </div>
            </div>
        </div>
    </div>
@endsection