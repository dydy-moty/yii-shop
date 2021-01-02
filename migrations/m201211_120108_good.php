<?php

use yii\db\Migration;

/**
 * Class m201211_120108_good
 */
class m201211_120108_good extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%good}}', [
            'id'           => $this->primaryKey(),
            'category_id'  => $this->integer(),
            'name'         => $this->string(),
            'price'        => $this->integer(),
            'description'  => $this->text(),
            'img'          => $this->string(),
            'link_name'    => $this->string(),
        ]);

    }



    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%good}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201211_120108_good cannot be reverted.\n";

        return false;
    }
    */
}
