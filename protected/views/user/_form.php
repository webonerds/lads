

<div class="signup modal-content">
<h3 class="panel-header-gray panel-header">
  Sign up
</h3>
<div id="notice" class="alert panel-header alert-header alert-danger alert-error hidden-element"></div>
<div class="panel-padding panel-body">
    

	
   

    <div class="text-center">
      <a href="/signup_login?sm=2" class="create-using-email padded-btn-block row-space-2 btn btn-primary btn-block btn-large large hidden-element">
        Sign up with Email
</a>    </div>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-create-form',
	'enableAjaxValidation'=>false,
	'enableClientValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'focus'=>array($model,'username') ,
	'htmlOptions'=>array('autocomplete'=>'off', 'enctype' => 'multipart/form-data','class'=>'signup-form','data-action'=>'Signup'),
)); ?>
  
 	<?php echo $form->errorSummary($model);?>
    	<p class="note">Fields with <span class="required">*</span> are required.</p>

    <div class="signup-form-fields">
      
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

<div class="control-group row-space-1" id="inputSex">
        <?php echo $form->labelEx($model, 'sex'); ?>
		<div><?php echo $form->dropDownList($model, 'sex', array('Male'=>'Male','Female'=>'Female'),array('empty'=>'Select One','required'=>'required','class'=>'decorative-input','placeholdar'=>'esx')); ?></div>
		<?php echo $form->error($model, 'sex'); ?>
</div>
</div>
<div class="control-group row-space-1" id="inputConfirmPrivateemail">
         <?php echo $form->labelEx($model, 'private_email'); ?>
		<div><?php echo $form->textField($model, 'private_email', array( 'required' => 'required','type' => 'email','class'=>'decorative-input','placeholder'=>'Private Email')); ?>
        </div>
		<?php echo $form->error($model, 'private_email'); ?>
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
  
      <button type="submit" class="btn btn-primary btn-block btn-large large padded-btn-block">
        Sign up
      </button>
    </div>


<?php $this->endWidget(); ?>


    <div id="tos_outside" class="row-space-top-2 hidden-element">
   

    </div>
</div>
<div class="panel-footer panel-body">
  <div class="text-left">
    Already an GuitarGuide member?
      <a href="<?php echo Yii::app()->createUrl('/site/login');?>" class="modal-link" data-modal-href="">
      Log in
</a>  </div>
</div>

</div>



		
	
		
	
		
	
		
	
	