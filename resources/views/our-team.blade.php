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
                 <div class="sub-heading"><h2><p>Our Team</p></h2></div>
                 <div class="paper">
                  <h4>Who We Are:</h4>
                  <p>
                    HELPING HERTS HOMELESS is a charity run by volunteers, focused on addressing the problems of local homelessness.
                    It was formed [as North Herts Sanctuary] 25 years ago when a small group of church people recognised the need to address the growing problem of local homelessness . Originally operating as a Winter Night Shelter, it now operates on a 24/7 basis, with extensive day services.
                    HHH owns and supports the hostel in Nightingale Rd, Hitchin which offers accommodation for up to 17 individuals each night. The current service provider is Stevenage Haven who operates the hostel.

                  </p>
                  <p><hr></p>
                  <h4>Our Team:</h4>
                  <p>
                    <div class="within-row">
                      <div class="col-md-3 text-centre">
                        <img class="team-img" src="images/grahame-1.jpg" alt="Grahame Williams" />
                      </div>
                      <div class="col-md-3">
                        <p><h6><b>Grahame Wiliams</b></h6></p>
                        Grahame has a background in sales & marketing in property and HR and recruitment sectors. He is currently a qualified driving instructor and became a Trustee in April 2014.
                      </div>
                      <div class="col-md-3 text-centre">
                        <img class="team-img" src="images/peter-warren.jpg" alt="Peter Warren" />
                      </div>
                      <div class="col-md-3">
                        <p><h6><b>Peter Warren</b></h6></p>
                        Peter was a research scientist with ICI, and is now retired. He has been a volunteer with the Charity since 2001, and was involved with the development of the services and the purchase of the premises in 2006.  
                      </div>
                    </div>
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
