<?php
/* @var $this OdomDataController */
/* @var $dataProvider CActiveDataProvider */

/*$this->breadcrumbs=array(
	'Odom Datas',
);*/

$this->menu=array(
	array('label'=>'Создать запись', 'url'=>array('create')),
	array('label'=>'Управление записями', 'url'=>array('admin')),
);
?>

<h1>Просмотр данных</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
