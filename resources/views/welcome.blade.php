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
                    <img class="contain" src="{{ $homePageImage }}" alt="homeless man" />
                  </div>
                </div>
                <div class="col-md-8 offset-md-2 help-num-sec">
                  <div>If you or someone you know is facing homelessness please call: 01462 600425.<br />This site is still in the process of being developed and is in beta phrase thank you for your patience.</div>
                </div>
                <div class="main-menu-secs col-md-8 offset-md-2">
                  <div class="within-row text-centre">
                    <div class="col-md-4 text-subhead-red">
                      <div>
                        <span class="fas fa-info-circle"></span><p><h4>About Us</h4></p>
                        <div class="text-normal"><p>Providing targeted support to improve the lives of homeless people</p></div>
                        <p><a href="{{ url('about-us') }}" class="main-menu-button-red">Find Out More</a></p>
                    </div>
                    </div>
                    <div class="col-md-4 text-subhead-blue">
                      <span class="fas fa-gift"></span><p><h4>Donate</h4></p>
                      <div class="text-normal"><p>Find out how to donate to us here...</p></div>
                      <p><a href="{{ url('donating') }}" class="main-menu-button-blue">Find Out More</a></p>
                    </div>
                    <div class="col-md-4 text-subhead-green">
                      <span class="fas fa-globe-africa"></span><p><h4>Get Involved</h4></p></h4>
                      <div class="text-normal"><p>Get involved with us here...</p></div>
                      <p><a href="#" class="main-menu-button-green">Find Out More</a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-8 offset-md-2 text-centre">
                  <div class="within-row">
                    <div class="col-md-3 text-subhead-yellow">
                      <span class="fas fa-users"></span><p><h4>Volunteer & Vacancies</h4></p>
                      <div class="text-normal"><p>Volunteer with us here...</p></div>
                      <p><a href="{{ url('volunteer') }}" class="main-menu-button-yellow">Find Out More</a></p>
                    </div>
                    <div class="col-md-3 text-subhead-orange">
                      <span class="fas fa-donate"></span><p><h4>Fundrasing</h4></p>
                      <div class="text-normal"><p>Would you like to help fundrase?</p></div>
                      <p><a href="{{ url('fundraising') }}" class="main-menu-button-orange">Find Out More</a></p>
                    </div>
                    <div class="col-md-3 text-subhead-dark-blue">
                      <span class="fas fa-home"></span><p><h4>Accomodation</h4></p></h4>
                      <div class="text-normal"><p>Check out our accomodation here...</p></div>
                      <p><a href="{{ url('accommodation') }}" class="main-menu-button-dark-blue">Find Out More</a></p>
                    </div>
                    <div class="col-md-3 text-subhead-purple">
                      <span class="fas fa-hands-helping"></span><p><h4>Partnerships</h4></p></h4>
                      <div class="text-normal"><p>To see how wonderful partners here...</p></div>
                      <p><a href="{{ url('who-we-work-with') }}" class="main-menu-button-purple">Find Out More</a></p>
                    </div>
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
