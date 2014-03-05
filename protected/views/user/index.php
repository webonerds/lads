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


<?php if(Yii::app()->user->hasFlash('message')): ?>
	<div class="alert success"><?php echo Yii::app()->user->getFlash('message'); ?></div>
<?php endif;?>
	
