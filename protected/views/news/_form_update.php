<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */

/**
 * @file       _form.php$
 * @created    07/10/2013 12:13:40 PM
 * @package    Thankful
 * @copyright  Copyright (C) 2014
 * @license    Proprietary
 * @author     Rohit Gupta
 */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-create-form',
	'enableAjaxValidation'=>false,
	'enableClientValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>false,
	),
	'focus'=>array($model,'news_title') ,
	'htmlOptions'=>array('autocomplete'=>'off', 'enctype' => 'multipart/form-data'),
)); ?>

<fieldset>

	<label>Basic Info</label>
	<?php echo $form->errorSummary($model); ?>
	<section>
		<?php echo $form->labelEx($model,'news_title'); ?>
		<div><?php echo $form->textField($model,'news_title', array('required' => 'required')); ?></div>
		<?php echo $form->error($model,'news_title'); ?>
	</section>

	<section>
		<?php echo $form->labelEx($model,'brief'); ?>
		<div><?php echo $form->textArea($model,'brief', array('required' => 'required')); ?></div>
		<?php echo $form->error($model,'brief'); ?>
	</section>

	<section>
		<?php echo $form->labelEx($model, 'description'); ?>
		<div><?php echo $form->textArea($model, 'description', array('required' => 'required')); ?></div>
		<?php echo $form->error($model, 'description'); ?>
	</section>

	<section>
		<?php echo $form->labelEx($model, 'display_order'); ?>
		<div><?php echo $form->textField($model, 'display_order', array('required' => 'required')); ?></div>
		<?php echo $form->error($model, '	display_order'); ?>
	</section>

	
	
	<section>
		<?php echo $form->labelEx($model, 'active'); ?>
		<div><?php echo $form->textField($model, 'active', array('required' => 'required')); ?></div>
		<?php echo $form->error($model, 'active'); ?>
	</section>
	

</fieldset>



<fieldset>


	<section>
		<div><?php echo CHtml::htmlButton('Submit', array('class' => 'submit', 'type' => 'submit')); ?></div>
	</section>

</fieldset>

<?php $this->endWidget(); ?>