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
                 <div class="sub-heading"><h2><p>Privacy Policy</p></h2></div>
                 <div class="paper">
                  <h4>Privacy Statement:</h4>
                  <br />
                  <p>
                    <b>1.    Introduction </b>
                  </p>
                  <p>
                    Helping Herts Homeless is a registered charity under Charity Number 1071610, and a company limited by guarantee under Company Number 3471965. <br />  
                    This Privacy Statement is designed to tell you how and what personal data we collect and how we use personal data about you, including:
                  </p>
                  <p>
                    Any personal data held in our manual filing systems; and <br />
                    Information that may be provided by you when you access or use our website <br />
                    Information you give us when you access and use information and Services provided by us using a mobile or online application or any other digital product we provide <br />
                    Information collected through any other means such as online form, email, or telephone communication. 
                  </p>
                  <p>
                    Our website and other Services offered by Helping Herts Homeless through electronic means will collectively be referred to as “Services” in this Privacy Statement.
                  </p>
                  <p>
                    By using any Services we offer, you are agreeing to be bound by this Privacy Statement.
                  </p>
                  <br />
                  <p> 
                    <b>2.    Ways that we collect personal data</b>
                  </p>
                  <p>
                    We may collect and process the following personal information or data (information that can be uniquely identified with you) about you:
                  </p>
                  <p>
                  Certain data required to use our Services <br />
                  Data provided to register for our Services <br />
                  Data provided if you sign up for information, newsletters, events or other marketing updates <br />
                  Details of the Services you access <br />
                  A record of any correspondence between you and us  <br />
                  Information we may require from you when you report a problem or complaint
                  </p>

                  <p>
                  You do not have to provide any personal data to us, but you may not be able to access our Services or attend an event without doing so. You may withdraw our authority to process your personal data (or request that we restrict our processing - see section 6) at any time but Services may not be fully operable should you do so.
                  </p>
                   <br />



                  <p>
                  <b>3.    How we use personal data</b>
                  </p>
                  <p> 
                  We may use your personal data to:
                   </p>
                   <p>
                     &#9830;Provide or deliver Services to you <br />
                     &#9830;Provide or deliver Services to third parties including homeless individuals and the organisations which provide services to the homeless <br />
                     &#9830;Deliver and dispatch content to you <br />
                     &#9830;Deliver and dispatch marketing information to you, where requested <br />
                     &#9830;Assist in the administration of Services <br />
                     &#9830;Assist in making general improvements to our materials and Services <br />
                     &#9830;Carry out and administer any obligations arising from any agreements entered into between you and us <br />
                     &#9830;Contact you and notify you about changes to our or the Services we offer but only where we have a legal basis for doing so <br />
                     &#9830;Analyse how our Services are used
                    </p> 
                    <br />
                    <p> 
                    <b>4.    Basis on which we process personal data</b>
                    </p>
                    <p>
                    Personal data we hold about you will be processed for one or more of the following reasons:
                    </p>
                    <p>
                     &#9830;You have consented to the processing for the specific purposes described in this statement <br />
                     &#9830;The processing is necessary in order for us to comply with our obligations under a contract between you and us, or because you have asked us to take specific steps before entering into a contract with you <br />
                     &#9830;The processing is necessary for us to comply with a legal obligation <br />
                     &#9830;The processing is necessary for our legitimate interests (or the legitimate interests of a third party) unless your interests in data privacy and security override our legitimate interests
                    </p>
                    <p>
                    In the event you provide us with any special category or sensitive personal data, we will take extra care to ensure your rights are protected, in accordance with applicable data protection laws.
                    </p>
                     <br />
 
                    <p> 
                    <b>5.    Sharing your data</b>
                    </p> 
                    <p>
                    We do not disclose any personal data you provide third parties except:
                    </p>
                    <p>
                     &#9830;Where you instruct us to share your personal data with a third party, you authorise us to deliver that content via email, SMS or other electronic messaging or communication system <br />
                     &#9830;If we are under a duty to disclose or share your personal data in order to comply with any legal obligation (for example, if required to do so by a court order for the purposes of prevention of fraud or other crime) <br />
                     &#9830;In order to enforce any terms and conditions or agreements for our Services that you may apply <br />
                     &#9830;We may transfer your personal data to a third party as part of the transfer of some or all of our organisation and assets to any third party or as a party of any restructuring or reorganisation, but we will take steps with the aim of ensuring that your privacy rights continue to be protected <br />
                     &#9830;To protect the rights, property, or safety of Helping Herts Homeless, our users and contributors or any third parties. This includes exchanging information with other companies and organisations for the purposes of fraud protection and credit risk reduction <br />
                    </p>
                    <p>
                    Please note that certain Services allow for the location of rough sleepers to be notified to appropriate organisations and local government agencies. If you notify us of the location of a rough sleeper you agree that we may notify relevant organisations and agencies. This information will not include names or other personally identifiable information.
                    </p>
                    <p>
                    Other than the circumstances set out above, we shall not disclose any of your personal data unless you give us permission to do so.
                    </p>
                     <br />



                     

                    <p> 
                    <b>6.    Privacy rights</b>
                    </p>
                    <p>
                    <b>Right of access</b> <br />
                    You can make a subject access request (“SAR”) to request information about the personal data we hold about you (free of charge save for reasonable expenses for repeat requests).
                    </p>
                    <p>
                    <b>Right to rectification</b> <br />  
                    Please let us know if information we hold about you is incomplete or inaccurate and we will update our records as soon as possible, but in any event within twenty eight days.
                    </p>
                    <p>
                    We will take reasonable steps to communicate changes to your data to any third parties, with your agreement, that we have provided information to on your behalf.
                    </p> 
                    <p>
                    <b>Right to erasure</b> <br />
                    Please tell us if you no longer wish us to hold personal data about you. Please note, it is not possible to deliver all of our Services without holding your personal data.
                    </p>
                    <p>
                    Unless we have reasonable grounds to refuse your request, we will securely delete your personal data within twenty eight days. The data may continue to exist in backup, but we will take steps to ensure that it will not be accessible.
                    </p>
                    <p>
                    We will communicate the erasure to any third parties to whom we have passed the information.
                    </p>
                    <p> 
                    <b>Right to restrict processing</b> <br />
                    You can request that we no longer process your personal data in certain ways. Please note, we will not automatically delete your data if you exercise your right to restrict processing.
                    </p>
                    <p> 
                    <b>Right to data portability</b> <br /> 
                    You have the right to receive copies of personal data we hold about you in a commonly used and easily storable format (please let us know what format suits you). You might also ask us to transfer your personal data to a third party (where feasible).
                    </p>
                    <p> 
                    <b>Right to object</b> <br />
                    You can object to us using your personal data for direct marketing purposes (including profiling), research or statistical purposes, and/or for processing based on legitimate interest of a task in the public interest. We may refuse your request if we have compelling legitimate grounds for the processing, which override your interests, rights and freedoms.
                    </p> 
                    <p>
                    <b>Rights with respect to automated decision-making and profiling</b> <br /> 
                    You have a right not to be subject to automated decision-making (including profiling) when those decisions have a legal (or similarly significant effect) on you. You are not entitled to this right when the automatic processing is necessary for us to perform our obligations under a contract with you, it is permitted by law, or if you have given your explicit consent.
                    </p>
                    <p>
                    <b>Right to withdraw consent</b> <br />
                    If we are relying on your consent to process your personal data, you have the right to withdraw your consent at any time.
                    </p>
                    <p> 
                    All requests or notifications in respect of the above rights must be sent to Helping Herts Homeless, c/o HW Associates, Portmill House, Hitchin SG5 1DJ. Alternatively, you can send an email to ************ or telephone ***********. 
                    </p>

                     
                     

                    <p>
                    We review the personal data (and the categories of personal data) we are holding on a regular basis to ensure the data we are holding is still relevant to our business and is accurate. If we discover that data we are holding is no longer necessary or accurate, we will take reasonable steps to correct or delete the data.
                    </p>
                    <p>
                    If you wish to request that data we hold about you is amended or deleted, please refer to section 6 above, which explains your privacy rights and your right to request access.
                    </p>
                     <br />



                    <p> 
                    <b>7.    Other websites</b>
                    </p> 
                    <p>
                    Our Services may contain links and references to other third-party websites and applications. Please be aware that this Privacy Statement does not apply to those websites.
                    </p>
                    <p>
                    We cannot be responsible for the privacy policies and practices of websites that are not operated by us, even if you access them via our Services. We recommend that you check the policy of each website you visit and contact its owner or operator if you have any concerns or questions.
                    </p>
                    <p>
                    In addition, if you came to use our Services via a third-party website, we cannot be responsible for the privacy policies and practices of the owners or operators of that third-party website and recommend that you check the policy of that third-party website and contact its owner or operator if you have any concerns or questions.
                    </p>
                     <br />
                     <p>
                    <b>8.    Transferring your information outside of Europe</b>
                     </p>
                     <p>
                    As part of our own due diligence we have identified that personal data held for and by Helping Herts Homeless resides in the EU.  We will continue to monitor this for Helping Herts Homeless considering any 3rd party provider changes in the future. Should a requirement for data to be transferred outside of the EU in future, Helping Herts Homeless will implement controls and safeguards to ensure that equal to or greater data protection measures are enforced and records retained to evidence this.
                    </p>
                    <p> 
                    <b>9.    Children</b>
                    </p>
                    <p> 
                    The majority of our services are not intended for and should not be accessed by individuals under 13. Our policy is not to intentionally collect, process, maintain or use personal data from any individual under the age of 13 without parental consent. 
                    </p>
                     <br />
                    <p>
                    <b>10.    Notification of changes to our Privacy Statement</b>
                     </p>
                     <p>
                    Any changes we may make to our Privacy Statement will be posted to our website. Similarly, we will post on our website details of any changes to ensure you are always aware of the information we collect, how we use it, and in what circumstances if any, we share it with other parties.
                     </p>
                      <br />
                     <p>
                    <b>11.    Contact us</b>
                     </p>
                     <p>
                    If any time you would like to contact us with your views about our privacy practices, or with any enquiry or complaint relating to the way we use your personal data, you can do so using the contact details in section 6.
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
