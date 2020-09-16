<div><h2 style="text-align: center">Авторизация</h2></div>
<?php $form = \yii\widgets\ActiveForm::begin(); ?>
<div><?= $form->field($model, 'email')->input('email') ?></div>
<div><?= $form->field($model, 'password')->label('Пароль')->passwordInput() ?></div>
<?= \yii\helpers\Html::submitButton('Отправить', ['class' => 'btn btn-success']); ?>
<?php \yii\widgets\ActiveForm::end(); ?>