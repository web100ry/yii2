<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 29.03.18
 * Time: 10:41
 */

namespace app\models;


//use yii\base\Model;
use yii\db\ActiveRecord;

class TestForm extends ActiveRecord
{
    public static function tableName()
    {
        return 'posts';
    }
//public $name;
//public $email;
//public $text;
public function attributeLabels()
{
    return [
        'name' => 'Ім\'я',
        'email' => 'Email',
        'text' => 'Повідомлення',
    ];
}

    public function rules()
    {
        return [
        [['name', 'text'], 'required', ],
            ['email', 'email'],
        ];

    }

}
