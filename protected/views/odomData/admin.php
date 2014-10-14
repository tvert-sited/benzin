<?php
/* @var $this OdomDataController */
/* @var $model OdomData */

/*$this->breadcrumbs=array(
	'Odom Datas'=>array('index'),
	'Manage',
);*/

$this->menu=array(
	array('label'=>'Список записей', 'url'=>array('index')),
	array('label'=>'Создать запись', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#odom-data-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление записями показаний одометров.</h1>

<p>
Вы можете управлять поиском с помощью операторов сравнения (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) подставляя их в поисковые поля вместе с сравниваемыми значениями.
</p>

<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'odom-data-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
//		'id',
		'odo_begin',
		'odo_end',
		'auto',
//		'data_ins',
//		'data_upd',
//		'arch',
		'data_vvod',
//		'data_del',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
