<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->user_id,
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Create Users', 'url'=>array('create')),
	array('label'=>'Update Users', 'url'=>array('update', 'id'=>$model->user_id)),
	array('label'=>'Delete Users', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->user_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<h1>View Users #<?php echo $model->user_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'user_id',
		'firstname',
		'lastname',
		'username',
		'register_surce',
		'date_of_birth',
		'phone',
		'paypal_email',
		'email',
		'address',
		'profile_description',
		'lat',
		'logn',
		'sex',
		'private_email',
		'profile_picture_media_file_id',
		'email_newsletter',
		'reset_password_key',
		'reset_password_timestamp',
		'last_login_datetime',
		'email_address_verified',
		'status',
		'created_on',
		'modified_on',
	),
)); ?>
