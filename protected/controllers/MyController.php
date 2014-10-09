<?php

class MyController extends Controller
{
    public $defaultAction = 'one';
    public function actionOne()
    {
        $models = Films::model()->findAll(array('order'=>'title ASC'));

        $this->render('one',array('models'=> $models));
    }
}