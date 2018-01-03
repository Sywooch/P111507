<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comment_follows`.
 */
class m180101_043510_create_comment_follows_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('comment_follows', [
            'id' => $this->primaryKey(),
            'comment_id' =>  $this->integer()->notNull(),
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
        $this->dropTable('comment_follows');
    }
}
