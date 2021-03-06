<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 22.03.18
 * Time: 19:35
 */

namespace app\controllers;

use app\models\Category;
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


    /**
     * @return string|\yii\web\Response
     */
    public function actionIndex()
    {
        if (Yii::$app->request->isAjax){
            debug(Yii::$app->request->post());
            return 'test';
        }

TestForm::deleteAll(['>','id',8]);
       // $post = TestForm::findOne(7);
       // debug($post);
       // $post->email='1sd22@sd1.sd1';
        //$post->name='1111';
        //$post->text='222';
       // $post->save();
      //  $post->delete();


        $model= new TestForm();

//        $model->name='Автор2';
//        $model->email='mail@test.ua';
//        $model->text='Some TEXT';
//        $model->save();



        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()){
             //  debug($model);
                Yii::$app->session->setFlash('success','Данні прийнято!');
               return $this->refresh();
            }  else {
                Yii::$app->session->setFlash('error','Помилка!');
            }
        }

       return $this->render('test',compact('model'));
      //  return $this->render('test');
      //  debug($post);
    }
    public function actionShow()
    {
   //     $this->layout = 'basic';
     $this->view->title='Одна стаття!';
     $this->view->registerMetaTag(['name'=>'keywords', 'content'=>'ключові слова...']);
     $this->view->registerMetaTag(['name'=>'description', 'content'=>'Опис сторінки...']);

     //$cats= Category::find()->orderBy(['id'=>SORT_DESC])->all();
     //$cats= Category::find()->asArray()->all();
     //$cats= Category::find()->asArray()->where('parent=691')->all();
     //$cats= Category::find()->asArray()->where(['parent'=>691])->all();
     //$cats= Category::find()->asArray()->where(['like','title', 'pp'])->all(); //вибір по полю тайтл все де зустрічаються пп
    // $cats= Category::find()->asArray()->where(['<=','id', 695])->all(); //вибір по полю id все <= 695
        //$cats= Category::find()->asArray()->where('parent=691')->limit(2)->all();
       // $cats= Category::find()->asArray()->where(['parent'=>691])->limit(1)->one();
        //$cats= Category::find()->asArray()->count();
        //$cats= Category::findOne(['parent'=>691]);
        //$cats= Category::findAll(['parent'=>691]);

        //    $query = "SELECT * FROM categories WHERE title LIKE '%pp%'";
           // $query = "SELECT * FROM categories WHERE title LIKE :search"; //безпечний запит через параметр (захист від ін'єкцій)

           // $cats=Category::findBySql($query, [':search'=>'%pp%'])->all();

        //------------------------------------------------------
      //  $cats = Category::findOne('694'); //
      //  $cats = Category::find()->with('products')->where('id=694')->all(); //
        //$cats = Category::find()->all(); // відкладена загрузка - 36 запитів
        $cats = Category::find()->with('products')->all(); //жадна загрузка! - 6 запитів!





return $this->render('show', compact('cats'));
    }
}
