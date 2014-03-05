


<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	//'method'=>'get',
)); ?>

	
	<div class="row">
		<label>Search users </label> 
		<?php echo $form->textField($model,'firstname',array('size'=>60,'maxlength'=>1000)); ?>
  
		<?php echo CHtml::submitButton('Search'); ?>

	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->


<?php 

$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
