<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 21.03.18
 * Time: 20:42
 */
namespace app\controllers\admin;

use \yii\web\Controller;

class UserController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}