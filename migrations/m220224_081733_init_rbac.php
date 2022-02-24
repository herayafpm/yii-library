<?php

use yii\db\Migration;

/**
 * Class m220224_081733_init_rbac
 */
class m220224_081733_init_rbac extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $auth = \Yii::$app->authManager;
        $createBook = $auth->createPermission('createBook');
        $createBook->description = 'Create a book';
        $auth->add($createBook);

        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $createBook);

        $auth->assign($admin, 1);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220224_081733_init_rbac cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220224_081733_init_rbac cannot be reverted.\n";

        return false;
    }
    */
}
