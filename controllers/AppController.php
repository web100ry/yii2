<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 22.03.18
 * Time: 19:29
 */

namespace app\controllers;
use yii\web\Controller;
class AppController extends Controller
{
    public function debug($arr)
    {
        echo '<pre>'.print_r($arr,true).'</pre>';
    }
}

function debug($arr)
{
    echo '<pre>' . print_r($arr, true) . '</pre>';
}