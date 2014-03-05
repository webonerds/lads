<?php
/* @var $this FlyersController */
/* @var $model Flyers */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mls_number'); ?>
		<?php echo $form->textField($model,'mls_number',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'country'); ?>
		<?php echo $form->textField($model,'country',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'state'); ?>
		<?php echo $form->textField($model,'state',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'address'); ?>
		<?php echo $form->textArea($model,'address',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bedrooms'); ?>
		<?php echo $form->textField($model,'bedrooms'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'baths'); ?>
		<?php echo $form->textField($model,'baths'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'half_baths'); ?>
		<?php echo $form->textField($model,'half_baths'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'square_feet'); ?>
		<?php echo $form->textField($model,'square_feet'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'acres'); ?>
		<?php echo $form->textField($model,'acres'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'year_built'); ?>
		<?php echo $form->textField($model,'year_built'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sale_price'); ?>
		<?php echo $form->textField($model,'sale_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rented_price'); ?>
		<?php echo $form->textField($model,'rented_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'list_date'); ?>
		<?php echo $form->textField($model,'list_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'added_on'); ?>
		<?php echo $form->textField($model,'added_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'added_by'); ?>
		<?php echo $form->textField($model,'added_by',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updated_on'); ?>
		<?php echo $form->textField($model,'updated_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->