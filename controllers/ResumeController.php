<?php


namespace app\controllers;


use app\models\TestForm;
use app\models\User;
use yii\web\Controller;
use Yii;
use app\models\services\Debug;

class ResumeController extends Controller
{
    public function actionIndex()
    {
        $this->view->title = 'Мое резюме';
        return $this->render('myResume');
    }


    public function actionAboutMe()
    {
        $this->view->title = 'Обо мне';
        return $this->render('aboutMe');
    }

}