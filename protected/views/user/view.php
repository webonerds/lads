<div class="row">

<div class="col-10 col-center">
      <div class="panel">

<h3 class="panel-header-gray panel-header">
 View Profile
</h3>
<div id="notice" class="alert panel-header alert-header alert-danger alert-error hidden-element"></div>
<div class="panel-padding panel-body">
    

	
   

    <div class="text-center">
      <a href="/signup_login?sm=2" class="create-using-email padded-btn-block row-space-2 btn btn-primary btn-block btn-large large hidden-element">
        Sign up with Email
</a>    </div>

<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->user_id,
);

?><h5><?php echo CHtml::link("update Profile",Yii::app()->createUrl('user/update',array('id'=>$model->user_id)));?></h5>
<h5><?php echo CHtml::link("Home",Yii::app()->createUrl('site/index',array('id'=>$model->user_id)));?></h5>

<h1>View Users #<?php echo $model->user_id; ?></h1>

<?php 

if (!empty($model->profile_picture_media_file_id))
				{
					echo '<a class="btn small fancybox" href="'. $model->getUploadedFileFullPath('profile_picture')  
							.'"><img src="'. $model->getUploadedFileFullPath('profile_picture')  .'" width="100"></a>';
				}
				
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
	    
		'reviews',
		 
		'firstname',
		'lastname',
		'username',
		//'password',
		'register_surce',
		'date_of_birth',
		'phone',
		'paypal_email',
		'email',
		'country',
		'state',
		'city',
		'zipcode',
		'address',
		'profile_description',
		'sex',
		'private_email',
		'last_login_datetime',
		'status',
	),
)); ?>


