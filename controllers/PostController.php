<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 22.03.18
 * Time: 19:35
 */

namespace app\controllers;

use Yii;

class PostController extends AppController
{
public $layout='basic';
    public function actionIndex()
    {
        if (Yii::$app->request->isAjax){
            debug($_GET);
            return 'test';
        }
    //    $names = ['Ivanov','Petrov', 'Sidorov', 'Popov'];

    // $this->debug($names);
    //   $this->debug(Yii::$app);
    //    print_r($names);
    //    var_dump(Yii::$app);
        return $this->render('test');
    }
    public function actionShow()
    {
   //     $this->layout = 'basic';
        return $this->render('show');
    }
}
