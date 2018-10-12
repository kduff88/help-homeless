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
                 <div class="sub-heading"><h2><p>Volunteer</p></h2></div>
                 <div class="paper">
                  <h4>Volunteering:</h4>
                  <br />
                  <p>
                    We are always grateful for any time volunteers can provide to help support our service users. We are usually in need of people to help with:  
                  </p>
                  <p>
                    &#9830; Fundraising Activities<br />
                    &#9830; Publicity / PR<br />
                    &#9830; DIY – indoor & outdoor<br />
                    &#9830; Transportation<br />
                    &#9830; Admin / Clerical<br />
                    &#9830; Finance / Accounts<br />
                  </p>
                  <p>
                    We provide relevant guidance for all of our volunteers and continued support from all staff. If you are interested in learning more about how you can help Helping Herts Homeless.
                  </p>
                  <p>
                    <hr />
                  </p>
                  <p>
                    <h4>Volunteer Form:</h4>
                    <br />
                  </p>
                  <p>
                  This is still being created, please send an email at <b>volunteering@helpinghertshomeless.org.uk</b> if you would like to sign up to volunteer.
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
