@extends('layouts.app')
@section('title', 'Login')
@include('partials.common-header')

@section('content')

<div class="pagetop">
			<img src="images/banner.jpg" alt="" />
			<div class="pagetop-inner">
				<div class="container">
					<h1>Login</h1>
					<ul class="breadcrumbs">
						<li><a href="#" title=""><i class="fa fa-home"></i> Home</a></li>
						<li>Login</li>
					</ul>
				</div>
			</div>
		</div><!-- PageTop -->

	<section>
			<div class="block">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="registration-page">
								<div class="reg-form-wrapper">
									<div class="form-block login">
										<h2>LOGIN NOW</h2>
										<p>Fill in the form below to get instant access</p>
									 <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                        {{ csrf_field() }}

                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

									   <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
							        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        
                                    <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>

											<a class="forgot" href="{{ route('password.request') }}" title="">I Forgor My Username or Password</a>

											<button class="button small active">LOGIN</button>
										</form>
										<div class="transparent-socials">
											<a href="#" title=""><i class="fa fa-facebook"></i></a>
											<a href="#" title=""><i class="fa fa-google-plus"></i></a>
											<a href="#" title=""><i class="fa fa-twitter"></i></a>
										</div>
									</div><!-- Form Block -->
									<div class="form-block login">
										
									</div><!-- Form Block -->
								</div>
							</div><!-- Registration Page -->
						</div>
					</div>
				</div>
			</div>
		</section>		


		<section>
			<div class="block gray">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="logos-carousel">
								<a href="#" title=""><img src="http://placehold.it/145x53" alt="" /></a>
								<a href="#" title=""><img src="http://placehold.it/145x53" alt="" /></a>
								<a href="#" title=""><img src="http://placehold.it/145x53" alt="" /></a>
								<a href="#" title=""><img src="http://placehold.it/145x53" alt="" /></a>
								<a href="#" title=""><img src="http://placehold.it/145x53" alt="" /></a>
								<a href="#" title=""><img src="http://placehold.it/145x53" alt="" /></a>
								<a href="#" title=""><img src="http://placehold.it/145x53" alt="" /></a>
							</div><!-- Logos Carousel -->
						</div>
					</div>
				</div>
			</div>
		</section>
@stop
@include('partials.common-footer')
