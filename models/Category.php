<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 01.04.18
 * Time: 23:04
 */

namespace app\models;


use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public static function tableName()
    {
        return 'categories';
    }
}