<?php
/* @var $this OdomDataController */
/* @var $model OdomData */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>



	<div class="row">
		<?php echo $form->label($model,'odo_begin'); ?>
		<?php echo $form->textField($model,'odo_begin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'odo_end'); ?>
		<?php echo $form->textField($model,'odo_end'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'auto'); ?>
		<?php echo $form->textField($model,'auto'); ?>
	</div>



	<div class="row">
		<?php echo $form->label($model,'data_vvod'); ?>
		<?php echo $form->textField($model,'data_vvod'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Искать!'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->