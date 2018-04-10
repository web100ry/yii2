<?php
// $this->title = 'Одна стаття';
use app\components\MyWidget;
?>

<?php $this->beginBlock('block1');?>
<h1>БЛОК 1</h1>
<?php $this->endBlock();?>

<h1>Show Action</h1>
<?php

//    echo MyWidget::widget(['name'=>'Vasya']);
    //echo MyWidget::widget();
MyWidget::begin();
    echo "hello world";
MyWidget::end();



?>
<br>
<button class="btn btn-success">Click me...</button><br>
<?php // $this->registerJSFile('@web/js/scripts.js',['depends'=>'yii\web\YiiAsset'])?>
<?php //$this->registerJS('$(\'.container\').append(\'<p>SHOW!!!</p>\');',\yii\web\View::POS_LOAD)?>
<?php //$this->registerCSS('.container{background: #ccc;}')?>
<?php
MyWidget::begin();
echo "привіт світ!";
MyWidget::end();
?>
<?php



//foreach ($cats as $cat){
    //echo $cat->title."<br>";
//    echo $cat['title']."<br>";
//}

//debug($cats);
//echo count($cats->products);
//echo count($cats[0]->products);
//debug($cats);

foreach ($cats as $cat)
{
    echo '<ul>';
        echo '<li>'.$cat->title.'</li>';
        $products=$cat->products;
        foreach ($products as $product){
            echo '<ul>';
            echo '<li>'.$product->title.'</li>';
            echo '</ul>';

        }

    echo '</ul>';
}

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
