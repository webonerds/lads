
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

  <head>
    
    <!--[if IE]><![endif]-->
    <meta charset="utf-8">

     <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/common.css" />
	
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
	
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/map_search.css" />

    
    

    <style>
      
    </style>


    <meta id="csrf-param-meta-tag" name="csrf-param" content="authenticity_token"/>
    <meta id="csrf-token-meta-tag" name="csrf-token" content=""/>

    <script>
      var sherlock_firstbyte = Number(new Date());
      var googleMapsUrl = '//maps.googleapis.com/maps/api/js?language=en&sensor=false&v=3.13&libraries=places&client=gme-airbnbinc&channel=monorail-prod';
      var userAttributeCookies = {
        flags_name: 'flags',
        roles_name: 'roles',
        flags: {"can_see_pretzel":1,"can_see_community":2,"display_assets_for_pretzel":4,"og_publish":16,"has_wishlisted":32,"update_cached":64,"revert_to_admin":128,"facebook_connected":256,"has_search":1024,"search_help_dropdown":2048,"has_dates":4096,"show_fb_prompt":8192,"lightweight_wishlist":16384,"can_send_profile_messages":32768,"just_logged_in":65536,"has_been_host":131072,"should_drop_pellet":262144,"is_active_host":1048576,"can_see_meetups":134217728,"should_drop_sift_pellet":268435456,"can_see_groups":536870912,"has_verified_phone":1073741824,"has_profile_pic":2147483648},
        roles: {"is_admin":1,"is_aircrew":8,"is_content_manager":1048576,"is_stats_admin":16777216}
      };
    </script>


    <title>Guitor Tutor</title>

   

      <link rel="canonical" href="login.html">
      
      <meta name="description" content="Browse and book, or list your space. It&#x27;s easy!">
	  <meta name="viewport" content="width=1000,maximum-scale=1.0">
    <!--[if lt IE 9]>
      <script src="https://a0.muscache.com/airbnb/static/vendor/html5shiv-69a2aa52c3c22c05685997eb91ac7036.js" type="text/javascript"></script>
    <![endif]-->
    <link rel="shortcut icon" type="image/x-icon" href="https://a0.muscache.com/airbnb/static/logotype_favicon-2e5a2c7c6a64c00b95ed01dec8b85f57.ico">
  </head>
    
    <body class=" home_view v2">

   <div id="header" class="navbar navbar-top">
   <div class="navbar-inner">
   <div class="container container-full-width page-container">
   <a href="index.php" class="brand guitar">Guitar Titor</a>
      <ul class="nav">
        <li id="header-search">
        <?php
		
		
              $searchModel = new Users; 
              $form=$this->beginWidget('CActiveForm', array(
                    'action'=>Yii::app()->createUrl('/site/index'),
                    //'method'=>'get',
					'htmlOptions'=>array('id'=>'search-form')
            )); ?>
             
			 
            
          
           
           
           <?php $this->endWidget(); ?>
	
           
        </li>
        
      </ul>
      <ul class="nav pull-right help-menu" style="margin-left:0;">
        <li class="dropdown" data-dropdown-sticky="true">
          <a id="help_dropdown" class="dropdown-toggle help-toggle" href="javascript:void(0)"> Help <b class="caret"></b></a>
          <div class="dropdown-menu help-dropdown dropdown-bordered">
            <div class="nav-header">
              <a href="/help?ref=help-dropdown" class="help-center-link">Visit the Help Center &#187;</a>
            </div>
            <ul class="unstyled list-unstyled">
              <li class="loading"></li>
              <li class="hidden">
                <a href="/safety?ref=help-dropdown" class="">Visit our Trust & Safety Center</a>
              </li>
              <li class="all_faqs hidden">
                <a href="/help/topic/hosting?ref=help-dropdown">See all FAQs</a>
              </li>
              <li id="faqadmin" style="display: none;">
                <input type="hidden" name="faq_link[page]" value="homepages-show">
              </li>
            </ul>
          </div>
        </li>
        <?php if(isset(Yii::app()->user->id))
	  	{?>
        <li class="list-your-space"><a id="list-your-space" class="btn btn-special green" href="<?php echo Yii::app()->createUrl('/user/view',array('id'=>Yii::app()->user->user_id));?>"><?php echo Yii::app()->user->username;?></a>
         </li>
         <li class="list-your-space">    <a id="list-your-space" class="yellow btn btn-special" href="<?php echo Yii::app()->createUrl('/site/logout');?>">Log Out</a></li>
      	<?php }?>
      </ul>
      <?php if(!isset(Yii::app()->user->id))
	  {?>
      </ul>
        
      <ul class="nav pull-right logged-out">
        <li ><a href="<?php echo Yii::app()->createUrl('/user/create');?> ">Sign Up</a></li>
        <li ><a href="<?php echo Yii::app()->createUrl('/site/login');?> ">Log In</a></li>
      </ul>
       <?php } ?>

      <ul class="nav pull-right logged-in">
        <li class="dropdown user-item">
          <a class="dropdown-toggle" href="javascript:void(0)">
            <div class="mini-media-box media-photo user-profile-image"></div>
            <span class="value_name">User</span> <b class="caret"></b>
          </a>
          <ul class="dropdown-menu dropdown-bordered">
            <li><a href="/home/dashboard">Dashboard</a></li>
            <li>
              <a href="/rooms">
                <span class="singular" style="display: none;">Your Listing</span>
                <span class="plural">Your Listings</span>
              </a>
            </li>
            <li><a href="/trips/upcoming">Your Trips</a></li>
            <li><a href="/wishlists/my" id="wishlists">Wish Lists</a></li>
            <li class="groups">
              <a href="/groups">
                Groups
                <span class="label label-pink label-new">New</span>
              </a>
            </li>
            <li>
              <a href="/invite?r=3">
                Invite Friends
                <span class="label label-pink label-new">New</span>
              </a>
            </li>
            <li><a href="/users/edit">Edit Profile</a></li>
            <li><a href="/account">Account</a></li>
            <li><a href="/logout" id="header-logout">Log Out</a></li>
          </ul>
        </li>
        <li class="divider-vertical"></li>
        <li id="inbox-item">
          <a href="/inbox"><i class="icon icon-mail hide-text"><span class="text-hide">Inbox</span></i><i class="alert-count position-super fade">0</i></a>
        </li>
        <li class="divider-vertical"></li>
      </ul>
    </div>
  </div>
</div>


    <script src="https://a0.muscache.com/airbnb/static/header_cookie-a91c92b8cdd18a719018b12f60162c6d.js" type="text/javascript"></script>

    <script>new HeaderPreload();</script>

      <div class='span12 flash-container'>
      </div>

    


<div id="hero" style="display:block;" 
     data-native-currency="ILS"
    <div id="hero" style="border:1">

     <?php echo $content;?>

</div>

<div class="panel panel-dark row-space-4">
  <div class="page-container page-container-fixed">
    <div class="row-space-top-6"></div>
    

<div class="row-space-3">
  <div class="section-intro">
    <h2>Neighborhood Guides</h2>
    <p class='text-lead'>Not sure where to stay? We've created neighborhood guides for cities all around the world.
    </p>
  </div>
</div>

<ul class="city-tiles list-unstyled two-wide-city-tiles">
      <li class="city-tile">
        <div class="media-photo city-tile city-tile-mexico-city"></div>
        <a href="/locations/mexico-city">
          <h4 class='text-special'>
            Mexico City
          </h4>
          <span>
            15 neighborhoods
          </span>
</a>          <span class="label label-new">New</span>
      </li>
      <li class="city-tile">
        <div class="media-photo city-tile city-tile-tokyo"></div>
        <a href="/locations/tokyo">
          <h4 class='text-special'>
            Tokyo
          </h4>
          <span>
            20 neighborhoods
          </span>
</a>      </li>
      <li class="city-tile">
        <div class="media-photo city-tile city-tile-ny"></div>
        <a href="/locations/new-york">
          <h4 class='text-special'>
            New York
          </h4>
          <span>
            60 neighborhoods
          </span>
</a>      </li>
      <li class="city-tile">
        <div class="media-photo city-tile city-tile-paris"></div>
        <a href="/locations/paris">
          <h4 class='text-special'>
            Paris
          </h4>
          <span>
            31 neighborhoods
          </span>
</a>      </li>
</ul>

  <div class="referrals-tile">
    <div class="referrals-tile-background">
      <h4 class='text-special row-space-4'>
        Invite friends, earn travel credit
      </h4>
      <p class="row-space-4" id="referrals-promo-subtext">
        Earn travel credit for every friend you invite.
      </p>
      <a href="/invite?r=11" class="btn btn-primary btn-large">
        Invite friends
      </a>
    </div>
  </div>

<div class="row-space-6 col-12">
  <p class='text-center'>
    <a href="/locations" class="text-copy">All neighborhood guides</a>
  </p>
</div>

  </div>
</div>

<div class="page-container page-container-fixed">
  <div class="row">
    <div class="col-4 text-copy">
      <h3 class="text-special">Travel</h3>
      <p>From apartments and rooms to treehouses and boats: stay in unique spaces in 192 countries.</p>
      <p><a href="/help/getting-started/how-to-travel">
        See how to travel on Airbnb</a></p>
    </div>

    <div class="col-4 text-copy">
      <h3 class="text-special">Host</h3>
      <p>Renting out your unused space could pay your bills or fund your next vacation.</p>
      <p><a href="/help/getting-started/how-to-host">
        Learn more about hosting</a></p>
    </div>

    <div class="col-4 text-copy">
      <h3 class="text-special">
        Trust and Safety
      </h3>

      <p>From Verified ID to our worldwide customer support team, we've got your back.</p>
      <p><a href="/trust">
        Learn about trust at Airbnb</a></p>
    </div>
  </div>
</div>



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
    <li><a href="/trust">Trust & Safety</a></li>
    <li><a href="/invite?r=6">Invite Friends</a></li>
    <li><a href="/wishlists/airbnb_picks">Airbnb Picks</a></li>
    <li><a href="/live/open">Airbnb Open</a></li>
    <li><a href="/mobile">Mobile</a></li>
    <li><a href="/info/why_host">Why Host</a></li>
    <li><a href="/hospitality">Hospitality</a></li>
    <li><a href="/stories">Stories</a></li>
    <li><a href="/sitemaps">Site Map</a></li>
  </ul>
</div>
<div class="span3 col-3">
  <h5>Company</h5>
  <ul class="unstyled list-unstyled js-footer-links">
    <li><a href="/about/about-us">About</a></li>
    <li><a href="/jobs">Jobs</a></li>
    <li><a href="/press/news">Press</a></li>
    <li><a href="http://blog.airbnb.com">Blog</a></li>
    <li><a href="/help">Help</a></li>
    <li><a href="/policies">Policies</a></li>
    <li><a href="/help/responsible-hosting">Responsible Hosting</a></li>
      <li><a href="/disaster-response">Disaster Response</a></li>
    <li><a href="/terms">Terms & Privacy</a></li>
  </ul>
</div>
<div class="span3 col-3">
  <h5>Join us on</h5>
  <ul class="unstyled list-unstyled js-external-links">
    <li><a href="//twitter.com/airbnb" target="_blank">
      Twitter
    </a></li>
    <li><a href="//www.facebook.com/airbnb" target="_blank">
      Facebook
    </a></li>
    <li><a href="https://plus.google.com/+airbnb" rel="publisher" target="_blank">
      Google
    </a></li>
    <li><a href="http://www.youtube.com/airbnb" target="_blank">
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
      <script src="https://a0.muscache.com/airbnb/static/libs_jquery_1x-3b8768560325f6086feaa79518b81f7e.js" type="text/javascript"></script>
    <![endif]-->
    <!--[if gte IE 9]><!-->
      <script src="https://a0.muscache.com/airbnb/static/libs_jquery_2x-4c61948b1a5fa686ed70f7b9bf4a18c9.js" type="text/javascript"></script>
    <!--<![endif]-->
    <script src="https://a0.muscache.com/airbnb/static/o2.1-fc074737b03d0ec44d9d055c96468c32.js" type="text/javascript"></script>
    <script src="https://a0.muscache.com/airbnb/static/core-b4a4b26f67ae6d42b042e18bcd71d2de.js" type="text/javascript"></script>

    


   

     
    
    <script src="https://a0.muscache.com/airbnb/static/homepage-6688ff30bae30ab46acbfd1bd34add0f.js" type="text/javascript"></script>
    

    <script>
      try {


	
	  $(function(){
	   
	
		AIR.HomepageHelper.initHomepageHero();
		$(window).bind("load", function() {
			AIR.HomepageHelper.initSlideshow();
		  setTimeout(function() {
			Airbnb.Utils.preload(["<?php echo Yii::app()->theme->baseUrl;?>/css/map_search.css","<?php echo Yii::app()->theme->baseUrl;?>/js/map_search.js"]);
		  }, 200);
		  $.ajax({
			url: "/homepages/ajax_get_referrals_amt",
			success: function(data) {
			  data = $.trim(data);
			  if(data !== '') {
				$('#referrals-promo-subtext').text(data);
			  }
			}
		  });
		});
	  });


      } catch(e) {
        if (window.TraceKit) {
          TraceKit.report(e);
        }
      }
    </script>

  


    <script>
      LazyLoad.js('//a0.muscache.com/3p/_latest/abb_combo_all_fb_locale-en_US.js');
    </script>

  </body>
</html>
<!-- ver. 23787fa257a003c2f083e79b004fc83b14ba4d28 -->
