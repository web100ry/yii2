<?php // $this->title = 'Одна стаття';?>

<?php $this->beginBlock('block1');?>
<h1>БЛОК 1</h1>
<?php $this->endBlock();?>

<h1>Show Action</h1>

<button class="btn btn-success">Click me...</button>
<?php // $this->registerJSFile('@web/js/scripts.js',['depends'=>'yii\web\YiiAsset'])?>
<?php //$this->registerJS('$(\'.container\').append(\'<p>SHOW!!!</p>\');',\yii\web\View::POS_LOAD)?>
<?php //$this->registerCSS('.container{background: #ccc;}')?>


<?php

debug($cats);


$script = <<< JS
$("button").on('click', function(e) {
    $.ajax({
       url: 'index.php?r=post/index',
       type: 'POST',
       data: {id: 'id'},
       success: function(data) {
           console.log(data);
       }
    });
});
JS;
$this->registerJs($script);





//$js = <<< JS
//        $('#btn').click(function(){
//            $.ajax({
//                url: 'index.php?r=post/index',
//                data: {test: '112233'},
//                type: 'GET',
//                success: function(res){
//                    console.log(res);
//                },
//                error: function(){
//                    alert('Error!');
//                }
//            });
//        });
//JS;
//$this->registerJs($js);
?>
