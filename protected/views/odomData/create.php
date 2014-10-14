<?php
/* @var $this OdomDataController */
/* @var $model OdomData */

/*$this->breadcrumbs=array(
	'Odom Datas'=>array('index'),
	'Create',
);*/

$this->menu=array(
	array('label'=>'Список записей', 'url'=>array('index')),
	array('label'=>'Управлять записями', 'url'=>array('admin')),
);
?>

<h1>Ввод показаний одометров</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>