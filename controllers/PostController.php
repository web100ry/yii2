<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 22.03.18
 * Time: 19:35
 */

namespace app\controllers;

use Yii;
use app\models\TestForm;

class PostController extends AppController
{
public $layout='basic';

public function beforeAction($action)
{
 //debug($action);
    if ($action->id == 'index'){
        $this->enableCsrfValidation = false; // відключення токена причому метод ПОСТ працює
    }
    return parent::beforeAction($action); //  Change the autogenerated stub
}


    public function actionIndex()
    {
        if (Yii::$app->request->isAjax){
           // debug($_POST);
            debug(Yii::$app->request->post());
            return 'test';
        }


    //    $names = ['Ivanov','Petrov', 'Sidorov', 'Popov'];

    // $this->debug($names);
    //   $this->debug(Yii::$app);
    //    print_r($names);
    //    var_dump(Yii::$app);

        $model= new TestForm();



        return $this->render('test',compact('model'));
    }
    public function actionShow()
    {
   //     $this->layout = 'basic';
     $this->view->title='Одна стаття!';
     $this->view->registerMetaTag(['name'=>'keywords', 'content'=>'ключові слова...']);
     $this->view->registerMetaTag(['name'=>'description', 'content'=>'Опис сторінки...']);
        return $this->render('show');
    }
}
