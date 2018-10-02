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
                 <div class="sub-heading"><h2><p>Dashboard</p></h2></div>
                 <div class="paper">
                    <h4>Dashboard:</h4>
                    <p>
                        Please use this admin dashboard to edit the relevant web pages:
                    </p>
                    &#98300; Edit the History Page <a href='#'>here.</a><br />
                    &#98300; Edit the News Page <a href='#'>here.</a><br />
                    &#98300; Edit the Voluenteer Page <a href='#'>here.</a><br />
                    &#98300; Edit the Home Page <a href='#'>here.</a><br />
                    &#98300; Edit the Partners Page <a href='#'>here.</a><br />
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
