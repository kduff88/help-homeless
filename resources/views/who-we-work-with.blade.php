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
                 <div class="sub-heading"><h2><p>Our Team</p></h2></div>
                 <div class="paper">
                  <h4>Who We Work With:</h4>
                  <p>
                    We work with any organisation in the North Herts and surrounding area that provides services or advice to the homeless and vulnerable.  This includes North Herts District Council,  Stevenage Haven, Aldwyck Young Persons Services, Herts Young Homeless and Homeless Link.
                  </p>
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
