<?php

use yii\db\Migration;

/**
 * Handles adding position to table `user`.
 */
class m180115_020844_add_position_column_to_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('user', 'profile_description', $this->text()->after('quotes'));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('user', 'profile_description');
    }
}
