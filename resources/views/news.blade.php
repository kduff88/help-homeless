<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('includes.head')
    </head>
    <body class="bg-body">


<div id="fb-root"></div>
      <div id="app">
        <div class="flex-center position-ref full-height">
            <header class="row">
 
               @include('includes.header')
         
           </header>

            <div class="content">
              <div class="row">
                <div class="col-md-8 offset-md-2">
                 <div class="sub-heading"><h2><p>News</p></h2></div>
                 <div class="paper">
                  A straightforward way to get your facebook public posts onto another website without requiring your guests to have a facebook account.
<?php
 

//function to retrieve posts from facebook’s server
function loadFB($fbID){
    $url = "https://graph.facebook.com/".$fbID."/feed?limit=3";
    $url.= '&access_token=2259512157626733|f16af685af12089873daaf72eaeafdac';// *

    //load and setup CURL
     $c = curl_init($url);
     curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    //get data from facebook and decode JSON
     $page = json_decode(curl_exec($c));
    //close the connection
     curl_close($c);

     var_dump($page);
 die();
    //return the data as an object
     return $page->data;
}

/* Change These Values */
// Your Facebook ID
 $fbid = "2236651363321598";
// How many posts to show?
 $fbLimit = 10;
// Your Timezone
date_default_timezone_set("America/Chicago");


/* Dont Change */
// Variable used to count how many we’ve loaded
 $fbCount = 0;
// Call the function and get the posts from facebook
 $myPosts = loadFB($fbid);


?>
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
