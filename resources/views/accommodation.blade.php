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
                 <div class="sub-heading"><h2><p>Accommodation</p></h2></div>
                 <div class="paper">
                  <h4>Hostel / Night Services:</h4>
                  <br />
                  <p>
                    We are a 17 bed night hostel, providing temporary accommodation for homeless people. Residents are entitled to a hot evening meal, breakfast and a packed lunch. The hostel amenities include showers, washing and laundry facilities, computer suite and TV room.   
                  </p>
                  <p>
                    &#9830; 17 Beds<br />
                    &#9830; Hot Meal<br />
                    &#9830; Laundry<br />
                    &#9830; Hot Shower<br />
                    &#9830; Computer Suite<br />
                    &#9830; Male clothing <br />
                    &#9830; TV Suite<br />
                  </p>
                  <p>
                    <hr />
                  </p>
                  <p>
                    <h4>Counselling & Advice / Day Services:</h4>
                  </p>
                  <p>
                  Stevenage Haven provide and run the day to day operational services, they also provide support and help to address the social and health needs of service users in order for them to “Move on “ to permanent accommodation. Those using the hostel are assessed for issues such as drug and alcohol dependence, mental health and relationship problems. They are then provided with counselling, advice and a means of referral for treatment.
                  </p>
                  <p>
                    &#9830; Housing Advice<br />
                    &#9830; Career Advice<br />
                    &#9830; Cold Weather Provision<br />
                    &#9830; Alcohol Dependence<br />
                    &#9830; Drug Dependence<br />
                    &#9830; Mental Health<br />
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
