<?php


namespace app\controllers;


use app\Exceptions\CreateException;
use app\Exceptions\LoginException;
use app\models\LoginForm;
use app\models\services\Debug;
use app\models\User;
use yii\web\Controller;
use Yii;

class UserController extends Controller
{
    public function actionRegister()
    {
        $user = new User();

        $this->view->title = 'Регистрация';
        return $this->render('register', ['user' => $user]);
    }

    public function actionSignIn()
    {
        $user = new User();
        if ($user->load(Yii::$app->request->post()) && $user->validate()) {
            try {
                $user->userSignIn(Yii::$app->request->post('User'));
                Yii::$app->session->setFlash('success', 'Юзер зарегестрирован.');
                $this->refresh();
            } catch (CreateException $e) {
                Yii::$app->session->setFlash('errorVar', $e->getMessage());
            }
        }

        $this->redirect(['user/register']);

    }

    public function actionLogout()
    {
        $user = new User();

        $user->userLogout($user);
        $this->redirect('index');
    }

    public function actionLogin()
    {
        $user = new User();
        $model = new LoginForm();

        if (!empty($_COOKIE['authToken'])){
            $this->redirect('index');
        }elseif ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                try {
                    $user->userLogin(Yii::$app->request->post('LoginForm'));
                    $this->redirect('index');
                } catch (LoginException $e) {
                    Yii::$app->session->setFlash('errorVar', $e->getMessage());
                }
            }
        }
        return $this->render('login', ['model' => $model]);
    }
}