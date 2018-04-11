<?php
use app\assets\AppAsset;
use yii\helpers\Html;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1">
    -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?= Html::csrfMetaTags() // для генерації токенів та ідентифікації POST запитів?>
    <title><?= $this->title?></title>
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

        </ul>


            <?php
                //debug($this->blocks);
                if(isset($this->blocks['block1'])):
            ?>

            <?php echo $this->blocks['block1'];?>

            <?php endif; ?>



        <?= $content ?>
    </div>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>