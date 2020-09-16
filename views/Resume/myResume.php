<?php

use yii\helpers\Html;

?>

    <h1 style="text-align: center">Hello world!</h1>

<?php if (!$_COOKIE['authToken']): ?>

    <h2>Для просмотра резюме необходимо <?= Html::a('Зарегестрироваться', ['user/register']) ?></h2>

    <?php else: ?>

<h2>Тут мое резюме</h2>

    <?php endif; ?>