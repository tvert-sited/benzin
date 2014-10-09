<?php
/* @var $this FilmsController */
/* @var $model Films */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'films-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'code'); ?>
		<?php echo $form->textField($model,'code',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'did'); ?>
		<?php echo $form->textField($model,'did'); ?>
		<?php echo $form->error($model,'did'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_prod'); ?>
		<?php echo $form->textField($model,'date_prod'); ?>
		<?php echo $form->error($model,'date_prod'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kind'); ?>
		<?php echo $form->textField($model,'kind',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'kind'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'len'); ?>
		<?php echo $form->textField($model,'len'); ?>
		<?php echo $form->error($model,'len'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->