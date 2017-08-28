
@extends('layouts.app')
@section('title', 'Blog')
@section('content')

		<div class="pagetop">
			<img src="images/banner.jpg" alt="" />
			<div class="pagetop-inner">
				<div class="container">
					<h1> Blog Post</h1>
					<ul class="breadcrumbs">
						<li><a href="#" title=""><i class="fa fa-home"></i> Home</a></li>
						<li>Blog</li>
					</ul>
				</div>
			</div>
		</div><!-- PageTop -->

		<section>
			<div class="block">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="edu-blog">
								<div class="row row-fluid">
									@foreach ($posts->chunk(3) as $chunk)	
									<div class="post-detail">
									@foreach ( $chunk as $post )
										<div class="col-md-4 class="edu-post" >
											<div class="post-img"><img src="http://placehold.it/200x150" alt="" /></div>
											 <div class="post-detail ">
												<span>{{Date('F j, Y h:i', strtotime($post->created_at))}}</span>
												<h3><a href="{{ url($post->slug) }}" title="">{{ $post->title}}</a></h3>
												<ul class="meta">
													<li><a href="#" title="">03 Comment</a></li>
													<li>By: Addam Smith</li>
												</ul>
												<p>{{ substr(strip_tags($post->body), 0 , 100)}} {{ strlen(strip_tags($post->body)) > 30 ? "..." : " "}}</p>
												<a href="{{ url('blog/' . $post->slug)}}" class = "btn  btn-primary btn-sm">Read more</a>
											</div>
										</div><!-- Edu Post -->
									@endforeach
									</div>
							     @endforeach

						</div><!-- Edu Post -->
					</div>
				</div>
			</div><!-- Edu Blog -->
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

