<?php
/* @var $this OdomDataController */
/* @var $model OdomData */

$this->breadcrumbs=array(
	'Odom Datas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List OdomData', 'url'=>array('index')),
	array('label'=>'Create OdomData', 'url'=>array('create')),
	array('label'=>'Update OdomData', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete OdomData', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OdomData', 'url'=>array('admin')),
);
?>

<h1>View OdomData #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'odo_begin',
		'odo_end',
		'auto',
//		'data_ins',
//		'data_upd',
//		'arch',
		'data_vvod',
//		'data_del',
	),
)); ?>
