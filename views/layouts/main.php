<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use Yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap ">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Резюме', 'url' => ['/resume/index']],
            ['label' => 'Контакты', 'url' => ['/resume/about-me']],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-3" style="float: right">
                <?php if (!empty($_COOKIE['authToken'])): ?>
                    <h3 style="text-align: center">Добро пожаловать!</h3>
                    <a href="<?= Url::toRoute('user/logout') ?>" type="button" class="btn btn-primary">
                        выйти
                    </a>
                <?php else: ?>
                    <div>
                        <div>
                            <h3 style="text-align: center">Управление аккаунтом: </h3>
                        </div>
                        <div>
                            <a href="<?= Url::toRoute('user/login') ?>" type="button" class="btn btn-primary">Войти
                            </a>
                            <a href="<?= Url::toRoute('user/register') ?>" type="button" class="btn btn-primary">
                                Зарегестрироваться
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-sm-9" style="float: left">

                <?php if (Yii::$app->session->hasFlash('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?= Yii::$app->session->getFlash('success') ?>
                    </div>
                <?php elseif (Yii::$app->session->hasFlash('errorVar')): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= Yii::$app->session->getFlash('errorVar') ?>
                    </div>
                <?php endif; ?>
                <?= $content ?>
            </div>

        </div>

    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
