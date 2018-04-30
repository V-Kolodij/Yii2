<?php

use yii\db\Migration;

/**
 * Class m180430_194842_creat_news_table
 */
class m180430_194842_creat_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(
            'news',[
                'id'=>'pk',
                'title'=>'string NOT NULL',
                'description'=>'text NOT NULL',
                'content'=>'text NOT NULL',

            ]
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('news');
        //echo "m180430_194842_creat_news_table cannot be reverted.\n";

        //return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180430_194842_creat_news_table cannot be reverted.\n";

        return false;
    }
    */
}
