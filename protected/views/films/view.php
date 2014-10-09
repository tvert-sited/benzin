<?php
/* @var $this FilmsController */
/* @var $model Films */

$this->breadcrumbs=array(
	'Films'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Films', 'url'=>array('index')),
	array('label'=>'Create Films', 'url'=>array('create')),
	array('label'=>'Update Films', 'url'=>array('update', 'id'=>$model->code)),
	array('label'=>'Delete Films', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Films', 'url'=>array('admin')),
);
?>

<h1>View Films #<?php echo $model->code; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'code',
		'title',
		'did',
		'date_prod',
		'kind',
		'len',
	),
)); ?>
