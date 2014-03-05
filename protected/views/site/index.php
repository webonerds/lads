<div id="hero" style="display:block;" 
     data-native-currency="KRW"
     class="">
  <ul class="list-unstyled" id="slideshow">
        <li class="active" data-bg-opacity="1">
        <img alt="Historic Stone Home in Lecce" src="images/hero/1.jpg"  height="700" width="1600">
          <div class="caption">
            <a href="rooms/342074.html" class="media-photo pull-right">
              <img src="images/thumbs/test.jpg"  height="40" width="40">
            </a>
            <p>
              <strong><a href="rooms/342074.html">Historic Stone Home in Lecce</a></strong><br />
              <a href="rooms/342074.html">Lecce, Italy</a> -
              <span class="price" data-price="47.8862">
                <a href="rooms/342074.html">$48</a>
              </span>
            </p>
          </div>
        </li>
        <li  data-bg-opacity="1">
        <img alt="Safari Tents in New Zealand" data-image-url="	"  height="700" width="1600">
          <div class="caption">
            <a href="rooms/536216.html" class="media-photo pull-right">
              <img data-image-url="images/hero/2.jpg"  height="40" width="40">
            </a>
            <p>
              <strong><a href="rooms/536216.html">Safari Tents in New Zealand</a></strong><br />
              <a href="rooms/536216.html">Kerikeri, New Zealand</a> -
              <span class="price" data-price="91.7737">
                <a href="rooms/536216.html">$92</a>
              </span>
            </p>
          </div>
        </li>
        <li  data-bg-opacity="0.8">
        <img alt="Charming Studio in Milan" data-image-url="2.jpg"  height="700" width="1600">
          <div class="caption">
            <a href="rooms/6400.html" class="media-photo pull-right">
              <img data-image-url="images/hero/2.jpg"  height="40" width="40">
            </a>
            <p>
              <strong><a href="rooms/6400.html">Charming Studio in Milan</a></strong><br />
              <a href="rooms/6400.html">Milan, Italy</a> -
              <span class="price" data-price="164.181">
                <a href="rooms/6400.html">$164</a>
              </span>
            </p>
          </div>
        </li>
  </ul>

  <div class="search-area">
    <div class="page-container page-container-fixed">
      <div class="row">
        <div class="col-11">
          <div id="blob-bg" style="opacity: 1"></div>
          <h1 class='text-special'>Find Profiles.</h1>
          <h2>people in over 34,000 cities and 192 countries.</h2>

<?php 
              $model = new Users; 
              $form=$this->beginWidget('CActiveForm', array(
                    'action'=>Yii::app()->createUrl('/site/index'),
                    //'method'=>'get',
					'htmlOptions'=>array('class'=>'custom show-search-options position-left form-inline')
            )); ?>
            <div class="input-wrapper">
            	<?php echo $form->textField($model,'firstname',array('placeholder'=>'Search By City, Zipcode','class'=>'location input-large input-contrast')); ?>

			   <p id="enter_location_error_message" class="bad" style="display:none;">
                Please set location
              </p>
            </div>
            
         
            <?php echo CHtml::htmlButton('Search', array('class' => 'btn btn-primary btn-large btn-contrast', 'type' => 'submit')); ?>
            
		<?php $this->endWidget(); ?>
        </div>
      </div>
    </div>
  </div>
    <a href="#" class="slideshow-scroll slideshow-scroll-prev faded-out show-desktop">
      <i class="icon icon-chevron-left"></i>
    </a>
    <a href="#" class="slideshow-scroll slideshow-scroll-next faded-out show-desktop">
      <i class="icon icon-chevron-right"></i>
    </a>
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

<ul class="city-tiles list-unstyled">
      <li class="city-tile">
        <div class="media-photo city-tile city-tile-mexico-city"></div>
        <a href="locations/mexico-city.html">
          <h4 class='text-special'>
            Mexico City
          </h4>
          <span>
            15 neighborhoods
          </span>
		</a><span class="label label-new">New</span>
      </li>
      <li class="city-tile">
        <div class="media-photo city-tile city-tile-tokyo"></div>
        <a href="locations/tokyo.html">
          <h4 class='text-special'>
            Tokyo
          </h4>
          <span>
            20 neighborhoods
          </span>
</a>      </li>
      <li class="city-tile">
        <div class="media-photo city-tile city-tile-ny"></div>
        <a href="locations/new-york.html">
          <h4 class='text-special'>
            New York
          </h4>
          <span>
            60 neighborhoods
          </span>
</a>      </li>
      <li class="city-tile">
        <div class="media-photo city-tile city-tile-paris"></div>
        <a href="locations/paris.html">
          <h4 class='text-special'>
            Paris
          </h4>
          <span>
            31 neighborhoods
          </span>
</a>      </li>
</ul>

<div class="referrals-tile">
  <h4 class='text-special row-space-4'>
    Invite friends, earn travel credit
  </h4>
  <p class="row-space-4" id="referrals-promo-subtext">
    Earn travel credit for every friend you invite.
  </p>
  <a href="inviteadc4.html?r=11" class="btn btn-primary btn-large">
    Invite friends
  </a>
</div>

<div class="row-space-6 col-12">
  <p class='text-center'>
    <a href="locations.html" class="text-copy">All neighborhood guides</a>
  </p>
</div>

  </div>
</div>

<div class="page-container page-container-fixed">
  <div class="row">
    <div class="col-4 text-copy">
      <h3 class="text-special">Travel</h3>
      <p>From apartments and rooms to treehouses and boats: stay in unique spaces in 192 countries.</p>
      <p><a href="help/getting-started/how-to-travel.html">
        See how to travel on Airbnb</a></p>
    </div>

    <div class="col-4 text-copy">
      <h3 class="text-special">Host</h3>
      <p>Renting out your unused space could pay your bills or fund your next vacation.</p>
      <p><a href="help/getting-started/how-to-host.html">
        Learn more about hosting</a></p>
    </div>

    <div class="col-4 text-copy">
      <h3 class="text-special">
        Trust and Safety
      </h3>

      <p>From Verified ID to our worldwide customer support team, we've got your back.</p>
      <p><a href="trust.html">
        Learn about trust at Airbnb</a></p>
    </div>
  </div>
</div>