<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('includes.head')
    </head>
    <body class="bg-body">
      <div id="app">
        <div class="flex-center position-ref full-height">
            <header class="row">
 
               @include('includes.header')
         
           </header>

            <div class="content">
              <div class="row">
                <div class="col-md-8 offset-md-2">
                 <div class="sub-heading"><h2><p>Contact Us</p></h2></div>
                 <div class="paper">
                  <h4>Address & Phone Number:</h4>
                  <br />
                  <p>
                    The Treasurer <br />
                    Helping Herts Homeless <br />
                    Care of HW Associates<br />
                    Portmill Lane,<br />
                    Hitchin,<br />
                    Hertfordshire,<br />
                    SG5 1DJ<br />
                  </p>
                  <p>
                    &#9830; Tele No: 01462 600425<br />
                  </p>
                  <p>
                  <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2458.908473444802!2d-0.2744682485324525!3d51.95386047961146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487633edb6719447%3A0xf8669d4df54db09a!2sNorth+Herts+Sanctuary%2C+25+Nightingale+Rd%2C+Hitchin%2C+Hertfordshire+SG5+1QU!5e0!3m2!1sen!2suk!4v1456737402536" frameborder="0" style="border: 0px; pointer-events: none;" allowfullscreen=""></iframe>
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
