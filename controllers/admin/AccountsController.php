<?php

namespace app\controllers\admin;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

class AccountsController extends Controller
{
    public $layout = "admin-template";

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['index'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['index'],
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
    
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect("/auth/login");
        }
        return $this->render("index");
    }
}
