 <div class="theme-layout">
    <header>
      <div class="container">
        <div class="logo"><a href="{{route('welcome')}}" title=""><img src="/images/logo.PNG" alt="" /></a></div>
        <div class="header-wrap">
          <div class="topbar">
            <span>For Free Consultation: <i>+(234) 813-6181-258 </i></span>
             <span>
              Stay Connected: 
              <span class="socials">
                <a href="#" title=""><i class="fa fa-facebook"></i></a>
                <a href="#" title=""><i class="fa fa-twitter"></i></a>
                <a href="#" title=""><i class="fa fa-linkedin"></i></a>
              </span>
            </span>

            
    <div class="registration">                         
                        @if (Auth::guest())
                            <a href="{{ route('login') }}">Login</a>
                            <a href="{{ route('register') }}">Register</a>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                          <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <a href="{{route('posts.index')}}">Posts</a>
                                         <a href="{{route('categories.index')}}">Category</a>
                                          <a href="{{route('tags.index')}}">Tags</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </div>
   </div><!-- Top Bar -->
        
  
 
       <div class="menubar">
         <nav>
            <ul>
                <li><a href="/" title="">Home</a> </li>
                <li><a href="#" title="">Practice Test</a>
                    <ul>
                        <li><a href="#" title="">JAMB Cbt</a></li>
                        <li><a href="#" title="">Waec Exam</a></li>
                        <li><a href="#" title="">Neco Exam</a></li>
                    </ul>  
                </li>
               <li><a href="{{route('tutorial')}}" title=""> Video Aids</a>
                    <!--   <ul>
                        <li><a href="#" title="">Jamb Test</a></li>
                    <li><a href="#" title="">Waec</a></li>
                    </ul> -->
              </li>
              <li><a href="{{route('blog')}}" title="">Blog</a> </li>
              <li><a href="#" title="">About Us</a>
                 <ul>
                    <li><a href="#" title="">Vission & Mission</a></li>
                    <li><a href="{{route('team')}}" title="">Our Team</a></li>
                    <li><a href="{{route('contact')}}" title="">Contact Us</a></li>
                 </ul>
              </li>
         </nav>
      </div>
  </header> 
 <!-- Header Wrap -->


 <!-- Responsive -->
  <div class="responsive-header">
    <div class="topbar">
       <span>For Free Consultation: <i>+(234) 813-6181-258</i></span>
     <span>
       Stay Connected: 
     <span class="socials">
            <a href="#" title=""><i class="fa fa-facebook"></i></a>
            <a href="#" title=""><i class="fa fa-twitter"></i></a>
            <a href="#" title=""><i class="fa fa-linkedin"></i></a>
     </span>
    </span>

    <div class="registration">
      <!-- Authentication Links -->
                         
                        @if (Auth::guest())
                            <a href="{{ route('login') }}">Login</a>
                            <a href="{{ route('register') }}">Register</a>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                         <a href="{{route('posts.index')}}">Posts</a>
                                          <a href="{{route('categories.index')}}">Category</a>
                                          <a href="{{route('tags.index')}}">Tags</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </div>
   </div><!-- Top Bar -->

   <div class="responsive-logobar">
       <div class="responsive-logo"><a href="{{route('welcome')}}" title=""><img src="images/logo.PNG" alt="" /></a></div>
       <a class="menu-button" href="#" title=""><i class="fa fa-bars"></i></a>
    </div><!-- Responsive Logbar -->
     <div class="responsive-menu">
      <a class="close-menu" href="#" title=""><i class="fa fa-remove"></i></a>
     <ul>
        <li><a href="/index" title="">Home</a> </li>
        <li><a href="#" title="">Practice Test</a>
              <ul>
                <li><a href="#" title="">JAMB Cbt</a></li>
                <li><a href="#" title="">Waec Exam</a></li>
                <li><a href="#" title="">Neco Exam</a></li>
             </ul> 
        </li>
        <li><a href="{{route('tutorial')}}" title=""> Video Aids</a>
            <ul>
                <li><a href="gallery1.html" title="">Jamb Test</a></li>
                <li><a href="gallery2.html" title="">Waec</a></li>
            </ul>
        </li>
          <li><a href="{{route('blog')}}" title="">Blog</a></li>
           <li><a href="#" title="">About Us</a>
                <ul>
                    <li><a href="gallery1.html" title="">Vission & Mission</a></li>
                    <li><a href="{{route('team')}}" title="">Our Team</a></li>
                    <li><a href="{{route('contact')}}" title="">Contact Us</a></li>
                </ul>
           </li>
       </ul>     
       </div>
      </div>
     </div>
  
 <!-- Responsive Header -->