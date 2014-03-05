<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>



<div class='fl'>
	<h1>Create an News</h1>
	<p>Please fill out the form below to create a new News</p>
</div>
<div class='clearfix'></div>

<?php $this->renderPartial('_form' ,array('model'=>$model,
	
	)); ?>