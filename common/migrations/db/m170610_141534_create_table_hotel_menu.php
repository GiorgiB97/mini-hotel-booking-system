<?php

use yii\db\Migration;

class m170610_141534_create_table_hotel_menu extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%hotel_menu}}',[
            'id' => $this->primaryKey(),
            'price' => $this->integer(4)->notNull()
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%hotel_menu}}');
    }
}
