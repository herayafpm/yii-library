<?php

use yii\db\Migration;

/**
 * Class m220304_064719_create_table_buku
 */
class m220304_064719_create_table_buku extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%buku}}', [
            'id' => $this->primaryKey(),
            'judul' => $this->string(255),
            'pengarang' => $this->string(255),
            'tahun_terbit' => $this->integer(11),
            'stok' => $this->integer(11)->defaultValue(0),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%buku}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220304_064719_create_table_buku cannot be reverted.\n";

        return false;
    }
    */
}
