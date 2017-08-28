@extends('layouts.app')
@section('title', 'Contact')
@section('content')



<section>
<div class="pagetop">
			<img src="images/banner.jpg" alt="" />
			<div class="pagetop-inner">
				<div class="container">
					<h1>Contact Us</h1>
					<ul class="breadcrumbs">
						<li><a href="#" title=""><i class="fa fa-home"></i> Home</a></li>
						<li>Contact</li>
					</ul>
				</div>
			</div>
		</div><!-- PageTop -->
			<div class="block grayish">
			<div class="fixed-bg bg5"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-5">
							<h4 class="traditional-title">Get In Touch</h4>
							<div class="touch">
								<p>If you are interested in working with us, please get in touch.</p>
								<ul>
									<li>
										<span><img src="images/icon1.png" alt="" /></span>
										<p>Isheri Lagos, Nigeria </p>
									</li>
									<li>
										<span><img src="images/icon2.png" alt="" /></span>
										<p><strong>(+234) 0813-618-1285 <i>- Central Office</i></strong><p>
									</li>
									<li>
										<span><img src="images/icon3.png" alt="" /></span>
										<p><strong>info@screenbook.ng</strong></p>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-md-7">
							<h4 class="traditional-title">CONTACT FORM</h4>
													<form class="contact-form"action ="{{ url('contact') }}" method ="POST"  >
							{{ csrf_field() }}
						
									<div class="col-md-6">
										<input placeholder="Email Address" name = "email" type="email">
										<input placeholder="Subject" name ="Subject" type="text">
									</div>
									<div class="col-md-6"><textarea name ="message" placeholder="Message Detail"></textarea></div>
									<div class="col-md-12"><button class="full-btn button active">Send Message</button></div>
								</div>
							</form>
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


@endsection



	

