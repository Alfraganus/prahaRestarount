<?php

namespace app\modules\admin;
use Yii;

/**
 * admin module definition class
 */
class module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\admin\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        yii::$app->viewPath='@app/modules/admin/views';

//Yii::$app->viewPath = '@app/modules/admin/views';


        // custom initialization code goes here
    }
}
