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
                 <div class="sub-heading"><h2><p>About Us</p></h2></div>
                 <div class="paper">
                  <h4>Helping Herts Homeless:</h4>
                  <h6><b>(the working name of The North Herts Sanctuary)</b></h6>
                  <br />
                  <p>
                    Many people have supported the North Herts Sanctuary charity since its inception in 1992. Our new working name in September 2018 to Helping Herts Homeless reflects the charity’s new direction and focus. The charity will in addition to providing temporary accommodation for those who are homeless, act as a hub in supporting other charities and organisations who are directly involved in alleviating homelessness.
                  </p>
                  <h4>Mission:</h4>
                  <p>
                    Working together with other agencies, we aim to support the provision of emergency accommodation and other support services, to anyone in Hertfordshire who has become homeless or is at risk of homelessness. Our aim, for every client, is that they are assisted and supported towards the means to move onto a secure, settled and fulfilling life.
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
