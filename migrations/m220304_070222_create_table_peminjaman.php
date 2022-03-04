<?php

use yii\db\Migration;

/**
 * Class m220304_070222_create_table_peminjaman
 */
class m220304_070222_create_table_peminjaman extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%peminjaman}}', [
            'id' => $this->primaryKey(),
            'buku_id' => $this->integer()->notNull(),
            'peminjam' => $this->string(255),
            'qty' => $this->integer(11)->defaultValue(1),
        ]);
        $this->createIndex(
            'idx-peminjaman-buku_id',
            'peminjaman',
            'buku_id'
        );

        $this->addForeignKey(
            'fk-peminjaman-buku_id',
            'peminjaman',
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
        $this->dropTable('{{%peminjaman}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220304_070222_create_table_peminjaman cannot be reverted.\n";

        return false;
    }
    */
}
