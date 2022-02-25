<?php

namespace app\controllers;

use app\models\auth\LoginForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

class AuthController extends Controller
{
    public $layout = "auth-template";

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['login', 'logout', 'signup'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['login', 'signup'],
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['logout'],
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
    
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->redirect("/admin/dashboard");
        }
        $login_model = new LoginForm();
        if($login_model->load(Yii::$app->request->post()) && $login_model->login()){
            return $this->redirect("/admin/dashboard");
        }
        $login_model->password = '';
        return $this->render('login', [
            'login_model' => $login_model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->redirect("/admin/dashboard");
    }
}
