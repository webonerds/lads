<?php
/* @var $this FlyersController */
/* @var $model Flyers */

$this->breadcrumbs=array(
	'Flyers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Flyers', 'url'=>array('index')),
	array('label'=>'Create Flyers', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#flyers-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Flyers</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'flyers-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'mls_number',
		'price',
		'country',
		'state',
		/*
		'city',
		'address',
		'description',
		'bedrooms',
		'baths',
		'half_baths',
		'square_feet',
		'acres',
		'year_built',
		'type',
		'sale_price',
		'rented_price',
		'list_date',
		'added_on',
		'added_by',
		'updated_on',
		'status',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
