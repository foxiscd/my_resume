<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\helpers\Html;

?>
<div class="site-index">
    <div class="jumbotron">
        <h1><?= Html::a('Мое резюме', ['resume/']) ?></h1>

        <p class="lead">Здесь находится страница с моим резюме на вакансию PHP-Developer</p>

        <p><a class="btn btn-lg btn-success" href="<?= Url::toRoute('resume/about-me') ?>">Подробнее обо мне</a></p>
    </div>

    <div class="body-content">


    </div>
</div>
