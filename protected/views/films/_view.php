<?php
/* @var $this FilmsController */
/* @var $data Films */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->code), array('view', 'id'=>$data->code)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('did')); ?>:</b>
	<?php echo CHtml::encode($data->did); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_prod')); ?>:</b>
	<?php echo CHtml::encode($data->date_prod); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kind')); ?>:</b>
	<?php echo CHtml::encode($data->kind); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('len')); ?>:</b>
	<?php echo CHtml::encode($data->len); ?>
	<br />


</div>