<?php
/* @var $this OdomDataController */
/* @var $data OdomData */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('odo_begin')); ?>:</b>
	<?php echo CHtml::encode($data->odo_begin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('odo_end')); ?>:</b>
	<?php echo CHtml::encode($data->odo_end); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('auto')); ?>:</b>
	<?php echo CHtml::encode($data->auto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_cre')); ?>:</b>
	<?php echo CHtml::encode($data->date_cre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_mod')); ?>:</b>
	<?php echo CHtml::encode($data->date_mod); ?>
	<br />


</div>