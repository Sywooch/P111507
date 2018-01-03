<?php

use yii\db\Migration;

/**
 * Handles the creation of table `answer_favorites`.
 */
class m180102_154558_create_answer_favorites_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('answer_favorites', [
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
        $this->dropTable('answer_favorites');
    }
}
