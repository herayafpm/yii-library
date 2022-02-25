<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class Akun extends ActiveRecord implements IdentityInterface
{
    public function rules()
    {
        return [
            [['username', 'nama', 'password', 'authKey', 'accessToken'], 'string', 'max' => 255],
            [['username'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Username'),
            'nama' => Yii::t('app', 'Nama'),
            'password' => Yii::t('app', 'Password'),
            'authKey' => Yii::t('app', 'Auth Key'),
            'accessToken' => Yii::t('app', 'Access Token'),
        ];
    }
    

    /**
     * {@inheritdoc}
     * @return AkunQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AkunQuery(get_called_class());
    }
    
    public function beforeSave($insert)
    {
        $this->password = password_hash($this->password,PASSWORD_DEFAULT);
        return parent::beforeSave($insert);
    }

    public static function tableName()
    {
        return '{{akun}}';
    }

    public static function findIdentity($id)
    {
        return static::find($id)->one();
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::find()->where(['access_token' => $token])->one();
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public function findByUsername($username)
    {
        return new static($this->find()->where(['username' => $username])->one());
    }

    public function validatePassword($password)
    {
        return password_verify($password, $this->password);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }
}
