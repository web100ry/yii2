<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>
<h1>
   Form for Post Test
</h1>

<?php $form = ActiveForm::begin(['options'=>['id'=>'testForm']])?>
<?= $form->field($model,'name')?>
<?= $form->field($model,'email')->input('email')?>
<?= $form->field($model,'text')->textarea(['rows'=>5])?>
<?= Html::submitButton('Відправити', ['class' => 'btn btn-success'])?>
<?php ActiveForm::end()?>



<?php
$names = ['Ivanov','Petrov', 'Sidorov', 'Popov'];
debug($names);
debug($model);
//$this->debug(Yii::$app);

// \app\controllers\debug(Yii::$app); // виклик загальної функції дебаг

//debug(Yii::$app); //вивід через оголошену функцію, яку підклюсили в індексі