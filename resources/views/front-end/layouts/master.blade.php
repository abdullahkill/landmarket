<!DOCTYPE html>
<html lang="en">
<head>
<title>Land-E-Market | Welcome @yield('title')</title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 	<link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/style.css')}}"/>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="{{asset('assets/bootstrap/js/bootstrap.js')}}"></script>
  <script src="{{asset('assets/script.js')}}"></script>



<!-- Owl stylesheet -->
<link rel="stylesheet" href="{{asset('assets/owl-carousel/owl.carousel.css')}}">
<link rel="stylesheet" href="{{asset('assets/owl-carousel/owl.theme.css')}}">
<script src="{{asset('assets/owl-carousel/owl.carousel.js')}}"></script>

<!-- Owl stylesheet -->

<!-- slitslider -->
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('front-end/assets/slitslider/css/style.css')}}" /> -->
    <!-- href="{{ asset('front-end/css/bootstrap.min.css') }}" -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/slitslider/css/custom.css')}}" />
    <script type="text/javascript" src="{{asset('assets/slitslider/js/modernizr.custom.79639.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/slitslider/js/jquery.ba-cond.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/slitslider/js/jquery.slitslider.js')}}"></script>
<!-- slitslider -->

</head>

<body>


<!-- Header Starts -->
<div class="navbar-wrapper" >

        <div class="navbar-inverse" style="background-color:#61a6df;" role="navigation">
          <div class="container">
            <div class="navbar-header">


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse" >
              <ul class="nav navbar-nav navbar-right">
               <li class="active"><a href="/" style="background-color:#00639e;">Home</a></li>
                <li ><a href="{{'/about'}}" style="color: aliceblue">About</a></li>
                <li><a href="{{'/agent'}}" style="color: aliceblue">Agents</a></li>         
                <li><a href="{{'/blog'}}" style="color: aliceblue">Blog</a></li>
                <li><a href="{{'/contact'}}" style="color: aliceblue">Contact</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->





<div class="container"  >

<!-- Header Starts -->
<div class="header" >
<a href="index.php"><img src="{{asset('front-end/images/logo.png')}}" width="180" height="115"alt="Realestate" ></a>

              <ul class="pull-right">
                <li><a href="buysalerent.php" style="color: #00639e;">Buy</a></li>
                <li><a href="buysalerent.php" style="color: #00639e;">Sale</a></li>         
                <li><a href="buysalerent.php" style="color: #00639e;">Rent</a></li>
              </ul>
</div>
<!-- #Header Starts -->
</div>
@yield('content')
    


<div class="footer" style="background-color:#00639e;">

<div class="container" style="background-color:#00639e;" >



<div class="row" style="background-color:#00639e;">
            <div class="col-lg-3 col-sm-3">
                   <h4>Information</h4>
                   <ul class="row" >
                <li class="col-lg-12 col-sm-12 col-xs-3" ><a href="/about"  style="color: aliceblue">About</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="/agent"  style="color: aliceblue">Agents</a></li>         
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="blog.php"  style="color: aliceblue">Blog</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="contact.php"  style="color: aliceblue">Contact</a></li>
              </ul>
            </div>
            
            <div class="col-lg-3 col-sm-3"  style="color: aliceblue">
                    <h4>Newsletter</h4>
                    <p>Get notified about the latest properties in our marketplace.</p>
                    <form class="form-inline" role="form">
                            <input type="text" placeholder="Enter Your email address" class="form-control">
                                <button class="btn btn-success" style="background-color:#61a6df;" type="button">Notify Me!</button></form>
            </div>
            
            <div class="col-lg-3 col-sm-3">
                    <h4>Follow us</h4>

            </div>

             <div class="col-lg-3 col-sm-3"  style="color: aliceblue">
                    <h4>Contact us</h4>
                    <p><b>Bootstrap Realestate Inc.</b><br>
<span class="glyphicon glyphicon-map-marker"></span> 8290 Walk Street, Australia <br>
<span class="glyphicon glyphicon-envelope"></span> hello@bootstrapreal.com<br>
<span class="glyphicon glyphicon-earphone"></span> (123) 456-7890</p>
            </div>
        </div>
<p class="copyright"  style="color: aliceblue">Copyright 2013. All rights reserved. 	</p>


</div></div>




<!-- Modal -->
<div id="loginpop" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="row">
        <div class="col-sm-6 login">
        <h4>Login</h4>
          <form class="" role="form" action="{{ route('login') }}" method="post">
          @csrf
        <div class="form-group">
          <label class="sr-only" for="exampleInputEmail2">Email address</label>
          
          <input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label class="sr-only" for="exampleInputPassword2">Password </label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
        </div>
        <div class="checkbox">
          @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
        </div>
        <button  class="btn btn-success" style="background-color:#00639e;">Sign in</button>
      </form>          
        </div>
        <div class="col-sm-6">
          <h4>New User Sign Up</h4>
          <p>Join today and get updated with all the properties deal happening around.</p>
          
          <a href="/reg"><button type="submit" class="btn btn-info" >Join Now</button></a> 
        </div>

      </div>
    </div>
  </div>
</div>
<!-- /.modal -->
@yield('script')
<!-- GetButton.io widget -->
<!-- GetButton.io widget -->
<script type="text/javascript">
  (function () {
      var options = {
          facebook: "744421289724629", // Facebook page ID
          whatsapp: "03115276352", // WhatsApp number
          call_to_action: "Message us", // Call to action
          button_color: "#FF6550", // Color of button
          position: "right", // Position may be 'right' or 'left'
          order: "whatsapp,facebook", // Order of buttons
      };
      var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
      var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
      s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
      var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
  })();
</script>
<!-- /GetButton.io widget -->
</body>
</html>



