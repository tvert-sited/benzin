<?php
/* @var $this OdomDataController */
/* @var $model OdomData */

$this->breadcrumbs=array(
	'Odom Datas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OdomData', 'url'=>array('index')),
	array('label'=>'Manage OdomData', 'url'=>array('admin')),
);
?>

<h1>Create OdomData</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>