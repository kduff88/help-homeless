<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('includes.head')
    </head>
    <body class="bg-body">
      <div id="app">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <header class="row">
 
               @include('includes.header')
         
           </header>

            <div class="content">
              <div class="row">
                <div class="col-md-8 offset-md-2">
                  <div class="front-main-img">
                    <img class="contain" src="images/homeless-pic.jpg" alt="homeless man" />
                  </div>
                </div>
                <div class="col-md-8 offset-md-2 help-num-sec">
                  <div>If you or someone you know is facing homelessness please call: 01462 435835.</div>
                </div>
                <div class="main-menu-secs col-md-8 offset-md-2">
                  <div class="row text-centre">
                    <div class="col-md-4 text-subhead-red">
                      <span class="glyphicon glyphicon-info-sign"></span><p><h4>About Us</h4></p>
                      <div class="text-normal"><p>About us here...</p></div>
                      <p><a href="#" class="main-menu-button-red">Find Out More</a></p>
                    </div>
                    <div class="col-md-4 text-subhead-blue">
                      <span class="glyphicon glyphicon-gift"></span><p><h4>Donate</h4></p>
                      <div class="text-normal"><p>Donate to us us here...</p></div>
                      <p><a href="#" class="main-menu-button-blue">Find Out More</a></p>
                    </div>
                    <div class="col-md-4 text-subhead-green">
                      <span class="glyphicon glyphicon-globe"></span><p><h4>Get Involved</h4></p></h4>
                      <div class="text-normal"><p>Get involved with us here...</p></div>
                      <p><a href="#" class="main-menu-button-green">Find Out More</a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-8 offset-md-2">
                  <div class="col-md-3">
                      <span class="glyphicon glyphicon-info-sign"></span><p><h4>About Us</h4></p>
                      <div class="text-normal"><p>About us here...</p></div>
                      <p><a href="#" class="main-menu-button-red">Find Out More</a></p>
                    </div>
                    <div class="col-md-3">
                      <span class="glyphicon glyphicon-gift"></span><p><h4>Donate</h4></p>
                      <div class="text-normal"><p>Donate to us us here...</p></div>
                      <p><a href="#" class="main-menu-button-blue">Find Out More</a></p>
                    </div>
                    <div class="col-md-3">
                      <span class="glyphicon glyphicon-globe"></span><p><h4>Get Involved</h4></p></h4>
                      <div class="text-normal"><p>Get involved with us here...</p></div>
                      <p><a href="#" class="main-menu-button-green">Find Out More</a></p>
                    </div>
                    <div class="col-md-3">
                      <span class="glyphicon glyphicon-globe"></span><p><h4>Get Involved</h4></p></h4>
                      <div class="text-normal"><p>Get involved with us here...</p></div>
                      <p><a href="#" class="main-menu-button-green">Find Out More</a></p>
                    </div>
                </div>
              </div>
            </div>

            <footer class="row">
 
               @include('includes.footer')
         
           </footer>
        </div>
      </div>
        <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>
