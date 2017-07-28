@extends('layouts.app')
@section('title', 'Register')
@include('partials.common-header')
@section('content')

<section>
<div class="pagetop">
			<img src="images/banner.jpg" alt="" />
			<div class="pagetop-inner">
				<div class="container">
					<h1>Register</h1>
					<ul class="breadcrumbs">
						<li><a href="#" title=""><i class="fa fa-home"></i> Home</a></li>
						<li>Register</li>
					</ul>
				</div>
			</div>
		</div><!-- PageTop -->
			<div class="block">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="registration-page">
								<div class="reg-form-wrapper">
									<div class="form-block login">
										
									</div><!-- Form Block -->
									  <div class="form-block login">
                    <h2>REGISTER NOW</h2>
                    <p>Fill in the form below to get instant access</p>
                       <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input id="name" type="text" placeholder ="Username" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" placeholder ="Email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" placeholder ="Password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div> 
                        <div class="form-group">
                                <input id="password-confirm"  placeholder ="Comfirm Password" type="password" class="form-control" name="password_confirmation" required>
                        </div>

                        <div class="form-group">
                                <button class="button small active" type="submit">Registor Now</button>
                        </div>
                    </form>
									</div><!-- Form Block -->
								</div>
							</div><!-- Registration Page -->
						</div>
					</div>
				</div>
			</div>
		</section>		

@endsection
@include('partials.common-footer')
