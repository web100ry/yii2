<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use kartik\datetime\DateTimePicker;
use mihaildev\ckeditor\CKEditor;

?>
<h1>
   Form for Post Test
</h1>




<?php if (Yii::$app->session->hasFlash('success')):?>

    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Well done!</strong>
        <?php echo Yii::$app->session->getFlash('success');?>
    </div>


<?php endif;?>


<?php if (Yii::$app->session->hasFlash('error')):?>

    <div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Warning!</strong>

    <?php echo Yii::$app->session->getFlash('error');?>
    </div>
<?php endif;?>

<?php $form = ActiveForm::begin(['options'=>['id'=>'testForm']])?>
<?= $form->field($model,'name')?>
<?= $form->field($model,'email')->input('email')?>


<?php
echo DateTimePicker::widget([
    'name' => 'datetime_10',
    'options' => ['placeholder' => 'Select operating time ...'],
    'convertFormat' => true,
    'pluginOptions' => [
        'format' => 'd-M-Y g:i A',
        'startDate' => '01-Mar-2014 12:00 AM',
        'todayHighlight' => true
    ]
]);

?>
<?php
    echo $form->field($model, 'text')->widget(CKEditor::className(),[
    'editorOptions' => [
    'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
    'inline' => false, //по умолчанию false
    ],
    ]);
?>


<?php // echo $form->field($model,'text')->textarea(['rows'=>5])?>
<?= Html::submitButton('Відправити', ['class' => 'btn btn-success'])?>
<?php ActiveForm::end()?>



<?php
//$names = ['Ivanov','Petrov', 'Sidorov', 'Popov'];
//debug($names);
//debug($model);

//$this->debug(Yii::$app);

// \app\controllers\debug(Yii::$app); // виклик загальної функції дебаг

//debug(Yii::$app); //вивід через оголошену функцію, яку підклюсили в індексі