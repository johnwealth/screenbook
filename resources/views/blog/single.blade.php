@extends('layouts.app')
<?php $titleTag = htmlspecialchars($post->title); ?>
@section('title', " $titleTag")
@section('content')

		<div class="pagetop">
			<img src="images/banner.jpg" alt="" />
			<div class="pagetop-inner">
				<div class="container">
					<h1>Blog Details</h1>
					<ul class="breadcrumbs">
						<li><a href="index.html" title=""><i class="fa fa-home"></i> Home</a></li>
						<li><a href="blog.html" title=""> Blog</a></li>
						<li>Blog Details</li>
					</ul>
				</div>
			</div>
		</div><!-- PageTop -->


		<section>
			<div class="block">
				<div class="container">
					<div class="row">
						<div class="col-md-8"> 
					
							<div class="detail-page">
							   
								<div class="date"><img src="images/date-icon.png" alt="" />{{Date('j ', strtotime($post->created_at))}}<span>{{Date('F, Y h:i', strtotime($post->created_at))}}</span></div>
								<span class="sub-title">Our Recent News & Tips</span>
								<h1 class="post-title">{{ $post->title}}</h1>
								<ul class="meta">
									<li><span class="glyphicon glyphicon-comment"></span> {{ $post->comments()->count() }} Comments </li>
									<li>By: <a href="#" title="">Addam Smith</a></li>
									<li class="meta-tags"><i class="fa fa-tag"></i> <a href="#" title="">Trends, </a>  <a href="#" title="">Posted In: {{ $post->category->name}}</a></li>
								</ul>
								<p>{!! $post->body !!}</p>

								<div class="single-post-img"><img src="{{asset('images/'. $post->image )}}" height ="300" width="700" /></div>

								<p>Sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut lab ore et dolore magna aliquyam erat, sed diam Demo Label. Avero eos et accusam et justo duo dolores. At vero eos et accusam et justo duodolores et ea rebum. Lorem ipsum dolor sit amet conse ctuere colorado secrets Resorts & Spas offer adults. Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit.  Quisque lorem enim, dictum at magna eu, hendrerit hendrerit arcu. Etiam vulputate ac tortor ac gravida. Proin accumsan placerat rutrum. Praesent ut eros ac nisi ultrices rhoncus et.</p>


								<blockquote>Qodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum quam nunc putamus claram est usus legentis in iis qui facit eorum claritatem.</blockquote>

								<img class="alignleft" src="http://placehold.it/370x300" alt="" />

								<p>Sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut lab ore et dolore magna aliquyam erat, sed diam Demo Label. Avero eos et accusam et justo duo dolores. At vero eos et accusam et justo duodolores et ea rebum. Lorem ipsum dolor sit amet conse ctuere colorado secrets Resorts & Spas offer adults. Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat id. Vivamus interdum urna at sapien varius elementum.</p>

								<p>Elitr, sed diam nonumy eirmod tempor invidunt ut lab ore et dolore magna aliquyam erat, sed diam Demo Label. Avero eos et accusam et justo duo dolores. At vero eos et accusam et justo duodolores et ea rebum. Lorem ipsum dolor sit amet conse ctuere colorado secrets Resorts & Spas offer adults. Fusce ornare mi vel risus porttitor dignissim.</p>

								<h3>Text List Style:</h3>

								<p>Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat id. Vivamus interdum urna at sapien varius elementum. Suspendisse ut mi felis et interdum libero lacinia vel. Aenean elementum odio ut lorem cursus.</p>

								<div class="row">
									<div class="col-md-6">
										<ul>
											<li>Magna risus vehi augue</li>
											<li>Facilisis magna risus</li>
											<li>Dolor sit ametconse ctetur</li>
											<li>Ametconse ctetur adipis</li>											
										</ul>
									</div>
									<div class="col-md-6">
										<ul>
											<li>Ametconse ctetur adipis</li>
											<li>Dolor sit ametconse ctetur</li>
											<li>Facilisis magna risus</li>
										</ul>
									</div>

							</div><!-- Detail Page -->						

							<div class="tags-share">
								<div class="tags">
									<strong class="gray-small-title">Tags</strong>
									<a href="#" title="">Graphic Design,</a> <a href="#" title="">Photoshop,</a> <a href="#" title=""> Websites,</a> <a href="#" title=""> Photography,</a> <a href="#" title="">Articles</a>
								</div><!-- Tags -->

								<div class="share-post">
									<strong class="gray-small-title">Share This:</strong>
									<a href="#" title=""><i class="fa fa-tumblr"></i></a>
									<a href="#" title=""><i class="fa fa-facebook"></i></a>
									<a href="#" title=""><i class="fa fa-twitter"></i></a>
								</div><!-- Share -->
							</div><!-- Tags & Share -->

							<div class="edu-author">
								<img src="http://placehold.it/170x170" alt="" />
								<div class="author-detail">
									<h5>About The Author</h5>
									<p>Sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna ali et accusam et justo duo dolores. At vero eos et accusam et justo.</p>
								</div>
							</div><!-- Edu Author -->

							
	                         <div class="edu-comments">
								<div class="simple-title">
									<i>What You Get From Us</i>
									<h2><span>Education</span></h2>
								</div>
							     <ul>
								 <h5><span class="glyphicon glyphicon-comment"></span> {{ $post->comments()->count() }} Comments </h5>
								       @foreach($post->comments as $comment)
									<li>
										<div class="comment">
											<div class="comment-img">
												<img src="{{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) }}" alt="" />	
											<a class="reply" href="#" title="">Reply</a>
											</div>
											
											<div class="comment-detail">
												<div class="comment-name">
													<strong>{{$comment->name}}</strong>
													<i>{{Date('F, nS Y g:i A', strtotime($comment->created_at))}}</i>
												</div>
												
												<p>{{$comment->comment}}</p>
										<li>	
										<!-- Comment -->	
						   		@endforeach
							</div>
							</ul>	
					</div><!-- Edu Comments -->

                        
							
			<div class="comments-form">
				<div class="simple-title">
					<h2>Leave a Comment</h2>
				</div>
				<div class="row">
								<div id="comment-form" class ="col-md-8 md-col-offset-2"  Style ='margin-top:20px'>
									{{Form::open(['route'=>['comments.store', $post->id, 'method'=>'POST'] ]) }}
									<div class="row">
										<div class="col-md-6">
											{{ Form::label('name', 'Name:') }}
											{{ Form::text('name', null, ['class'=>'form-control']) }}
										</div>

										<div class="col-md-6">
											{{Form::label('email', 'Email:')}}
											{{Form::text('email', null, ['class'=>'form-control'])}}
										</div>
										<div class="col-md-12">
											{{Form::label('comment', 'Comment:')}}
											{{Form::textarea('comment', null, ['class'=>'form-control', 'rows'=>'4' ]) }}
										</div>
										<div class="col-md-12">
											{!! Form::submit('Comment Now!', 
											array('class'=>'button btn-success btn-block')) !!}
									</div>
									</div>

								</div>{{ Form::close() }}
							</div>

							</div>	
						</div>
						

						<aside class="col-md-3 sidebar">
							<div class="widget">
								<form class="searchform">
									<input type="text" placeholder="Enter Your keywords" />
									<button><i class="fa fa-search"></i></button>
								</form>
							</div><!-- Widget -->

							<div class="widget">
								<div class="widget-title">
									<span>What You Get From Us</span>
									<h4>Popular Posts</h4>
								</div>
								<div class="sidebar-blogs">
									<div class="sidebar-post">
										<img src="http://placehold.it/85x75" alt="" />
										<div class="post-inner">
											<h3><a href="#" title="">Students Have Enough Enjoy the Summer</a></h3>
											<span>02 November 2016</span>
										</div>
									</div>
									<div class="sidebar-post">
										<img src="http://placehold.it/85x75" alt="" />
										<div class="post-inner">
											<h3><a href="#" title="">Hard Work Is Brings Great Results Here</a></h3>
											<span>02 November 2016</span>
										</div>
									</div>
									<div class="sidebar-post">
										<img src="http://placehold.it/85x75" alt="" />
										<div class="post-inner">
											<h3><a href="#" title="">Neque porro quisqua dorem ipsum dolor</a></h3>
											<span>02 November 2016</span>
										</div>
									</div>
								</div>
							</div><!-- Widget -->

							<div class="widget">
								<div class="widget-title">
									<span>What You Get From Us</span>
									<h4>Popular Posts</h4>
								</div>
								<ul>
									<li><a href="#" title="">Log in</a></li>
									<li><a href="#" title="">Entries RSS</a></li>
									<li><a href="#" title="">Comments RSS</a></li>
									<li><a href="#" title="">WordPress.org</a></li>
								</ul>
							</div><!-- Widget -->

							<div class="widget">
								<div class="widget-title">
									<span>What You Get From Us</span>
									<h4>VIDEO WIDGET</h4>
								</div>
								<div class="video-widget">
									<div class="video-img">
										<img src="http://placehold.it/270287" alt="">
										<a class="html5lightbox" href="https://player.vimeo.com/video/1084537?title=0&amp;byline=0&amp;portrait=0" title=""><img src="images/play.png" alt=""></a>
									</div>
									<span>September 16, 2016</span>
									<h4><a href="#" title="">Tuition Is Crazy Expensive</a></h4>
								</div>
							</div><!-- Widget -->

							<div class="widget">
								<div class="widget-title">
									<span>What You Get From Us</span>
									<h4>Tags Clouds</h4>
								</div>
								<div class="tagcloud">
									<a href="#" title="">Responsive</a><a href="#" title="">Modern</a><a href="#" title="">Free</a><a href="#" title="">Business</a><a href="#" title="">Corporate</a><a href="#" title="">Really</a><a href="#" title="">Downloaded</a><a href="#" title="">Fresh</a>
								</div><!-- Tags -->							
							</div><!-- Widget -->
						</aside>
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
