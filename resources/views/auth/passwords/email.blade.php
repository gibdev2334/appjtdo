@extends('layouts.master')

@section('content')


<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    {{-- <img class="img-fluid" src="img/login.jpg" alt=""> --}}
                    <img class="img-fluid" src=" {{ asset ('img/login.jpg') }} " alt="">
                    
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>Reset Password</h3>
                    <form class="row login_form" id="contactForm" novalidate="novalidate"
                    {{-- rajout --}}
                    method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}

                    {{-- Email --}}

                    <div class= "col-md-12 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="text" class="form-control" name="email" placeholder=" Your Email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    
                    </div>
                        
                       
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">Send Password Reset Link</button>
                            {{-- <a href="#">Forgot Password?</a> --}}
                            {{-- <a href="{{ route('password.request') }}">Forgot Password?</a> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->



@endsection
