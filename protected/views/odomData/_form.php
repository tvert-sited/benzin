<?php
/* @var $this OdomDataController */
/* @var $model OdomData */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'odom-data-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p>Все поля должны быть заполнены.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php
//        echo $form->labelEx($model,'odo_begin');
        echo $form->label($model,'odo_begin');
        ?>
		<?php echo $form->textField($model,'odo_begin'); ?>
		<?php echo $form->error($model,'odo_begin'); ?>
	</div>

	<div class="row">
		<?php
//        echo $form->labelEx($model,'odo_end');
        echo $form->label($model,'odo_end');
        ?>
		<?php echo $form->textField($model,'odo_end'); ?>
		<?php echo $form->error($model,'odo_end'); ?>
	</div>

	<div class="row">
		<?php
//        echo $form->labelEx($model,'auto');
        echo $form->label($model,'auto');
        ?>

        <?php
        $list=CHtml::listData(Auto::model()->findAll(array('order' => 'id')), 'id', 'text');
        echo $form->dropDownList($model,'auto',$list, array('prompt' => 'Выберите транспорт'));
        //echo $form->textField($model,'auto'); ?>
		<?php echo $form->error($model,'auto'); ?>
	</div>



	<div class="row">
		<?php
//        echo $form->labelEx($model,'data_vvod');
        echo $form->label($model,'data_vvod');
        ?>

        <?php

        $this->widget('zii.widgets.jui.CJuiDatePicker',
        // 'name'=>'birthdate',
            array(
                'model'=>$model,
                'value'=>$model->data_vvod,
                'attribute'=>'data_vvod',
                //        'name'=>"Guest[created]", // the name of the field
                // pre-fill the value
                // additional javascript options for the date picker plugin
                'options'=>array(
                        'showAnim'=>'fold',
                        'dateFormat'=>'yy-mm-dd',  // optional Date formatting
                        'debug'=>true,),
                'htmlOptions'=>array(
                        'style'=>'height:20px;'
            )));

		// echo $form->textField($model,'data_vvod');
        ?>



		<?php echo $form->error($model,'data_vvod'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Заполнить' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->