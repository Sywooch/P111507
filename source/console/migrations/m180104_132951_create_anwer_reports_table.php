<?php

use yii\db\Migration;

/**
 * Handles the creation of table `answer_reports`.
 */
class m180104_132951_create_anwer_reports_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('answer_reports', [
            'id' => $this->primaryKey(),
            'answer_id' =>  $this->integer()->notNull(),
            'user_id' =>  $this->integer()->notNull(),
            'reason_id' =>  'tinyint(4) NOT NULL',
            'create_time' =>  $this->integer(),
            'update_time' =>  $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('answer_reports');
    }
}
