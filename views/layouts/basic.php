<?php
use app\assets\AppAsset;
use yii\helpers\Html;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="ua">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active"><?=Html::a('Головна', '/web/');?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link"> <?=Html::a('Статті', ['/post/index']);?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link"><?=Html::a('Стаття', ['/post/show']);?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
        <?= $content ?>
    </div>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>