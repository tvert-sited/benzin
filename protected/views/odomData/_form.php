<?php
/* @var $this OdomDataController */
/* @var $model OdomData */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'odom-data-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'odo_begin'); ?>
		<?php echo $form->textField($model,'odo_begin'); ?>
		<?php echo $form->error($model,'odo_begin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'odo_end'); ?>
		<?php echo $form->textField($model,'odo_end'); ?>
		<?php echo $form->error($model,'odo_end'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'auto'); ?>

        <?php


        $list=CHtml::listData(Auto::model()->findAll(array('order' => 'id')), 'id', 'text');

        echo $form->dropDownList($model,'auto',$list, array('prompt' => 'Выберите транспорт'));
//        echo $form->dropDownList($model, 'region_id', CHtml::listData(Region::model()->findAll(), 'id', 'name'), array('prompt' => 'Выберите регион'));

        ?>

        		<?php
        //echo $form->textField($model,'auto');
        ?>

		<?php echo $form->error($model,'auto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_cre'); ?>
		<?php echo $form->textField($model,'date_cre'); ?>
		<?php echo $form->error($model,'date_cre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_mod'); ?>
		<?php echo $form->textField($model,'date_mod'); ?>
		<?php echo $form->error($model,'date_mod'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->