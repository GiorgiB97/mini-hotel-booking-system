<?php

use yii\db\Migration;

class m170610_142341_create_table_hotel_booking extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%hotel_booking}}',[
            'id' => $this->primaryKey(),
            'room_id' => $this->integer(11)->notNull(),
            'menu_id' => $this->integer(11)->null(),
            'name' => $this->string(63)->notNull(),
            'surname' => $this->string(127)->notNull(),
            'pid' => $this->string(32)->notNull(),
            'country' => $this->string(123)->notNull(),
            'city' => $this->string(123)->notNull(),
            'mobile' => $this->string(31)->notNull(),
            'email' => $this->string(31)->null(),
            'start_date' => $this->integer(11)->notNull(),
            'end_date' => $this->integer(11)->notNull(),
            'price' => $this->integer(5)->notNull(),
            'created_at' => $this->integer(11)->notNull(),
            'updated_at' => $this->integer(11)->null(),
            'deleted_at' => $this->integer(11)->null()
        ]);

        $this->addForeignKey(
            'fk_booking_room_id',
            '{{%hotel_booking}}',
            'room_id',
            '{{%hotel_room}}',
            'id'
        );

        $this->addForeignKey(
            'fk_booking_menu_id',
            '{{%hotel_booking}}',
            'menu_id',
            '{{%hotel_menu}}',
            'id'
        );

    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_booking_menu_id','{{%hotel_booking}}');
        $this->dropForeignKey('fk_booking_room_id','{{%hotel_booking}}');
        $this->dropTable('{{%hotel_booking}}');
    }
}
