<?php
namespace app\components;

use Yii;
use yii\helpers\Url;

class Init  extends yii\base\Component  {

    public function init() {

        if (Yii::$app->getUser()->isGuest &&
            Yii::$app->getRequest()->url != ('/'.Yii::$app->getUser()->loginUrl[0]) &&
            Yii::$app->getRequest()->url != ('/site/request-password-reset') &&
            Yii::$app->getRequest()->url != ('/site/signup')){
            Yii::$app->getResponse()->redirect(Yii::$app->getUser()->loginUrl);
        }


        parent::init();
    }
}