<?php

use yii\db\Schema;
use yii\db\Migration;

class m171231_024454_drop_table_unuse extends Migration
{
    public function up()
    {
        $this->dropTable('comment_answer');
        $this->dropTable('comment_question');
    }

    public function down()
    {
        $this->createTable('comment_answer', [
            'id' => Schema::TYPE_PK,
        ]);
        $this->createTable('comment_question', [
            'id' => Schema::TYPE_PK,
        ]);
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
