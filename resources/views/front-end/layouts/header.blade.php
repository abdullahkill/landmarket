<!-- Header Starts -->
<div class="navbar-wrapper" >

        <div class="navbar-inverse" role="navigation" >
          <div class="container" >
            <div class="navbar-header" >


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right">
               <li class="active"><a href="/">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="agents.php">Agents</a></li>         
                <li><a href="blog.php">Blog</a></li>
                <li><a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();"> Logout </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}                               </form>
                          </li>
                

      
         
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->





<div class="container">

<!-- Header Starts -->
<div class="header">
 <a href="index.php"><img src="/front-end/images/iccoon.png" alt="Realestate"></a>

              <ul class="pull-right">
                <li><a href="buysalerent.php">Buy</a></li>
                <li><a href="buysalerent.php">Sale</a></li>         
                <li><a href="buysalerent.php">Rent</a></li>
              </ul>
</div>
<!-- #Header Starts -->
</div>