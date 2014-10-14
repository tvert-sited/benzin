<?php
/* @var $this AutoController */
/* @var $model Auto */

/*$this->breadcrumbs=array(
	'Autos'=>array('index'),
	'Create',
);*/

$this->menu=array(
	array('label'=>'Перечень техники', 'url'=>array('index')),
	array('label'=>'Управление списком', 'url'=>array('admin')),
);
?>

<h1>Создать новый объект учета.</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>