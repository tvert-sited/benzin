<?php
/* @var $this OdomDataController */
/* @var $model OdomData */

$this->breadcrumbs=array(
	'Odom Datas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List OdomData', 'url'=>array('index')),
	array('label'=>'Create OdomData', 'url'=>array('create')),
	array('label'=>'View OdomData', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage OdomData', 'url'=>array('admin')),
);
?>

<h1>Update OdomData <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>