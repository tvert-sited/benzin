<?php
    /*

     foreach($models as $model){

        $title = CHtml::encode($model->title);

        echo $title;
        echo CHtml::link($title, array('Films/view', 'id'=>$model->code));
        //echo '<hr />';

        echo CHtml::normalizeUrl(array('films/view', 'id'=>$model->code));
        echo '<hr />';
    */
    $this->renderPartial('/part/_part',array('models'=>$models));



/**
 * Created by PhpStorm.
 * User: admin7
 * Date: 09.10.14
 * Time: 10:54
 */ 