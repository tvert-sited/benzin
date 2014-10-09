<?php
/* @var $this FilmsController */
/* @var $model Films */

$this->breadcrumbs=array(
	'Films'=>array('index'),
	$model->title=>array('view','id'=>$model->code),
	'Update',
);

$this->menu=array(
	array('label'=>'List Films', 'url'=>array('index')),
	array('label'=>'Create Films', 'url'=>array('create')),
	array('label'=>'View Films', 'url'=>array('view', 'id'=>$model->code)),
	array('label'=>'Manage Films', 'url'=>array('admin')),
);
?>

<h1>Update Films <?php echo $model->code; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>