<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order}}`.
 */
class m201225_063730_create_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order}}', [
            'id'      => $this->primaryKey(),
            'date'    => $this->date(),
            'name'    => $this->string(),
            'email'   => $this->string(),
            'phone'   => $this->string(),
            'address' => $this->string(),
            'sum'     => $this->integer(),
            'status'  => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%order}}');
    }
}
