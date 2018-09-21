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
                 <div class="sub-heading"><h2><p>Donating</p></h2></div>
                 <div class="paper">
                  <h4>Donating Items and Food:</h4>
                  <h6><b>Requirements for donations of food and material items vary from time to time but the following items are normally welcome:</b></h6>
                  <br />
                  <p>
                    &#9830; Tea and coffee  <br />
                    &#9830; Sugar, Baked Beans, UHT milk, tinned fish<br />
                    &#9830; Tins of fruit and custard <br />
                    &#9830; Cereals and biscuits <br />
                    &#9830; Non-perishable foodstuffs <br />
                    &#9830; Male clothing <br />
                    &#9830; New bed linen for single beds <br />
                    &#9830; Towels, face cloths, toiletries including soap, shampoo, shower gel and deodorant etc <br />
                    <p>
                    When our service users are able to move on to independent living we like to provide them with a Starter Kit which may include a kettle, toaster, iron or such essential items. We always ask the clients what they would like from a simple menu.
                    </p>
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
