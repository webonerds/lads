<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>


<div id="example" class="modal" aria-hidden="false" >

<div class="modal-table"><div class="modal-cell">

<div class="signup modal-content">
  <h3 class="panel-header-gray panel-header">
  Sign up
</h3>

<div id="notice" class="alert panel-header alert-header alert-danger alert-error hidden-element"></div>



<?php $this->renderPartial('_form' ,array('model'=>$model,
	
	)); ?>
	
    
    




  </div></div></div></div>
  