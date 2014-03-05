
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

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(5),
	//'filter'=>$model,
	'hideHeader'=>false,
	//'enableHistroy'=>true,
	//'enableSorting'=>false,
	//'showTableOnEmpty'=>true,
	'summaryText'=>'5 latest User Profiles ',
	'enablePagination'=>false,
	'htmlOptions'=>array('style'=>'width:400px;'),
	'columns'=>array(
		  array(
            'name' => 'profile_picture_filename',
            'type' => 'raw',
            'value' => function(Users $data){
				if (!empty($data->profile_picture_media_file_id))
				{
					echo '<a class="btn small fancybox" href="'. $data->getUploadedFileFullPath('profile_picture')  
							.'"><img src="'. $data->getUploadedFileFullPath('profile_picture')  .'" width="30"></a>';
				}
			},
			'filter' => false,
			'sortable' => false,
			'header' => 'Profile Picture',
			'headerHtmlOptions' => array('width' => '10%'),
        ), 
		
		'firstname',
		'lastname',
		
	),
)); ?>

