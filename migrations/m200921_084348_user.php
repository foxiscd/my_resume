<?php

use yii\db\Migration;

/**
 * Class m200921_084348_user
 */
class m200921_084348_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200921_084348_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200921_084348_user cannot be reverted.\n";

        return false;
    }
    */
}
