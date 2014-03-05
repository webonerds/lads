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
	'id'=>'pages-create-form',
	'enableAjaxValidation'=>false,
	'enableClientValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>false,
	),
	//'focus'=>array($model,'username') ,
	'htmlOptions'=>array('autocomplete'=>'off', 'enctype' => 'multipart/form-data'),
)); ?>

<fieldset>

	<label>Basic Info</label>
	<?php echo $form->errorSummary($model); ?>
	<section>
		<?php echo $form->labelEx($model, 'page_title'); ?>
		<div><?php echo $form->textField($model, 'page_title', array('required' => 'required')); ?></div>
		<?php echo $form->error($model, 'page_title'); ?>
	</section>

	

	<section>
		<?php echo $form->labelEx($model, 'page_slug'); ?>
		<div><?php echo $form->textField($model, 'page_slug', array('required' => 'required')); ?></div>
		<?php echo $form->error($model, 'page_slug'); ?>
	</section>

	<section>
		<?php echo $form->labelEx($model, 'page_content'); ?>
		<div><?php echo $form->textArea($model, 'page_content', array('required' => 'required')); ?></div>
		<?php echo $form->error($model, 'page_content'); ?>
	</section>

	<section>
		<?php echo $form->labelEx($model, 'meta_title'); ?>
		<div><?php echo $form->textField($model, 'meta_title', array('required' => 'required')); ?></div>
		<?php echo $form->error($model, 'meta_title'); ?>
	</section>
     <section>
		<?php echo $form->labelEx($model, '	meta_keywords'); ?>
		<div><?php echo $form->textField($model, 'meta_keywords', array('required' => 'required')); ?></div>
		<?php echo $form->error($model, '	meta_keywords'); ?>
	</section>
   
 <section>
		<?php echo $form->labelEx($model, 'meta_description'); ?>
		<div><?php echo $form->textArea($model, 'meta_description', array('required' => 'required')); ?></div>
		<?php echo $form->error($model, 'meta_description'); ?>
	</section>
	
	
	
	

</fieldset>

<fieldset>


	<section>
		<div><?php echo CHtml::htmlButton('Submit', array('class' => 'submit', 'type' => 'submit')); ?></div>
	</section>

</fieldset>

<?php $this->endWidget(); ?>


<?php
$cs = Yii::app()->getClientScript();  	
$ckeditorPath = Yii::app()->baseUrl . "/ckeditor/";
$js = <<<JS
$(document).ready(function  (){

	CKEDITOR.replace( 'Pages_page_content',
    {
		customConfig : '{$ckeditorPath}/basic_config.js'
    });
});
JS;
$cs->registerScript('page-form', $js, CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->baseUrl . "/ckeditor/ckeditor.js", CClientScript::POS_HEAD);
