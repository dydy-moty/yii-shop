<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order_good}}`.
 */
class m201225_063745_create_order_good_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order_good}}', [
            'id'         => $this->primaryKey(),
            'order_id'   => $this->integer(),
            'product_id' => $this->integer(),
            'name'       => $this->string(),
            'price'      => $this->integer(),
            'quantity'   => $this->integer(),
            'sum'        => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%order_good}}');
    }
}
