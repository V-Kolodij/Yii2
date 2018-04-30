<?php

use yii\db\Migration;

/**
 * Class m180430_182400_creat_country_table
 */
class m180430_182400_creat_country_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(
            'country',[
                'id'=>'pk',
                'code'=>'string NOT NULL',
                'name'=>'string NOT NULL',
                'population'=>'int NOT NULL',

            ]
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('country');
        //echo "m180430_182400_creat_country_table cannot be reverted.\n";

        //return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180430_182400_creat_country_table cannot be reverted.\n";

        return false;
    }
    */
}
