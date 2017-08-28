@extends('layouts.app')
@section('title', 'Tutorial')
@section('content')


<div class="pagetop">
			<img src="images/banner.jpg" alt="" />
			<div class="pagetop-inner">
				<div class="container">
					<h1> Tutorial videos</h1>
					<ul class="breadcrumbs">
						<li><a href="#" title=""><i class="fa fa-home"></i> Home</a></li>
						<li>Tutorial videos</li>
					</ul>
				</div>
			</div>
		</div><!-- PageTop -->


<section>	
<div class="block">	
<div class="container">
  <div class="row ">
   	<div class="container">
    <div class="col-md-8">
        <iframe width="200" height="300" src="//www.youtube.com/embed/58-atNakMWw" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class=" well col-md-4">
         <hr>
         <li>
	        <div class="col-md-4">
	        <iframe width="80" height="80" src="//www.youtube.com/embed/58-atNakMWw" frameborder="0" allowfullscreen></iframe>
	        </div> 
		    <div class="col-md-8">
		     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
		    </div> 
         </li>
           <hr>
	        <div class="col-md-12" align="center">
	          SHOW MORE
	        </div> 
    
       <ul>
    </div>    
  </div>
  </div>
 </div>
 </div> 

</section>

@stop