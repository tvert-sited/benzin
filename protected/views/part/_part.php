<?php

        echo '<pre>';
        print_r($_POST);
        echo '</pre>';

        echo CHtml::form('','POST');


        echo CHtml::textField('text','valet');

        $a = CHtml::listData($models,'code','title');

        echo CHtml::dropDownList('drop','',$a);

        echo CHtml::submitButton('Отправка');

        echo CHtml::endForm();

/**
 * Created by PhpStorm.
 * User: admin7
 * Date: 09.10.14
 * Time: 11:50
 */ 