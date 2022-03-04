<?php

use yii\db\Migration;

/**
 * Class m220304_070648_create_table_pengembalian
 */
class m220304_070648_create_table_pengembalian extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pengembalian}}', [
            'id' => $this->primaryKey(),
            'buku_id' => $this->integer()->notNull(),
            'peminjam' => $this->string(255),
            'qty' => $this->integer(11)->defaultValue(1),
        ]);
        $this->createIndex(
            'idx-pengembalian-buku_id',
            'pengembalian',
            'buku_id'
        );

        $this->addForeignKey(
            'fk-pengembalian-buku_id',
            'pengembalian',
            'buku_id',
            'buku',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%pengembalian}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220304_070648_create_table_pengembalian cannot be reverted.\n";

        return false;
    }
    */
}
