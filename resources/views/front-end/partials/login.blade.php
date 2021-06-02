@extends('front-end.layouts.master')

@section('content')
<section class="body-sign">
            <div class="center-sign">
                <a href="{{ url('/') }}" class="logo float-left">
                    <img src="{{asset('img/logol.png')}}" height="66" alt="Porto Admin" />
                </a>

                <div class="panel card-sign">
                    <div class="card-title-sign mt-3 text-right">
                        <h2 class="title text-uppercase font-weight-bold m-0"><i class="fas fa-user mr-1"></i> Sign In</h2>
                    </div>
                    <div class="card-body">
                        <form  action="{{ route('login') }}" method="post">
                             @csrf
                            <div class="form-group mb-3">
                                <label>Email</label>
                                <div class="input-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    <span class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                               
                            <div class="form-group mb-3">
                                <div class="clearfix">
                                    <label class="float-left">Password</label>
                                </div>
                                    <a href="{{url('/password/reset')}}" class="float-right">Forget Password?</a>
                                <div class="input-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    <span class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-8">
                                 <span>Have not account </span><a href="{{ route('register') }}" >Sign Up</a>
                                </div>
                                <div class="col-sm-4 text-right">
                                    <button type="submit" class="btn btn-primary" >
                                    {{ __('Login') }}
                                </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </section>
        @endsection