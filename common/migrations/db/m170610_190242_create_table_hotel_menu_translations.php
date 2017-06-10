<?php

use yii\db\Migration;

class m170610_190242_create_table_hotel_menu_translations extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%hotel_menu_translations}}', [
            'id' => $this->primaryKey(),
            'menu_id' => $this->integer(11)->notNull(),
            'locale' => $this->string(10)->notNull(),
            'name' => $this->string(127)->notNull(),
            'description' => $this->text()->notNull(),
        ]);

        $this->addForeignKey(
            'fk_hotel_menu_translations',
            '{{%hotel_menu_translations}}',
            'menu_id',
            '{{%hotel_menu}}',
            'id');

    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_hotel_menu_translations','{{%hotel_menu_translations}}');
        $this->dropTable('{{%hotel_menu_translations}}');
    }
}
