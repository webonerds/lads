
<div id="example" class="modal" aria-hidden="false" >

<div class="modal-table"><div class="modal-cell">

<div class="signup modal-content">
  <h3 class="panel-header-gray panel-header">
  Log In
</h3>

<div id="notice" class="alert panel-header alert-header alert-danger alert-error hidden-element"></div>










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

      <button type="submit" class="btn btn-primary btn-block btn-large large padded-btn-block">
        Sign up
      </button>
    </div>


<?php $this->endWidget(); ?>


    <div id="tos_outside" class="row-space-top-2 hidden-element">
   

    </div>

<div class="panel-footer panel-body">
  <div class="text-left">
    If you are not GuitarGuide member?
      <a href="<?php echo Yii::app()->createUrl('/user/create');?>" class="modal-link" data-modal-href="">
      Sign Up
</a>  </div>
</div>

</div>






  </div></div></div></div>

		
	
		
	
		
	
		
	
	