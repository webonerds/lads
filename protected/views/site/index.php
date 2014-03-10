

  <ul class="list-unstyled" id="slideshow">
        <li class="active" data-bg-opacity="1">
        <img alt="Astronomic Hotel" src="https://a0.muscache.com/airbnb/static/landing_pages/home_v2/hero/28429-953cc465c5c74685970caed61328115e.jpg"  height="500" width="1600">
          <div class="caption">
            <a href="/rooms/28429" class="media-photo pull-right">
              <img src="https://a0.muscache.com/airbnb/static/landing_pages/home_v2/thumbs/28429-420535ba45ff12bb624c4774ac9dd8b7.jpg"  height="40" width="40">
            </a>
            
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


