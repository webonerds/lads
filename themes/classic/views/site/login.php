<!DOCTYPE html>

<!--[if lt IE 8]>

<html lang="en"
      
      xmlns:fb="http://ogp.me/ns/fb#"
      class="ie">

<![endif]-->

<!--[if IE 8]>

<html lang="en"
      
      xmlns:fb="http://ogp.me/ns/fb#"
      class="ie ie8">

<![endif]-->

<!--[if IE 9]>

  <html lang="en"
      
      xmlns:fb="http://ogp.me/ns/fb#"
      class="ie ie9">

<![endif]-->

<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en"
      
      xmlns:fb="http://ogp.me/ns/fb#">

<!--<![endif]-->

  
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <link rel="dns-prefetch" href="http://maps.googleapis.com/">
    <link rel="dns-prefetch" href="http://maps.gstatic.com/">
    <link rel="dns-prefetch" href="http://mts0.googleapis.com/">
    <link rel="dns-prefetch" href="http://mts1.googleapis.com/">

    <!--[if IE]><![endif]-->
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

    

    <style>
      
    </style>


    <meta id="csrf-param-meta-tag" name="csrf-param" content="authenticity_token"/>
    <meta id="csrf-token-meta-tag" name="csrf-token" content=""/>

    <script>
      var sherlock_firstbyte = Number(new Date());
      var googleMapsUrl = 'http://maps.googleapis.com/maps/api/js?language=en&amp;sensor=false&amp;v=3.13&amp;libraries=places&amp;client=gme-airbnbinc&amp;channel=monorail-prod';
      var userAttributeCookies = {
        flags_name: 'flags',
        roles_name: 'roles',
        flags: {"can_see_pretzel":1,"can_see_community":2,"display_assets_for_pretzel":4,"og_publish":16,"has_wishlisted":32,"update_cached":64,"revert_to_admin":128,"facebook_connected":256,"has_search":1024,"search_help_dropdown":2048,"has_dates":4096,"show_fb_prompt":8192,"lightweight_wishlist":16384,"can_send_profile_messages":32768,"just_logged_in":65536,"has_been_host":131072,"should_drop_pellet":262144,"is_active_host":1048576,"can_see_meetups":134217728,"should_drop_sift_pellet":268435456,"can_see_groups":536870912,"has_verified_phone":1073741824,"has_profile_pic":2147483648},
        roles: {"is_admin":1,"is_aircrew":8,"is_content_manager":1048576,"is_stats_admin":16777216}
      };
    </script>


    <title>Log In / Sign Up to Airbnb</title>

      <link rel="canonical" href="login.html">


      <meta name="description" content="Browse and book, or list your space. It&#x27;s easy!">




      <meta property="og:image" content="https://a0.muscache.com/airbnb/static/logos/200x200-2bfa74c5a3542a898901cdee9638a6ee.png">


    <meta name="viewport" content="width=1000,maximum-scale=1.0">
    <link rel="image_src" href="../a2.muscache.com/airbnb/static/airbnb_logo-0887e76cd6fd403d016dd652455acbb6.png">
    <link rel="search" type="application/opensearchdescription+xml" href="opensearch.xml" title="Airbnb">

    <!--[if lt IE 9]>
      <script src="https://a0.muscache.com/airbnb/static/vendor/html5shiv-69a2aa52c3c22c05685997eb91ac7036.js" type="text/javascript"></script>
    <![endif]-->
  </head>
  <body class=" ">
 



    <div id="header" class="navbar navbar-top">
  <div class="navbar-inner">
    <div class="container container-full-width page-container">
      <a href="index.html" class="brand airbnb">Airbnb</a>
      <ul class="nav">
        <li id="header-search">
         <form action="https://www.airbnb.com/s" id="search-form">
           <div id="search-bar">
             <i class="icon icon-search"></i>
             <input type="text" placeholder="Where are you going?" autocomplete="off" name="location" id="header-location">
             <input type="hidden" name="source" value="hdr">
           </div>
           <div id="header-search-settings">
             <label class="checkin">Check in <input type="text" id="header-search-checkin" name="checkin" class="checkin" placeholder="mm/dd/yyyy"/></label>
             <label class="checkout">Check out <input type="text" id="header-search-checkout" class="checkout" name="checkout" placeholder="mm/dd/yyyy"/></label>
             <label class="guests">Guests
               <div class="select select-block">
                 <select id="header-search-guests" name="guests">
                   <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option>
                 </select>
               </div>
             </label>
             <label>Room type</label>
             <label class="checkbox" for="room_type_0"><input type="checkbox" id="room_type_0" name="room_types[]" value="Entire home/apt"/> Entire home/apt</label>
             <label class="checkbox" for="room_type_1"><input type="checkbox" id="room_type_1" name="room_types[]" value="Private room"/> Private room</label>
             <label class="checkbox" for="room_type_2"><input type="checkbox" id="room_type_2" name="room_types[]" value="Shared room"/> Shared room</label>
             <button type="submit" class="btn btn-primary blue"><i class="icon icon-search"></i> Find a place</button>
           </div>
         </form>
        </li>
        <li class="dropdown item_explore">
         <a class="dropdown-toggle" href="javascript:void(0)"> Browse <b class="caret"></b></a>
         <ul class="dropdown-menu dropdown-bordered">
           <li><a href="wishlists/popular.html"><i class="icon icon-product-wishlist icon-heart pink"></i> Popular</a></li>
           <li><a href="wishlists/friends.html"><i class="icon icon-group"></i> Friends</a></li>
           <li><a href="locations.html"><i class="icon icon-product-neighborhoods icon-map-marker blue"></i> Neighborhoods</a></li>
           <li class="meetups"><a href="login6d05.html"><i class="icon icon-product-meetups icon-meetups"></i> Meetups</a></li>
           <li class="groups"><a href="loginc239.html"><i class="icon icon-comments"></i> Groups</a></li>
         </ul>
        </li>
      </ul>

      <ul class="nav pull-right help-menu" style="margin-left:0;">
        <li class="dropdown" data-dropdown-sticky="true">
          <a id="help_dropdown" class="dropdown-toggle help-toggle" href="javascript:void(0)"> Help <b class="caret"></b></a>
          <div class="dropdown-menu help-dropdown dropdown-bordered">
            <div class="nav-header">
              <a href="help64e6.html?ref=help-dropdown" class="help-center-link">Visit the Help Center &#187;</a>
            </div>
            <ul class="unstyled list-unstyled">
              <li class="loading"></li>
              <li class="hidden">
                <a href="trust.html?ref=help-dropdown" class="">Visit our Trust & Safety Center</a>
              </li>
              <li class="all_faqs hidden">
                <a href="help/topic/hosting64e6.html?ref=help-dropdown">See all FAQs</a>
              </li>
              <li id="faqadmin" style="display: none;">
                <input type="hidden" name="faq_link[page]" value="users-login">
              </li>
            </ul>
          </div>
        </li>
        <li class="list-your-space">
          <a id="list-your-space" class="yellow btn btn-special" href="rooms/new.html">List Your Space</a>
        </li>
      </ul>

      <ul class="nav pull-right logged-out">
        <li id="sign_up"><a data-signup-modal href="signup_login.html">Sign Up</a></li>
        <li id="login"><a data-login-modal href="login.html">Log In</a></li>
      </ul>

      <ul class="nav pull-right logged-in">
        <li class="dropdown user-item">
          <a class="dropdown-toggle" href="javascript:void(0)">
            <div class="mini-media-box media-photo user-profile-image"></div>
            <span class="value_name">User</span> <b class="caret"></b>
          </a>
          <ul class="dropdown-menu dropdown-bordered">
            <li><a href="logina48e.html">Dashboard</a></li>
            <li>
              <a href="logind020.html">
                <span class="singular" style="display: none;">Your Listing</span>
                <span class="plural">Your Listings</span>
              </a>
            </li>
            <li><a href="trips/current.html">Your Trips</a></li>
            <li><a href="wishlists/my.html" id="wishlists">Wish Lists</a></li>
            <li class="groups">
              <a href="loginc239.html">
                Groups
                <span class="label label-pink label-new">New</span>
              </a>
            </li>
            <li>
              <a href="invite27f3.html?r=3">
                Invite Friends
                <span class="label label-pink label-new">New</span>
              </a>
            </li>
            <li><a href="login30ba.html">Edit Profile</a></li>
            <li><a href="login8b12.html">Account</a></li>
            <li><a href="index.html" id="header-logout">Log Out</a></li>
          </ul>
        </li>
        <li class="divider-vertical"></li>
        <li id="inbox-item">
          <a href="logind983.html"><i class="icon icon-mail hide-text"><span class="text-hide">Inbox</span></i><i class="alert-count position-super fade">0</i></a>
        </li>
        <li class="divider-vertical"></li>
      </ul>
    </div>
  </div>
</div>


    <script src="../a0.muscache.com/airbnb/static/header_cookie-a91c92b8cdd18a719018b12f60162c6d.js" type="text/javascript"></script>

    <script>new HeaderPreload();</script>

      <div class='span12 flash-container'>
      </div>

    

<div class="page-container page-container-responsive row-space-top-4">
  <div class="row">
    <div class="col-4 col-center">
      <div class="panel">
          <div class='panel-header'>
            Log in
          </div>
          <div class="panel-body">
              
<a href="https://www.facebook.com/dialog/oauth?client_id=138566025676&amp;redirect_uri=https%3A%2F%2Fwww.airbnb.com%2Fauthenticate&amp;scope=email%2Cuser_birthday%2Cuser_likes%2Cuser_education_history%2Cuser_hometown%2Cuser_interests%2Cuser_activities%2Cuser_location" class="fb-button fb-blue btn icon-btn btn-block btn-large large padded-btn-block row-space-1 btn-facebook" data-populate_uri="" data-redirect_uri="https://www.airbnb.com/authenticate">
	<span class="icon-container">
    <i class="icon icon-facebook"></i>
	</span>
	<span class="text-container">
    Log in with Facebook
  </span>
</a>

  <div class="signup-or-separator">
    <h6 class="text shift text-special">or</h6>
    <hr>
  </div>

<form accept-charset="UTF-8" action="https://www.airbnb.com/authenticate" class="signin-form login-form" data-action="Signin" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="V2_.airbnb.com_195a6b4e0ac96213" /></div>
  <input id="redirect_params_action" name="redirect_params[action]" type="hidden" value="dashboard" />
<input id="redirect_params_controller" name="redirect_params[controller]" type="hidden" value="home" />

  

  <div class="control-group row-space-1">
    <input class="decorative-input" id="signin_email" name="email" placeholder="Email Address" type="email" />
  </div>
  <div class="control-group row-space-2">
    <input class="decorative-input" id="signin_password" name="password" placeholder="Password" type="password" />
  </div>

  <div class="clearfix row-space-2">
    <label for="remember_me2" class='checkbox remember-me'>
      <input type="checkbox" name="remember_me" id="remember_me2" value="true" class="remember_me"/>
      Remember me
    </label>
    <a href="forgot_password.html" class="forgot-password">Forgot password?</a>
  </div>

  <button type="submit" class="btn btn-block btn-primary large btn-large padded-btn-block">
    Log In
  </button>
</form>
          </div>
          <div class='panel-body'>
            Don't have an account?
            <a href="signup_logina48e.html?redirect_params[action]=dashboard&amp;redirect_params[controller]=home">
              Sign up
            </a>
          </div>
      </div>
    </div>
  </div>
</div>
<form accept-charset="UTF-8" action="https://www.airbnb.com/authenticate" id="facebook_form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="V2_.airbnb.com_195a6b4e0ac96213" /></div>
  <input id="redirect_params_action" name="redirect_params[action]" type="hidden" value="dashboard" />
<input id="redirect_params_controller" name="redirect_params[controller]" type="hidden" value="home" />

  <input id="retry_params_action" name="retry_params[action]" type="hidden" value="dashboard" />
<input id="retry_params_controller" name="retry_params[controller]" type="hidden" value="home" />

</form>



      <div class="container footer-container page-container page-container-fixed">
        <div id="footer" class="row">
          <div class="span3 col-3">
  <h5>Location Settings</h5>

  <div class="language-curr-picker clearfix">
    <span class="language-picker"></span>
      <span class="currency-picker"></span>
  </div>
  <div>
    <ul id="asset-experiment-links" class="list-unstyled unstyled hide">
      <li id="show-pretzel" class="hide">
        <a class="btn" href="#">Show Pretzel</a>
      </li>
      <li id="hide-pretzel" class="hide">
        <a class="btn" href="#">Hide Pretzel</a>
      </li>
    </ul>
  </div>
</div>

<div class="span3 col-3">
  <h5>Discover</h5>
  <ul class="unstyled list-unstyled js-footer-links">
    <li><a href="trust.html">Trust & Safety</a></li>
    <li><a href="invite.html">Invite Friends</a></li>
    <li><a href="wishlists/airbnb_picks.html">Airbnb Picks</a></li>
    <li><a href="live/open.html">Airbnb Open</a></li>
    <li><a href="mobile.html">Mobile</a></li>
    <li><a href="info/why_host.html">Why Host</a></li>
    <li><a href="hospitality.html">Hospitality</a></li>
    <li><a href="stories.html">Stories</a></li>
    <li><a href="sitemaps.html">Site Map</a></li>
  </ul>
</div>
<div class="span3 col-3">
  <h5>Company</h5>
  <ul class="unstyled list-unstyled js-footer-links">
    <li><a href="about/about-us.html">About</a></li>
    <li><a href="jobs.html">Jobs</a></li>
    <li><a href="press/news.html">Press</a></li>
    <li><a href="http://blog.guitartutor.com/">Blog</a></li>
    <li><a href="help.html">Help</a></li>
    <li><a href="help/policies.html">Policies</a></li>
    <li><a href="help/responsible-hosting.html">Responsible Hosting</a></li>
      <li><a href="disaster-response.html">Disaster Response</a></li>
    <li><a href="terms.html">Terms & Privacy</a></li>
  </ul>
</div>
<div class="span3 col-3">
  <h5>Join us on</h5>
  <ul class="unstyled list-unstyled js-external-links">
    <li><a href="http://twitter.com/guitartutor" target="_blank">
      Twitter
    </a></li>
    <li><a href="http://www.facebook.com/guitartutor" target="_blank">
      Facebook
    </a></li>
    <li><a href="https://plus.google.com/+guitartutor" rel="publisher" target="_blank">
      Google
    </a></li>
    <li><a href="http://www.youtube.com/guitartutor" target="_blank">
      YouTube
    </a></li>
  </ul>
  <div id="copyright">
    &copy; Airbnb, Inc.
  </div>
</div>

        </div>
      </div>

      <div id="fb-root"></div>

    <!--[if lt IE 9]>
      <script src="https://a2.muscache.com/airbnb/static/libs_jquery_1x-52ee8c2d8865c815be0459226a9676ef.js" type="text/javascript"></script>
    <![endif]-->
    <!--[if gte IE 9]><!-->
      <script src="../a0.muscache.com/airbnb/static/libs_jquery_2x-08bbb019cb3bb3aacc2c409d26d6f738.js" type="text/javascript"></script>
    <!--<![endif]-->


      <script>
        !function() {
          var Facebook = require('airbnb.facebook');
          Facebook.init({"appId":"138566025676","scope":"email,user_birthday,user_likes,user_education_history,user_hometown,user_interests,user_activities,user_location"});
        }();
      </script>

    
    
    



    <script>
      LazyLoad.js('js/abb_combo_all_fb_locale-en_US.js');
    </script>

  </body>

</html>
