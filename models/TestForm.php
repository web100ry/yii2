<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 29.03.18
 * Time: 10:41
 */

namespace app\models;


use yii\base\Model;

class TestForm extends Model
{
public $name;
public $email;
public $text;
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
        [['name', 'email'], 'required', 'message' => 'поле обов\'язкове'],
            ['email', 'email'],
            ['name', 'string', 'min'=>2, 'max'=>10, 'tooShort'=>'мало символів <2', 'tooLong'=>'забагато символів >10'],
            ['text', 'trim'], //коли поле не валідуэться, на сервер не передається!
           ['text', 'safe'], //для передачі даних в модель в будь якому випадку
            ['name', 'myRule'],
        ];

    }

    public function myRule($attrs){
        if (!in_array($this->$attrs, ['hello', 'world'])){
            $this->addError($attrs,'Wrong!');
        }
    }



}
