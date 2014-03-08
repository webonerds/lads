<div class="row">
    <div class="col-10 col-center">
             <div class="panel">
        <div class="panel col-6">
        <div class="panel-padding panel-body">
               <div class='panel-header'>
                Update Profile
                </div>
         		 
                 <div class="panel-body">
              
    
    
			<?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'users-create-form',
                'enableAjaxValidation'=>true,
                'enableClientValidation'=>false,
                'clientOptions'=>array(
                    'validateOnSubmit'=>false,
                ),
                'focus'=>array($model,'username') ,
                'htmlOptions'=>array('autocomplete'=>'off', 'enctype' => 'multipart/form-data','class'=>'signup-form','data-action'=>'Signup'),
            ));
			 ?>
              
        
             
        <div class="control-group row-space-1" id="inputFirst">
            <?php echo $form->labelEx($model, 'username'); ?>
            <div><?php echo $form->textField($model, 'username', array('required' => 'required','class'=>'decorative-input','placeholder'=>'User Name')); ?> </div>
            <?php echo $form->error($model, 'username'); ?>
        
        </div>
        
        <div class="control-group row-space-1" id="inputLast">
                <?php echo $form->labelEx($model, 'password'); ?>
                <div><?php echo $form->passwordField($model, 'password', array('required' => 'required','class'=>'decorative-input','placeholder'=>'Password')); ?></div>
                <?php echo $form->error($model, 'password'); ?>
        </div>
        <div class="control-group row-space-1" id="inputFiestName">
                <?php echo $form->labelEx($model, 'firstname'); ?>
                <div><?php echo $form->textField($model, 'firstname', array('required' => 'required','class'=>'decorative-input','placeholder'=>'First Name')); ?></div>
                <?php echo $form->error($model, 'firstname'); ?>
        </div>
        <div class="control-group row-space-1" id="inputLastName">
                <?php echo $form->labelEx($model, 'lastname'); ?>
                <div><?php echo $form->textField($model, 'lastname', array('required' => 'required','class'=>'decorative-input','placeholder'=>'Last Name')); ?></div>
                <?php echo $form->error($model, 'lastname'); ?>
        </div>
        
        
        
        <div class="control-group row-space-1" id="inputConfirmPrivateemail">
                 <?php echo $form->labelEx($model, 'private_email'); ?>
                <div><?php echo $form->textField($model, 'private_email', array('required' => 'required', 'type' => 'email','class'=>'decorative-input','placeholder'=>'Private Email')); ?>
                </div>
                <?php echo $form->error($model, 'private_email'); ?>
        </div>
        <div class="control-group row-space-1" id="inputConfirmProfilePicture">
                 <?php echo $form->labelEx($model, 'paypal_email'); ?>
                <div><?php echo $form->textField($model, 'paypal_email', array('required' => 'required','class'=>'decorative-input','placeholder'=>'Password')); ?>
                </div>
                <?php echo $form->error($model, 'paypal_email'); ?>
            </div>
            
        <div class="control-group row-space-1" id="inputConfirmPrivateemail">
        
              <?php echo $form->labelEx($model,'date_of_birth'); ?>
                    <?php
                             $this->widget( 'zii.widgets.jui.CJuiDatePicker', array(
                          'model' => $model, // Your model
                          'attribute' => 'date_of_birth', // Attribute for input
                          'options' => array(
                                  'dateFormat' => Yii::app()->params->dateformat,
                                  'changeMonth' => 'true',
                                  'value'=>Yii::app()->dateFormatter->format("Y-m-d",strtotime($model->date_of_birth)),
                                  'changeYear' => 'true',
                                  'showAnim' =>'slide',
                                   'showOn' => 'both',
                                  //'showOn'=>'button',
                                  'buttonImage'=>Yii::app()->baseUrl."/images/canlender.jpg",
                                 // 'buttonImageOnly'=>true,
                                 'yearRange'=>'1970:2013',
                                  'style'=>'padding-left: 9px; z-index:999;',
                                ),
                              
                                'htmlOptions' => array(
                                  'autocomplete' => 'off',
                                  'size' => 20,
                                  'maxlength' => 10,
								  'style'=>'width:300px;',
                                  'class'=>'date input pop-up-calendar dp-applied span-4',
                                ),
                              
                        ));
                  ?>
                    <?php echo $form->error($model,'date_of_birth'); ?>
                
        
            </div>
        
               <div class="control-group row-space-1" id="inputConfirmProfilePicture">
        
                <?php echo $form->labelEx($model, 'phone'); ?>
                <div><?php echo $form->textField($model, 'phone', array('required' => 'required','class'=>'decorative-input','placeholder'=>'Contact Number')); ?></div>
                <?php echo $form->error($model, 'phone'); ?>
            </div>
              <div class="control-group row-space-1" id="inputConfirmProfilePicture">
        
                <?php echo $form->labelEx($model, 'address'); ?>
                <div><?php echo $form->textField($model, 'address', array('required' => 'required','class'=>'decorative-input','placeholder'=>'Address')); ?></div>
                <?php echo $form->error($model, 'address'); ?>
            </div>
            
              <div class="control-group row-space-1" id="inputConfirmProfilePicture">
        
                <?php echo $form->labelEx($model,'country'); ?>
                <div><?php echo $form->textField($model,'country', array('required' => 'required','class'=>'decorative-input','placeholder'=>'Country')); ?></div>
                <?php echo $form->error($model,'country'); ?>
            </div>
            
               <div class="control-group row-space-1" id="inputConfirmProfilePicture">
        
                <?php echo $form->labelEx($model,'state'); ?>
                <div><?php echo $form->textField($model,'state',array('required' => 'required','class'=>'decorative-input','placeholder'=>'State')); ?></div>
                <?php echo $form->error($model,'state'); ?>
            </div>
            
               <div class="control-group row-space-1" id="inputConfirmProfilePicture">
        
                <?php echo $form->labelEx($model,'city'); ?>
                <div><?php echo $form->textField($model,'city', array('required' => 'required','class'=>'decorative-input','placeholder'=>'City')); ?></div>
                <?php echo $form->error($model,'city'); ?>
            </div>
            
               <div class="control-group row-space-1" id="inputConfirmProfilePicture">
        
                <?php echo $form->labelEx($model,'zipcode'); ?>
                <div><?php echo $form->textField($model,'zipcode', array('required' => 'required','class'=>'decorative-input','placeholder'=>'Zip Code')); ?></div>
                <?php echo $form->error($model,'zipcode'); ?>
            </div>
            
            
              <div class="control-group row-space-1" id="inputConfirmProfilePicture">
        
                <?php echo $form->labelEx($model, 'sex'); ?>
                <div><?php echo $form->textField($model,'sex',array('required' => 'required','class'=>'decorative-input','placeholder'=>'User Name')); ?></div>
                <?php echo $form->error($model, 'sex'); ?>
            </div>
        
        
        
              <div class="control-group row-space-1" id="inputConfirmProfilePicture">
        
                <?php echo $form->labelEx($model, 'profile_description'); ?>
                <div><?php echo $form->textField($model, 'profile_description', array('required' => 'required')); ?></div>
                <?php echo $form->error($model, 'profile_description'); ?>
            </div>
            
              <div class="control-group row-space-1" id="inputConfirmProfilePicture">
           <?php echo $form->labelEx($model, 'profile_picture_media_file_id'); ?>
                <div>
                    <?php echo $form->fileField($model, 'profile_picture_media_file_id',array('required' => 'required','class'=>'decorative-input')); ?>
                    <?php ViewFormHelper::imageActions($this, $model, 'profile_picture', array('ShowView' => true)); ?>
                    <div class="clearfix"></div><span>(jpg, gif & png only, Max size: 500Kb)</span>
                </div>
                <?php echo $form->error($model, 'profile_picture_filename'); ?>      
        </div>
        
          
          <div id='map' streetnumber='946' streetname='LAKE+DESTINY+RD'
                cityname='ALTAMONTE+SPRINGS' statecode='FL' zipcode='32714'
                zoom=18 width=500 height=300>
            </div>
        
        
          <script>
        $.fn.googlemap = function(){
            // author: Christian Salazar <christiansalazarh@gmail.com>
            var src='';
            $(this).each(function(){
            var z = $(this);
            var address = jQuery.trim(z.attr('streetnumber'))
                +'+'+jQuery.trim(z.attr('streetname'))
                +'+'+jQuery.trim(z.attr('cityname'))
                +'+'+jQuery.trim(z.attr('statecode'))
                +'+'+jQuery.trim(z.attr('zipcode'))
            ;
            src="https://maps.google.com/maps?"
                +"client=safari"
                +"&q="+address
                +"&oe=UTF-8&ie=UTF8&hq="
                +"&hnear="+address
                +"&gl=us"
                +"&z="+z.attr('zoom')
                +"&output=embed";
                z.html("<iframe src='"+src+"' width="+z.attr('width')+" height="
                +z.attr('height')+"></iframe>");
            });
            return src;
        }
        </script>
          <div class="control-group row-space-1" id="inputConfirmProfilePicture">
           
            <div><script>$('#map').googlemap();</script></div>
        </div>
        
        <script>
          var url = $('#mymap').googlemap();
          $('#mymap').parent().append("<a href='"+url+"'>enlarge map</a>");
        </script>
        
          
          
                <?php echo CHtml::submitButton('Update',array('class'=>'btn btn-primary large btn-large padded-btn-block')); ?>
        
        
        
            <?php $this->endWidget(); ?>
        

 
    </div>
   	   			
		</div>
     
    </div>
</div>




		
	
		
	
		
	
		
	
	