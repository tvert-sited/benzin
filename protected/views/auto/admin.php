<?php
/* @var $this AutoController */
/* @var $model Auto */

/*$this->breadcrumbs=array(
	'Autos'=>array('index'),
	'Manage',
);*/

$this->menu=array(
	array('label'=>'Список техники', 'url'=>array('index')),
	array('label'=>'Создать новый объект', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#auto-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление списком транспорта</h1>

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
	'id'=>'auto-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'text',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
