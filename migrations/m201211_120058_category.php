<?php

use yii\db\Migration;

/**
 * Class m201211_120058_category
 */
class m201211_120058_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category}}', [
            'id'           => $this->primaryKey(),
            'cat_name'     => $this->string(),
            'browser_name' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%category}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201211_120058_category cannot be reverted.\n";

        return false;
    }
    */
}
