<?php
/**
 * @file       index.php$
 * @created    07/10/2013 12:13:34 PM
 * @package    Thankful
 * @copyright  Copyright (C) 2014
 * @license    Proprietary
 * @author     Rohit Gupta
 */

/* @var $this  UserController */
/* @var $model Users */

$this->pageTitle = Yii::app()->name . ' - Users Summary';
?>

<h1>Users Summary</h1>
<p>Below is a summary of all the users in the system</p>			

<?php if(Yii::app()->user->hasFlash('message')): ?>
	<div class="alert success"><?php echo Yii::app()->user->getFlash('message'); ?></div>
<?php endif;?>
	
<?php $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => $model->search(),
	'filter' => $model,
	'rowCssClass' => array('gradeB odd', 'gradeB even'),
	'afterAjaxUpdate'=>'afterAjaxUpdate',
    'columns' => array(
      
		
		array(
            'name' => 'news_title',
            'type' => 'raw',
            'value' => 'CHtml::encode($data->news_title)'
        ),

		array(
            'name' => 'brief',
            'type' => 'raw',
            'value' => 'CHtml::encode($data->brief)'
        ),
		
		array(
            'name' => 'description',
            'type' => 'raw',
            'value' => 'CHtml::encode($data->description)'
        ),
		array(
            'name' => 'display_order',
            'type' => 'raw',
            'value' => 'CHtml::encode($data->display_order)'
        ),
     
	 /*
        array(
            'name' => 'status',
            'type' => 'raw',
            'value' => function($data){
					$activeIconClass = $data->status == 1 ? "i_tick" : "i_cross";
					
						echo CHtml::link("", "index.php?r=user/toggleActive&id=" . $data->user_id, array("class" => "btn small toggleActive " . $activeIconClass));
				
            },
			'filter' => $model->getYesNoFilterArray(),
			'htmlOptions' => array('class' => 'button-column'),
			'headerHtmlOptions' => array('class' => 'button-column'),
        ),
		
		*/
		array(
            'class' => 'CButtonColumn',
			'template'=>'{view}{update}{delete}',
			'headerHtmlOptions' => array('class' => 'button-column'),
        )
    ),
)); ?>
    
<?php  
	
$cs = Yii::app()->getClientScript();  

$cs->registerScript('ajax-update','function afterAjaxUpdate(id, data){
	$("select").uniform();
}');
?>