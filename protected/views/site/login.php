

<div class="row">
    <div class="col-4 col-center">
      <div class="panel">
          <div class='panel-header'>
            Log in
          </div>
          <div class="panel-body">
              



   <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'htmlOptions'=>array('class'=>'signin-form login-form','data-action'=>'Signin'),
	
	'clientOptions'=>array(
	'validateOnSubmit'=>true,
	),
)); ?>


<div style="margin:0;padding:0;display:inline">

<input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="V2_.airbnb.com_195a6b4e0ac96213" /></div>
  <input id="redirect_params_action" name="redirect_params[action]" type="hidden" value="dashboard" />
<input id="redirect_params_controller" name="redirect_params[controller]" type="hidden" value="home" />

  

  <div class="control-group row-space-1">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('class'=>'decorative-input','placeholder'=>'User Name')); ?>
		<?php echo $form->error($model,'username'); ?>
        
  </div>
  <div class="control-group row-space-2">
  		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('class'=>'decorative-input','placeholder'=>'Password','type'=>'password')); ?>
		<?php echo $form->error($model,'password'); ?>
        
  </div>

  <div class="clearfix row-space-2">
    <label for="remember_me2" class='checkbox remember-me'>
     <?php echo $form->checkBox($model,'rememberMe',array('class'=>'remember_me')); ?>	
      Remember me
    </label>
    <a href="forgot_password.html" class="forgot-password">Forgot password?</a>
  </div>

  	<?php echo CHtml::submitButton('Log In',array('class'=>'btn btn-block btn-primary large btn-large padded-btn-block')); ?>
	
   
 

<?php $this->endWidget(); ?>

          </div>
          <div class="panel-footer panel-body">
          <div class="text-left">
           Already an GuitarGuide member?
          <a href="<?php echo Yii::app()->createUrl('/user/create');?>" class="modal-link" data-modal-href="">
          Sign Up 
          </a>  </div>
           </div>
      </div>
    </div>
  </div>

	


















	
		
  
