<?php

use yii\db\Migration;

class m170610_141534_create_table_hotel_menu extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%hotel_menu}}',[
            'id' => $this->primaryKey(),
            'description' => $this->text()->notNull(),
            'price' => $this->integer(4)->notNull()
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%hotel_menu}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170610_141534_create_table_hotel_menu cannot be reverted.\n";

        return false;
    }
    */
}
