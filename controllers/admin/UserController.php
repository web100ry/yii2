<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 21.03.18
 * Time: 20:42
 */
namespace app\controllers\admin;

use \app\controllers\AppController; //For using AppController

class UserController extends AppController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}