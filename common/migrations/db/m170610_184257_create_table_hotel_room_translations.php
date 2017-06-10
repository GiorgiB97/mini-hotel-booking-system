<?php

use yii\db\Migration;

class m170610_184257_create_table_hotel_room_translations extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%hotel_room_translations}}',[
            'id' => $this->primaryKey(),
            'room_id' => $this->integer(11)->notNull(),
            'locale' => $this->string(10)->notNull(),
            'name' => $this->string(255)->notNull(),
            'short_description' => $this->string(255)->null(),
            'description' => $this->text()->notNull(),
        ]);
        $this->addForeignKey(
            'fk_hotel_room_translations',
            '{{%hotel_room_translations}}',
            'room_id',
            '{{%hotel_room}}',
            'id');
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_hotel_room_translations','{{%hotel_room_translations}}');
        $this->dropTable('{{%hotel_room_translations}}');
    }
}
