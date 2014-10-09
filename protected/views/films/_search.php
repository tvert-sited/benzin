<?php
/* @var $this FilmsController */
/* @var $model Films */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'code'); ?>
		<?php echo $form->textField($model,'code',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'did'); ?>
		<?php echo $form->textField($model,'did'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_prod'); ?>
		<?php echo $form->textField($model,'date_prod'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kind'); ?>
		<?php echo $form->textField($model,'kind',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'len'); ?>
		<?php echo $form->textField($model,'len'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->