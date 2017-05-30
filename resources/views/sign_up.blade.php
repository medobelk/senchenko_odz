@extends('layouts.master')

@section('page_styles')

	<link rel="stylesheet" type="text/css" href="css/avenue-sign_up.css">

@endsection 

@section('content')

	<div class="body">	

		<div class="container auth">
			<div class="row">				
				<form  role="form" method="POST" action="{{ route('login') }}">
					{{ csrf_field() }}
					<div class="col-lg-6 sign-in-col">
						<h3>Sign In</h3>
						<div class="clearfix {{ $errors->has('email') ? ' has-error' : '' }}">
							<input class="col-lg-12" id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Your Email..">
							@if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>    
                        <div class="clearfix {{ $errors->has('password') ? ' has-error' : '' }}">    
							<input class="col-lg-12" id="password" type="password" name="password" placeholder="Your Password..">
							@if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
						</div>
                        <div class="checkbox-remember clearfix sign-in-active">
                            <input class="pull-left" id="remember-me" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 
                            <label for="remember-me">Remember Me</label>                             
                        </div>
                        <div class="col-lg-12 sign-in-active">
                            <button class="btn btn-large pull-left" type="submit">Sign In</button>
							<a class="pull-right" href="{{ route('password.request') }}">Forgot your Password 
								<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
							</a>   
						</div>                 								
					</div>
				</form>	
				<form role="form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
					<div class="col-lg-6 register-col">
						<h3>Register</h3>
						<div class="clearfix {{ $errors->has('email') ? ' has-error' : '' }}">
							<input id="email" type="email" name="email" value="{{ old('email') }}" required class="col-lg-12" placeholder="Your Email..">
							@if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
						</div>
						<div class="clearfix {{ $errors->has('name') ? ' has-error' : '' }}">
							<input id="name" type="text" name="name" value="{{ old('name') }}" required class="col-lg-12" placeholder="Your Name..">
							@if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
						</div>

						

						<div class="clearfix {{ $errors->has('password') ? ' has-error' : '' }}">
							<input id="password" type="password" name="password" required class="col-lg-12" placeholder="Your Password..">	
							@if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
						</div>
						
						<div class="clearfix">
							<input id="password-confirm" type="password" name="password_confirmation" required class="col-lg-12" placeholder="Confirm Password..">
						</div>
						
						<!-- <div class="register-agreement clearfix">
							<input class="agreement" id="news-subscription" type="checkbox" name="news_subscription">
							<label class="pull-right" for="news-subscription">Sign up for exclusive updates, discounts, new arrivals, contests, and more!</label>
						</div> -->
						<div class="register-active">
							<button type="submit" class="btn btn-large">Create account</button>
							<span>By clicking ‘Create Account’, you<br> agree to our <a href="#">Privacy Policy <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></span>
						</div>
					</div>
					@if($errors->any())
                @foreach($errors->all() as $error)
                    {{ $error }}
                @endforeach
        </div>
        @endif
				</form>	
			</div>
		</div>

	</div>	

@endsection