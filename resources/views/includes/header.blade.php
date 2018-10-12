 <div class=" logo col-md-8 offset-md-2">
    <a href="{{ url('/') }}"><img src="images/Hand-Logo-Green-trans.png" alt="help the herts homeless" /></a>
    <a href="https://www.instagram.com/helpinghertshomeless/" target="_blank"><img class='insta-img' src='images/insta.png' alt='Instagram' /></a>
    <a href="https://www.facebook.com/helpinghertshomeless/" target="_blank"><img class='fb-img' src='images/upFb.png' alt='Facebook' /></a>
</div>
<div class="col-md-8 offset-md-2">
  	<div id='cssmenu'>
      	<ul>
      		<li><a href="{{ url('/') }}"><span>Home</span></a></li>
         	<li class='has-sub'><a href="{{ url('about-us') }}"><span>About Us</span></a>
         		<ul>
         			<li><a href="{{ url('about-us') }}"><span>Vision & Mission</span></a></li>
         			<!--<li><a href='#'><span>History</span></a></li>-->
         			<li><a href="{{ url('privacy-policy') }}"><span>Privacy Policy</span></a></li>
         			<li><a href="{{ url('our-team') }}"><span>Our Team</span></a></li>
         			<!--<li><a href='#'><span>Media / PR</span></a></li>-->
         		</ul>
         	</li>
         	<li class='has-sub'><a href='#'><span>Get Involved</span></a>
            <ul>
               <li class='has-sub'><a href="{{ url('volunteer') }}"><span>Volunteer</span></a>
                  <!--<ul>
                     <li><a href='#'><span>After Housing</span></a></li>
                     <li><a href='#'><span>Sanctuary</span></a></li>
                     <li><a href='#'><span>Sponsors</span></a></li>
                     <li class='last'><a href='#'><span>Other Charities</span></a></li>
                  </ul>-->
               </li>
               <li ><a href="{{ url('donating') }}"><span>Donate</span></a></li>
               <li ><a href="{{ url('fundraising') }}"><span>Fundraising</span></a></li>
               <li ><a href="{{ url('who-we-work-with') }}"><span>Partnerships</span></a></li>
               <!--<li ><a href='#'><span>Vacancies</span></a></li>-->
            </ul>
         </li>
         <li class='has-sub'><a href="{{ url('what-we-do') }}"><span>What We Do</span></a>
         	<ul>
         		<li><a href="{{ url('accommodation') }}"><span>Accommodation</span></a></li>
                <li><a href="{{ url('who-we-work-with') }}"><span>Working Together</span></a></li>
         	</ul>
         </li>
         <li><a href="{{ url('contact-us') }}"><span>Contact Us</span></a></li>
         <li><a href='https://justgiving.com/donatebox/750244?u=http%3A%2F%2Fwww.northhertssanctuary.org.uk%2F&amp;d=false&amp;r=donatebox_buttonv1' target="_blank"><span>Donate</span></a></li>
         <li><a href='#'><span>Contact Us: 01462 600425</span></a></li>
         @if (Route::has('login'))
           @auth
                <li class='last'><a href="{{ route('logout') }}" class='last' onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span>{{ __('Logout') }}</span></a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
                <li class='last'><a href="{{ route('login') }}" class='last'><span>Login</span></a></li>
            @endauth
          @endif         
      </ul>
    </div>
</div>

