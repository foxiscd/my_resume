<div><h2 style="text-align: center">Регистрация</h2></div>
<?php $form = \yii\widgets\ActiveForm::begin(['action' => 'index.php?r=user/sign-in']); ?>
<?= $form->field($user, 'nickname')->label('Имя') ?>
<?= $form->field($user, 'email')->input('email') ?>
<?= $form->field($user, 'password')->label('Пароль')->passwordInput() ?>
<?= \yii\helpers\Html::submitButton('Отправить', ['class' => 'btn btn-success']); ?>
<?php \yii\widgets\ActiveForm::end(); ?>
