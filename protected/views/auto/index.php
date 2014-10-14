<?php
/* @var $this AutoController */
/* @var $dataProvider CActiveDataProvider */

/*$this->breadcrumbs=array(
	'Autos',
);*/

$this->menu=array(
	array('label'=>'Создать новый объект', 'url'=>array('create')),
	array('label'=>'Управление списком', 'url'=>array('admin')),
);
?>

<h1>Перечень техники</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
