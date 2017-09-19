
			
		<footer>
			<div class="container">
				<div class="footer-widgets">
					<div class="row">
						<div class="col-md-4">
							<div class="widget">
								<div class="about-widget">
									<div class="widget-logo"><a href="#" title=""><img src="/images/logo2.png" alt="" /></a>
									<p>Learning everywhere...</p>
									</div>
									
									<ul>
										<li><span><i class="fa fa-map-marker"></i></span> Isheri, Lagos State. </li>
										<li><span><i class="fa fa-envelope"></i></span> Support@screenbook.ng </li>
										<li><span><i class="fa fa-phone"></i></span> +(234) 813-6181-258 </li>
									</ul>
								</div>
							</div><!-- Widget -->
						</div>
						<div class="col-md-3">
							<div class="widget">
								<div class="widget-title">
									<h5><i>Screenbook</i> Information</h5>
									<span>Our Platform</span>
								</div>
								<ul>
									<li><a href="#" title=""><i class="fa fa-bookmark"></i> JAMB APP</a></li>
									<!--<li><a href="#" title=""><i class="fa fa-bookmark"></i> WAEC PREP</a></li>-->
									<li><a href="#" title=""><i class="fa fa-bookmark"></i> EXAM HINTS</a></li>
									<li><a href="#" title=""><i class="fa fa-bookmark"></i> FORUM</a></li>
								</ul>
							</div><!-- Widget -->
						</div>
					
						<div class="col-md-4">
							<div class="widget">
								<div class="widget-title">
									<h5><i>Screenbook</i> Newsletter</h5>
									<span>For any updates</span>
								</div>
								<div class="newsletter-widget">
									<p>ENTER YOUR EMAIL ADDRESS BELOW.</p>
									<form method="POST">   
									  
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

									   <input id="email" type="email"  placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
									 <button class="button active small">Submit Now</button>
									</form>
								</div>
							</div><!-- Widget -->
						</div>					
		</footer><!-- Footer -->

		<div class="bottom-footer">
			<div class="container">
				<p>COPYRIGHT © 2017 - <a href="#" title="">SCREENBOOK</a>. ALL RIGHTS RESERVED </p>
				<ul>
					<li><a href="index.html" title="">HOME</a></li>
					<li><a href="courses.html" title=""></a>PRACTICE TEST</li>
					<li><a href="events.html" title="">TUTORIAL VIDEOS</a></li>
					<li><a href="blog.html" title="">BLOG</a></li>
					<li><a href="contact.html" title="">ABOUT US</a></li>
				</ul>
			</div>
		</div><!-- Bottom Footer -->
	</div>

