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
                 <div class="sub-heading"><h2><p>PartnerShips</p></h2></div>
                 <div class="paper">
                  <h4>Working With Us:</h4>
                  <br />
                  <p>
                    Our name Helping Herts Homeless grew out of the North Herts Sanctuary charity name, which was established in 1992 to provide support to improve the lives of homeless people.<br />
                    In many cases we act as a hub, to provide targeted support were it is most needed. As a charity we rely on the generous donations and support of many individuals, schools and organisations across Herts, Beds and Bucks.
                  </p>
                  <p>
                    &#9830; Collections of food and sundry items to help the many charities we support. See our current list of requirements on our donations page <br />
                    &#9830; Some organisations choose us as their Charity of the Year and with our help and guidance undertake fundraising events on our behalf<br />
                    &#9830; We can be adopted by a church or faith group as an organisation they support as part of their outreach work<br />
                    &#9830; Sponsor goods, equipment or activities which are essential in delivering a year on year tailored personal service<br />
                    &#9830; We are happy to give talks to local groups and organisations about the work of <b>Helping Herts Homeless</b><br />
                    &#9830; Join our Fundraising Team or Property Maintenance Team on a voluntary basis, and get involved in events or projects throughout the year<br />
                    &#9830; Become a registered volunteer, offering skills and or experience in the areas we seek. See our current vacancy requirements on our vacancy page <br />
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
