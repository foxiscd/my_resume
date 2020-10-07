<?php


namespace app\controllers;


use app\models\User;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class AccController extends Controller
{

    public function actionView($id = null)
    {
        $request =\Yii::$app->request;

        $user = User::findByToken();
        if ($user === null) {
            throw new NotFoundHttpException('Вы не авторизовались');
        }

        if ($id == $user->id) {
            return $this->render('view' ,  ['user' => $user]);
        } else {
            $this->redirect(['acc/view' , 'id' => $user->id]);
        }
    }
}

