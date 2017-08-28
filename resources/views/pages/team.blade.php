@extends('layouts.app')
@section('title', 'Team')
@section('content')

		<div class="pagetop">
			<img src="images/banner.jpg" alt="" />
			<div class="pagetop-inner">
				<div class="container">
					<h1>Our Team</h1>
					<ul class="breadcrumbs">
						<li><a href="#" title=""><i class="fa fa-home"></i> Home</a></li>
						<li>Team</li>
					</ul>
				</div>
			</div>
		</div><!-- PageTop -->


		<section>
			<div class="block">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="educational-staff">
								<div class="row">
									<div class="col-md-4">
									@foreach ($teams->chunk(3) as $chunk)	
										<div class="staff">
										@foreach($teams as $team)
											<div class="staff-img"><img src="http://placehold.it/300x330" alt="" /></div>
											<div class="staff-detail">
												<h4><a href="team-detail.html" title=""></a>{{ $team->name }}</h4>
												<span>{{$team->role}}</span>
												<div class="connected">
													<strong>Stay Connected</strong>
													<a href="#" title=""><i class="fa fa-facebook"></i></a>
													<a href="#" title=""><i class="fa fa-twitter"></i></a>
													<a href="#" title=""><i class="fa fa-linkedin"></i></a>
												</div>
											</div>
											@endforeach
								</div>
								@endforeach
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

