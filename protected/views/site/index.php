

  <ul class="list-unstyled" id="slideshow">
        <li class="active" data-bg-opacity="1">
        <img alt="Garden Apartment in Amsterdam" src="https://a0.muscache.com/airbnb/static/landing_pages/home_v2/hero/436914-611fe483545f7a1907ed1b7fcdc369d2.jpg"  height="700" width="1600">
          <div class="caption">
            <a href="/rooms/436914" class="media-photo pull-right">
              <img src="https://a0.muscache.com/airbnb/static/landing_pages/home_v2/thumbs/436914-e626a4bb28d8cd12f7f2df4822df5a51.jpg"  height="40" width="40">
            </a>
            <p>
              <strong><a href="/rooms/436914">Garden Apartment in Amsterdam</a></strong><br />
              <a href="/rooms/436914">Amsterdam, Netherlands</a> -
              <span class="price" data-price="187.16206848745318">
                <a href="/rooms/436914">$187</a>
              </span>
            </p>
          </div>
        </li>
        <li  data-bg-opacity="0.7">
        <img alt="Writer's Studio" data-image-url="https://a0.muscache.com/airbnb/static/landing_pages/home_v2/hero/455449-6e34238c317b250bda173045d06d4d49.jpg"  height="700" width="1600">
          <div class="caption">
            <a href="/rooms/455449" class="media-photo pull-right">
              <img data-image-url="https://a0.muscache.com/airbnb/static/landing_pages/home_v2/thumbs/455449-27bdd5aa2cbf2baf530e93cc3bb3b4da.jpg"  height="40" width="40">
            </a>
            <p>
              <strong><a href="/rooms/455449">Writer's Studio</a></strong><br />
              <a href="/rooms/455449">Paris, France</a> -
              <span class="price" data-price="180.23014002495492">
                <a href="/rooms/455449">$180</a>
              </span>
            </p>
          </div>
        </li>
        <li  data-bg-opacity="1">
        <img alt="Converted Brooklyn Warehouse" data-image-url="https://a0.muscache.com/airbnb/static/landing_pages/home_v2/hero/289130-6a86c1c0d3e71fb4a3dfcf662f598858.jpg"  height="700" width="1600">
          <div class="caption">
            <a href="/rooms/289130" class="media-photo pull-right">
              <img data-image-url="https://a0.muscache.com/airbnb/static/landing_pages/home_v2/thumbs/289130-bfdf34cdc9158447cf061688f4d66553.jpg"  height="40" width="40">
            </a>
            <p>
              <strong><a href="/rooms/289130">Converted Brooklyn Warehouse</a></strong><br />
              <a href="/rooms/289130">Brooklyn, New York</a> -
              <span class="price" data-price="60.0">
                <a href="/rooms/289130">$60</a>
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
          <h2>people in over <?php echo Users::model()->getColumnCount('city');?> cities and <?php echo Users::model()->getColumnCount('country');?> countries.</h2>

           <?php 
              $model = new Users; 
              $form=$this->beginWidget('CActiveForm', array(
                    'action'=>Yii::app()->createUrl('/site/index'),
                    //'method'=>'get',
					'htmlOptions'=>array('class'=>'custom show-search-options position-left form-inline')
            )); ?>
            <div class="input-wrapper">
            	<?php echo $form->textField($model,'firstname',array('placeholder'=>'Search By City, Zipcode','class'=>'location input-large input-contrast','style'=>'width:500px;'          )); ?>

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


