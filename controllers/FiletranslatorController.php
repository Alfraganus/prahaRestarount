<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class FileTranslatorController extends Controller
{
    public function actionTest()
    {
        \Yii::$app->language = 'it';
        $text = \Yii::t('app', 'Hello World from Database!');

        return $this->render('helloWorldFromDatabase', ['text' => $text]);
    }
}
