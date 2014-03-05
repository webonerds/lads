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
<html lang="en" xmlns:fb="http://ogp.me/ns/fb#">

<!--<![endif]-->

  
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
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

  
    <title>Log In / Sign Up to Airbnb</title>

      <link rel="canonical" href="login.html">
      <meta name="description" content="Browse and book, or list your space. It&#x27;s easy!">
	  <meta name="viewport" content="width=1000,maximum-scale=1.0">
   
    <!--[if lt IE 9]>
      <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/html5shiv-69a2aa52c3c22c05685997eb91ac7036.js" type="text/javascript"></script>
    <![endif]-->
         <script src="<?php echo Yii::app()->baseUrl; ?>/js/homepage.js" type="text/javascript"></script>
  	
		  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/map_search.js" type="text/javascript"></script>

  </head>
  <body class="home_view v2">
 
    <div id="header" class="navbar navbar-top">
  <div class="navbar-inner">
    <div class="container container-full-width page-container">
      <a href="<?php echo Yii::app()->createUrl('site/index');?>" class="brand guitartutor">Guitar Tutor</a>
      <ul class="nav">
        <li id="header-search">
  			<?php 
              $searchModel = new Users; 
              $form=$this->beginWidget('CActiveForm', array(
                    'action'=>Yii::app()->createUrl('/site/index'),
                    //'method'=>'get',
            )); ?>
           <div id="search-bar">
    			<?php echo $form->textField($searchModel,'firstname',array('placeholder'=>'City, Zipcode')); ?>
                
  	       </div>
       </li>
            
	<?php $this->endWidget(); ?>
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
      <ul class="nav pull-right logged-out">
        <li id="sign_up"><a data-signup-modal href="<?php echo Yii::app()->createUrl('user/create');?>">Sign Up</a></li>
        
        <li id="login"><a data-login-modal href="<?php echo Yii::app()->createUrl('site/login');?> ">Log In</a></li>
      </ul>
      <?php }?>

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


   
      	 <?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
			'htmlOptions'=>array('class'=>'col-10 col-center flash-container'),
		)); ?><!-- breadcrumbs -->
	<?php endif?>
    	
      

    <div class="panel page-container page-container-full row-space-top-4" style="min-height:300px;">
   

      <?php  echo $content; ?> 
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
                </ul>
            </div>
            <div class="span3 col-3">
              <h5>Company</h5>
              <ul class="unstyled list-unstyled js-footer-links">
                <li><a href="about/about-us.html">About</a></li>
                <li><a href="help/policies.html">Policies</a></li>
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
                &copy; Guitar Tutor, Inc.
              </div>
            </div>

        </div>
      </div>

      <div id="fb-root"></div>

    <script>
      LazyLoad.js('js/abb_combo_all_fb_locale-en_US.js');
    </script>

  </body>

</html>
