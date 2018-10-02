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
                 <div class="sub-heading"><h2><p>Fundraising</p></h2></div>
                 <div class="paper">
                  <h4>Donating Money & Fundraising:</h4>
                  <br />
                  <p>
                    This charity relies on fund-raising and donations to enable us to provide the extra facilities and services that our residents deserve.<br />

                    Monetary donations are greatly welcome. They can be made through the <a href="https://www.justgiving.com/northherts-sanctuary" target="_blank">Just Giving</a> or <a href="http://uk.virginmoneygiving.com/charity-web/charity/finalCharityHomepage.action?charityId=1003936" target="_blank">Virgin Money Giving </a> where you can make a one off donation, set up a standing order or organise a fundraiser.
                  </p>
                  <p>
                    Alternatively they can be made directly by cheque payable to Helping Herts Homeless, or by Standing Order, and sent to:  
                  </p>
                  <p>
                    The Treasurer <br />
                    Care of HW Associates<br />
                    Portmill House,<br />
                    Portmill Lane,<br />
                    Hitchin, <br />
                    Hertfordshire SG5 1DJ<br />
                  </p>
                  <p>
                    Taxpayers can make their donations more valuable to us via Gift Aid (get form here) as this provides us with an extra 25% on any sum given
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
