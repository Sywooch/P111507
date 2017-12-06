<?php

use yii\db\Migration;
use common\models\Topics;
class m170311_153803_insert_topic extends Migration
{
    public function up()
    {
        $topic_names = [
            'topic1',
            'topic2',
            'topic3',
            'topic4',
            'topic5',
            'topic6',
            'topic7',
            'topic8',
            'topic9',
            'topic10',
            'topic11',
            'topic12',
            'topic13',
            'topic14',
        ];
        foreach ($topic_names as $key => $value) {
            $topic = new Topics();
            $topic->title = $value;
            $topic->create_time = new \yii\db\Exception('NOW');
            $topic->status = Topics::STATUS_ACTIVE;
            $topic->save();
        }
    }

    public function down()
    {
        echo "m170311_153803_insert_topic cannot be reverted.\n";

        return false;
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
