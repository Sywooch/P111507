<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `comment_like`.
 */
class m171231_025040_create_comment_like_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('comment_likes', [
            'id' => $this->primaryKey(),
            'comment_id' =>  $this->integer()->notNull(),
            'user_id' =>  $this->integer()->notNull(),
            'created_at' =>  $this->integer(),
            'updated_at' =>  $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('comment_likes');
    }
}
