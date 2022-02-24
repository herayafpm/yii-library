<?php

namespace app\models\auth;

use app\models\Akun;
use app\models\User;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property-read User|null $user
 *
 */
class LoginForm extends Model
{
    public $username;
    public $password;

    private $_user = false;

    public function rules()
    {
        return [
            [['username','password'],'required'],
            ['password','validatePassword']
        ];
    }

    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect username or password.');
            }
        }
    }

    public function getUser()
    {
        if ($this->_user === false) {
            $user_model = new Akun();
            $this->_user = $user_model->findByUsername($this->username);
        }

        return $this->_user;
    }

    public function login()
    {
        if ($this->validate()) {
            return \Yii::$app->user->login($this->getUser(), $this->rememberMe ?? false ? 3600*24*30 : 0);
        }
        return false;
    }
}