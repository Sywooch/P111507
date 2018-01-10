<?php

use yii\db\Migration;

/**
 * Handles the creation of table `answer_follows`.
 */
class m180109_143857_create_answer_follows_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('answer_follows', [
            'id' => $this->primaryKey(),
            'answer_id' =>  $this->integer()->notNull(),
            'user_id' =>  $this->integer()->notNull(),
            'create_time' =>  $this->integer(),
            'update_time' =>  $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('answer_follows');
    }
}
