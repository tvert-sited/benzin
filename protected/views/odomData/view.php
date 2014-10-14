<?php
/* @var $this OdomDataController */
/* @var $model OdomData */

/*$this->breadcrumbs=array(
	'Odom Datas'=>array('index'),
	$model->id,
);*/

$this->menu=array(
	array('label'=>'Список записей', 'url'=>array('index')),
	array('label'=>'Создать запись', 'url'=>array('create')),
	array('label'=>'Обновить запись', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить запись', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы действительно хотите удалить эту запись?')),
	array('label'=>'Управлять записями', 'url'=>array('admin')),
);
?>

<h1>Просмотр записи #<?php echo $model->id; ?></h1>

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
