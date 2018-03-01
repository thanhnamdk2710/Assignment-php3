<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="container" id=page>
    <?= Html::a('<div id="header"></div>', ['site/index']) ?>
    <div id="mainmenu">
        <ul>
            <li>
                <?= Html::a('<span class="icon-vehicle"></span>', ['vehicle-type/index'], ['title' => 'Vehicle Type']) ?>
            </li>
            <li>
                <?= Html::a('<span class="icon-line" style=""></span>', ['line/index'], ['title' => 'Line']) ?>
            </li>
            <li>
                <?= Html::a('<span class="icon-station"></span>', ['station/index'], ['title' => 'Station']) ?>
            </li>
            <li>
                <?= Html::a('<span class="icon-vehicle"></span>', ['vehicle/index'], ['title' => 'Vehicle']) ?>
            </li>
            <li>
                <?= Html::a('<span class="icon-driver"></span>', ['driver/index'], ['title' => 'Driver']) ?>
            </li>
            <li>
                <?= Html::a('<span class="icon-xml"></span>', ['xml/index'], ['title' => 'XML-XSD']) ?>
            </li>
            <li>
                <?= Html::a('<span class="icon-user"></span>', ['user/index'], ['title' => 'User']) ?>
            </li>
        </ul>
        <!-- Login / Logout -->
        <div id='access'>
            <?php
                if (Yii::$app->user->isGuest) {
                    echo Html::a('Login', ['site/login']);
                } else {
                    echo 
                        Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                            'Logout (' . Yii::$app->user->identity->username . ')',
                            ['class' => 'btn btn-link logout']
                        )
                        . Html::endForm();
                }
            ?>
        </div>
    </div>

    <?= $content ?>
    
    <div class="clear"></div>

    <div id="footer">
        <ul>
            <li class="sitemap">
                <?= Html::a('Site Map', ['site/index']) ?>
                <a href="#">Site Map</a>
            </li>
            <li class="copyr">
                <?= Html::a('Copyright &copy; 2013 by LVB', ['site/index']) ?>
            </li>
            <li class="allright">
                <?= Html::a('All Rights Reserved. <br>By WorldSkills International', ['site/index']) ?>
            </li>
        </ul>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
