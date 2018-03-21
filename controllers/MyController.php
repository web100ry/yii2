<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 21.03.18
 * Time: 19:55
 */

namespace app\controllers;


use yii\web\Controller;

class MyController extends Controller
{
    public function actionIndex($id=null){
        $names = ['Ivanov','Petrov', 'Sidorov', 'Popov'];
        $hi='Hello, world!';
if(!$id)$id='test';
      //  return $this->render('index',['hello'=>$hi, 'names'=>$names]);
        return $this->render('index',compact('hi', 'names','id'));
    }
}