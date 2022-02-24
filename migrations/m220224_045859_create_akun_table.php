<?php

use app\models\Akun;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%akun}}`.
 */
class m220224_045859_create_akun_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%akun}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string(255)->unique(),
            'nama' => $this->string(255),
            'password' => $this->string(255),
            'authKey' => $this->string(255)->null(),
            'accessToken' => $this->string(255)->null(),
        ]);
        $akun_model = new Akun();
        $akun_model->username = "admin";
        $akun_model->nama = "admin";
        $akun_model->password = "admin";
        $akun_model->save();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%akun}}');
    }
}
