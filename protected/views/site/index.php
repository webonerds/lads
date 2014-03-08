

  <ul class="list-unstyled" id="slideshow">
        <li class="active" data-bg-opacity="1">
        <img alt="Astronomic Hotel" src="https://a0.muscache.com/airbnb/static/landing_pages/home_v2/hero/28429-953cc465c5c74685970caed61328115e.jpg"  height="700" width="1600">
          <div class="caption">
            <a href="/rooms/28429" class="media-photo pull-right">
              <img src="https://a0.muscache.com/airbnb/static/landing_pages/home_v2/thumbs/28429-420535ba45ff12bb624c4774ac9dd8b7.jpg"  height="40" width="40">
            </a>
            <p>
              <strong><a href="/rooms/28429">Astronomic Hotel</a></strong><br />
              <a href="/rooms/28429">Coquimbo, Chile</a> -
              <span class="price" data-price="190.0">
                <a href="/rooms/28429">$190</a>
              </span>
            </p>
          </div>
        </li>
        <li  data-bg-opacity="0.6">
        <img alt="Casa Caracol" data-image-url="https://a0.muscache.com/airbnb/static/landing_pages/home_v2/hero/530250-ca21515e1cf19fa3942934f28e5b93c8.jpg"  height="700" width="1600">
          <div class="caption">
            <a href="/rooms/530250" class="media-photo pull-right">
              <img data-image-url="https://a0.muscache.com/airbnb/static/landing_pages/home_v2/thumbs/530250-5fc8881c653e8935fb910ca8e925aa8b.jpg"  height="40" width="40">
            </a>
            <p>
              <strong><a href="/rooms/530250">Casa Caracol</a></strong><br />
              <a href="/rooms/530250">Isla Mujeres, Mexico</a> -
              <span class="price" data-price="225.0">
                <a href="/rooms/530250">$225</a>
              </span>
            </p>
          </div>
        </li>
        <li  data-bg-opacity="1">
        <img alt="Off-Grid House" data-image-url="https://a0.muscache.com/airbnb/static/landing_pages/home_v2/hero/19606-639210c9f6b3d9903a903cc7a53eab53.jpg"  height="700" width="1600">
          <div class="caption">
            <a href="/rooms/19606" class="media-photo pull-right">
              <img data-image-url="https://a0.muscache.com/airbnb/static/landing_pages/home_v2/thumbs/19606-9e2044e01c419b861d175ddb3267a848.jpg"  height="40" width="40">
            </a>
            <p>
              <strong><a href="/rooms/19606">Off-Grid House</a></strong><br />
              <a href="/rooms/19606">Pioneertown, California</a> -
              <span class="price" data-price="360.0">
                <a href="/rooms/19606">$360</a>
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


