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
                  <h4>What We Do:</h4>
                  <p>
                    Helping Herts Homeless acts as a hub providing services, volunteers and funding to organisations in the local area where we can help to alleviate the effects of homelessness and rough sleeping.
                    As owners of the hostel [North Herts Sanctuary] we provide secure and safe accommodation nightly for up to 17 individuals.  We are responsible for the maintenance of the building, and making improvements for the benefit of the residents and staff.  Our volunteers publicise the need to help the homeless, and raise  money through a range of regular fundraising events. The charity     distributes the donations of money and in kind, to the Sanctuary and various other deserving organisations.
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
