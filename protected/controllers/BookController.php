<?php


class BookController extends Controller
{

    public function actionIndex($id)
    {




        $model = Book::model()->findByPk($id);

        $a = $this->render('index',array('model'=>$model),true);
       // echo $a;

        }








}

