<?php

namespace app\modules\admin\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */

public function actionSignup(){

if(!Yii::$app->user->isGuest){
    return $this->goHome();
}
$this->setMeta('Signup');
$model = new SignupForm();
if($model->load(\Yii::$app->request->post()) && $model->validate()){
    $user = new User();
    $user->username = $model->username;
    $user->password = \Yii::$app->security->generatePasswordHash($model->password);

if($user->save()){
    \Yii::$app->user->login($user);
    return $this->goHome();
}
}
return $this->render('signup',compact('model'));




}


    public function actionIndex()
    {
        \Yii::$app->language = 'en';
        return $this->render('index');
    }

    public function actionTranslate()
    { if(isset($_POST['Room']))
    {
        $roomsInput = $_POST['Room'];
        foreach($roomsInput as $item)
        {
            $sourceMessage = \app\models\SourceMessage::findOne(['message' => $item['description']]);

            // If null, I need to create source message
            if($sourceMessage == null)
            {
                $sourceMessage = new \app\models\SourceMessage();
            }
            $sourceMessage->category = 'app';
            $sourceMessage->message = $item['description']['msg'];
            $sourceMessage->save(false);

            $otherLanguages = ['en', 'cz'];

            foreach($otherLanguages as $otherLang)
            {
                $message = \app\models\Message::findOne(['id' => $sourceMessage->id, 'language' => $otherLang]);
                if($message == null)
                {
                    $message = new \app\models\Message();
                }
                $message->id = $sourceMessage->id;
                $message->language = $otherLang;
                $message->translation = $item['description'][$otherLang];
                $message->save(false);
            }
            return "<script> alert('data has been inserted')</script>";

           /* // Room to update
            $roomToUpdate = \app\models\Room::findOne($item['id']);
            $roomToUpdate->description = $item['description']['en'];
            $roomToUpdate->save();*/
        }
    }

       /* $rooms = Room::find()
            ->all();*/

        return $this->render('translations');

    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
