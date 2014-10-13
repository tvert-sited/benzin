<?php
/* @var $this OdomDataController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Odom Datas',
);

$this->menu=array(
	array('label'=>'Create OdomData', 'url'=>array('create')),
	array('label'=>'Manage OdomData', 'url'=>array('admin')),
);
?>

<h1>Odom Datas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
