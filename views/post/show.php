<h1>Show Action</h1>

<button class="btn btn-success">Click me...</button>
<?php //$this->registerJSFile('@web/js/scripts.js',['depends'=>'yii\web\YiiAsset'])?>
<?php $this->registerJS('$(\'.container\').append(\'<p>SHOW!!!</p>\');',\yii\web\View::POS_LOAD)?>
<?php $this->registerCSS('.container{background: #ccc;}')?>