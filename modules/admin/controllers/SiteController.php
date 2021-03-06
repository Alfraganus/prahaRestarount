<?php

namespace app\modules\admin\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Signup;

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


    public function actionIndex($category=null)
    {
        $searchModel = new PostSearch();
$dataProvider = $searchModel->search(Yii::$app->request->queryParams,true);

        \Yii::$app->language = 'en';
        if ($category) {
            $searchModel->category_id = $category;
        }
       
        $dataProvider = $searchModel->search(null,true);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);


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
    public function actionLogout()
    {
        if(!Yii::$app->user->isGuest)
        {
            Yii::$app->user->logout();
            return $this->redirect(['login']);
        }
    }

    public function actionSignup()
    {
        $model = new Signup();

        if(isset($_POST['Signup']))
        {
            $model->attributes = Yii::$app->request->post('Signup');

            if($model->validate() && $model->signup())
            {
                return $this->redirect(['default/']);
            }
        }

        return $this->render('signup',['model'=>$model]);
    }


    //1. Проверить существует ли пользователь?
    //2. "Внести" пользователя в систему(в сессию)

    public function actionLogin()
    {
        if(!Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }

        $login_model = new Login();

        if( Yii::$app->request->post('Login'))
        {
            $login_model->attributes = Yii::$app->request->post('Login');

            if($login_model->validate())
            {
                Yii::$app->user->login($login_model->getUser());
                return $this->goHome();
            }
        }

        return $this->render('login',['login_model'=>$login_model]);
    }

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
